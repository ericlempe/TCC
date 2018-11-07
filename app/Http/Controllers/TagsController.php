<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Tag::create($request->all());
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Tag::where('id', $id)->delete();
    }

    /**
     * Função para listar
     *
     * @return void
     */
    public function list()
    {
        return Tag::select('id', 'mac')->where('ativo', 1)->get();
    }
}
