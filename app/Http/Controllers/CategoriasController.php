<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Categoria::create($request->all());
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Categoria::where('id', $id)->delete();
    }

    /**
     * Função para listar
     *
     * @return void
     */
    public function list()
    {
        return Categoria::select('id', 'nome')->get();
    }

    /**
     * Função para listar profissional por categoria
     *
     * @return void
     */
    public function listProfissional($id)
    {
        return Categoria::find($id)->profissionais;
    }
}
