<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PessoaFilters extends QueryFilters
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
     * Filter by documento.
     *
     * @param  string $documento
     * @return Builder
     */
    public function documento($documento)
    {
        return $this->builder->where('documento', $documento);
    }

    /**
     * Filter by nome_razao.
     *
     * @param  string $nome_razao
     * @return Builder
     */
    public function nome_razao($nome_razao)
    {
        return $this->builder->where('nome_razao','like', '%'.$nome_razao.'%');
    }

    /**
     * Filter by tipo.
     *
     * @param  string $tipo
     * @return Builder
     */
    public function tipo($tipo)
    {
        return $this->builder->where('tipo', $tipo);
    }

    /**
     * @param $ativo
     * @return $this
     */
    public function ativo($ativo)
    {
        return $this->builder->where('ativo', $ativo);
    }

}
