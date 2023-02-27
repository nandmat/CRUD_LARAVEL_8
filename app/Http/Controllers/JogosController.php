<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {

        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $dados)
    {
        Jogo::create($dados->all());
        return redirect()->route('jogos.index');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos.index');
        }
    }

    public function update(Request $e, $id)
    {

        $data = [
            'nome' => $e->nome,
            'categoria' => $e->categoria,
            'ano_criacao' => $e->ano_criacao,
            'valor' => $e->valor
        ];

        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos.index');
    }

    public function destroy($id){
        Jogo::where('id', $id)->delete();
        return redirect()->route('jogos.index');
    }
}
