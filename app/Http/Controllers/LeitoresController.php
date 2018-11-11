<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leitor;

class LeitoresController extends Controller
{
    /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Leitor::create($request->all());
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Leitor::where('id', $id)->delete();
    }

    /**
     * Função para listar
     *
     * @return void
     */
    public function list()
    {
        return Leitor::select('id', 'mac')->where('ativo', 1)->get();
    }
}
