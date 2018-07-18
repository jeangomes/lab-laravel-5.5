<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class EventFilters extends QueryFilters
{

    /**
     * Filter by popularity.
     *
     * @param  string $order
     * @return Builder
     */
    public function popular($order = 'desc')
    {
        return $this->builder->orderBy('views', $order);
    }

    /**
     * Filter by type_mov.
     *
     * @param  string $type_mov
     * @return Builder
     */
    public function type_mov($type_mov)
    {
        return $this->builder->where('type_mov', $type_mov);
    }

    /**
     * Filter by favorecido.
     *
     * @param  string $favorecido
     * @return Builder
     */
    public function favorecido($favorecido)
    {
        return $this->builder->where('pessoa_id', $favorecido);
    }

    /**
     * Filter by conta.
     *
     * @param  string $id_conta_plano
     * @return Builder
     */
    public function id_conta_plano($id_conta_plano)
    {
        return $this->builder->where('id_conta_plano', $id_conta_plano);
    }

    /**
     * @param $id_conta_bancaria
     * @return $this
     */
    public function id_conta_bancaria($id_conta_bancaria)
    {
        return $this->builder->where('id_conta_bancaria', $id_conta_bancaria);
    }

    /**
     * Filter by centro_custo.
     *
     * @param  string $centro_custo
     * @return Builder
     */
    public function centro_custo($centro_custo)
    {
        return $this->builder->whereHas('rateios', function ($query) use ($centro_custo) {
            $query->where('area_id', $centro_custo);
        });
    }

    public function data_vencimento($data_vencimento)
    {
        return $this->builder->where('data_vencimento', $data_vencimento);
    }

    public function data_de($data_de)
    {
        return $data_de;
    }

    public function data_ate($data_ate)
    {
        $datas = ['D' => 'data_documento', 'E' => 'data_extrato', 'V' => 'data_vencimento'];
        return $this->builder->whereBetween($datas[$this->request->qual_data], [$this->request->data_de, $data_ate]);
    }

    //
}
