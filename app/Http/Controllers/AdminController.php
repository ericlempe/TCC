<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Local;

class AdminController extends Controller
{

    public function index()
    {
        return view('home');
    }
     /**
     * Função para salvar dados
     *
     * @return void
     */
    public function store(Request $request)
    {
        return Administrador::create([
            'nome' => $request->nome,
            'senha' => Crypt::encrypt($request->senha)
       ]);
    }

    /**
     * Função para deletar
     *
     * @return void
     */
    public function delete($id)
    {
        return Administrador::where('id', $id)->delete();
    }
}
