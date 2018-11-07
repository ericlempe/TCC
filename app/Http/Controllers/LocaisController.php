<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;

class LocaisController extends Controller
{
    /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Local::create($request->all());
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Local::where('id', $id)->delete();
    }

    /**
     * Função para listar
     *
     * @return void
     */
    public function list()
    {
        return Local::select('nome', 'bloco')->get();
    }
}
