<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;


class ProfissionaisController extends Controller
{
    /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Profissional::create($request->all());
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Profissional::where('id', $id)->delete();
    }

    /**
     * Função para listar
     *
     * @return void
     */
    public function list()
    {
        return Profissional::select('id', 'nome', 'cargo')->where('ativo', 1)->get();
    }
}
