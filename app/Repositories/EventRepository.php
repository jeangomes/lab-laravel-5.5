<?php

namespace App\Repositories;

use App\Event;
use Illuminate\Support\Facades\DB;

class EventRepository extends BaseRepository
{

    protected $modelClass = Event::class;

    public function getEvents($filters)
    {
        $query = $this->newQuery();
        //$query->orderByRaw('data_extrato IS NULL DESC');
        $query->orderBy('start_date', 'DESC');
        return $query->select('title', 'start_date', 'id',
            'description','picture','type')
            ->filter($filters)
            //->whereNull('transfer_id')
      /*      ->with(['pessoa' =>
                function ($q) {
                    return $q->select('id', 'nome_razao');
                }, 'contaplano' =>
                function ($qu) {
                    return $qu->select('id', 'nome');
                }])*/->paginate(10);
    }

    public function getExtrato($filters)
    {
        $cont = new BankAccountRepository();
        $conta = $cont->getOpeningBalance(1);

        $query_saldo_parcial = $this->newQuery();
        $query_saldo_parcial->orderBy('data_extrato');
        $data_de = $filters->filters()['data_de'] ?? '';
        $query_saldo_parcial->select(
            DB::raw('@dc:=type_mov AS tipo'),
            DB::raw('@saldo:=IF(@dc = 1,@saldo + valor_total,@saldo - valor_total) AS saldo'))
            ->where('id_conta_bancaria', 1)
            ->whereRaw("data_extrato between '$conta->data_saldo' and DATE_SUB('$data_de', INTERVAL 1 DAY) ")
            ->get();

        $query = $this->newQuery();
        $query->orderBy('data_extrato');
        return $query->select('id', 'type_mov', 'valor_total', 'descricao', 'data_extrato',
            DB::raw('@dc:=type_mov AS tipo'),
            DB::raw('@saldo:=IF(@dc = 1,@saldo + valor_total,@saldo - valor_total) AS saldo'))
            ->filter($filters)->get();
    }

    public function getExtratoArea($filters)
    {
        $subQuery = Transaction::selectRaw('id, if(short_name is not null,short_name,nome) as nome')
            ->whereRaw('rateio=1')
            ->from(DB::raw("tbl_areas"));
        $query = DB::table(DB::raw("({$subQuery->toSql()}) d"))
            ->select(DB::raw("GROUP_CONCAT(DISTINCT CONCAT('sum(case when tbl_a.id = ',id,' then valor else 0 end) AS `',nome, '`')) as areas_col"))->value('areas_col');

        $dados = Transaction::select('type_mov', 'descricao', 'data_extrato', 'valor_total', DB::raw($query))
            ->orderBy('data_extrato')
            ->leftJoin('transaction_divisions as pr', 'transactions.id', '=', 'pr.transaction_id')
            ->leftJoin('areas as a', 'a.id', '=', 'pr.area_id')
            ->groupBy('transactions.id')
            ->filter($filters)
            ->get();

        return $dados;
    }

    public function getSintetico($filters)
    {

        $subQuery = Transaction::selectRaw('id, if(short_name is not null,short_name,nome) as nome')
            ->whereRaw('rateio=1')
            ->from(DB::raw("tbl_areas"));

        $query_first = DB::table(DB::raw("({$subQuery->toSql()}) d"))
            ->select(DB::raw("GROUP_CONCAT(DISTINCT CONCAT('sum(case when tbl_a.id = ',id,' then valor else 0 end) AS `',nome, '`')) as areas_col"))->value('areas_col');

        $query = $this->newQuery();
        $query->where('type_mov', 0);
        return $query->select('plano_contas.nome',
            DB::raw('SUM(DISTINCT(valor_total)) as total'), DB::raw($query_first))
            ->filter($filters)
            ->groupBy('id_conta_plano')
            ->join('plano_contas', 'transactions.id_conta_plano', '=', 'plano_contas.id')
            ->leftJoin('transaction_divisions as pr', 'transactions.id', '=', 'pr.transaction_id')
            ->leftJoin('areas as a', 'a.id', '=', 'pr.area_id')
            ->orderBy('plano_contas.nome')
            ->paginate(50);
    }

    public function getAnalitico($filters)
    {
        $query = $this->newQuery();
        $query->orderBy('id', 'desc');
        $query->where('type_mov', 0);
        return $query->select('valor_total', 'data_extrato', 'pessoa_id', 'id_conta_plano')
            ->filter($filters)
            ->with(['pessoa' =>
                function ($q) {
                    return $q->select('id', 'nome_razao');
                }, 'contaplano' =>
                function ($qu) {
                    return $qu->select('id', 'nome');
                }])->paginate(50);
    }

}