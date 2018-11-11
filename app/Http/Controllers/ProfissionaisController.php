<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Local_profissional;

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
        return Profissional::select('id', 'nome', 'cargo', 'foto')
            ->where('ativo', 1)
            ->get();
    }

    public function buscar($id)
    {
        $query =  Local_profissional::from('local_profissional as LP')
            ->selectRaw('P.nome, P.cargo, P.foto, locais.nome as local_nome, locais.bloco,  locais.latitude, locais.longitude, LP.created_at')
            ->join('locais', 'locais.id', '=', 'LP.local_id')
            ->join('profissionais as P', function ($query) use ($id) {
                $query->on('P.id', '=', 'LP.profissional_id')
                     ->where('P.id', '=', $id);
            })->get();

        return $query->last();  
    }
}
