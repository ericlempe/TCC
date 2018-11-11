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

    public function getCoordenadas(Request $request)
    {
        $local = Local::find($request->local);

        $local->profissionais()->attach($request->profissional, [
            'created_at' => date('Y-m-d H:i'),
            'updated_at' => date('Y-m-d H:i')
        ]);

        if ($local->save()) {
            return 1;
        }else {
            return 0;
        }
    }
}
