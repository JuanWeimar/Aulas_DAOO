<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    private $candidato;

    public function __construct() {
        $this->candidato = new Candidato();
    }
    public function index() {
        //return response()->json($this->candidato->all());
        return view('candidatos', ['candidatos'=>$this->candidato->all()]);
    }

    public function show($id) {
        //$produto = $this->produto->find($id);
        //return response()->json($produto);
        return view('candidato_show',['candidato'=>$this->candidato->find($id)]);
    }

    public function create() {
        return view('candidato_create');
    }

    public function store(Request $request) {
        $candidato = new Candidato;
        $candidato->competencia = $request->competencia;
        $candidato->nome_candidato = $request->nome_candidato;
        $candidato->email_candidato = $request->email_candidato;
        $candidato->curriculo = $request->curriculo;
        $candidato->cpf = $request->cpf;
        $candidato->senha_candidato = $request->senha_candidato;

        if ($candidato->save())
            return redirect('/candidatos');
        else
            dd('erro ao inserir novo candidato');
    }

    public function update(Request $request, $id) {
        $updatedCand = $request->all();
        $candidato = Candidato::find($id);

        $candidato->competencia = $updatedCand['competencia'];
        $candidato->nome_candidato = $updatedCand['nome_candidato'];
        $candidato->email_candidato = $updatedCand['email_candidato'];
        $candidato->curriculo = $updatedCand['curriculo'];
        $candidato->cpf = $updatedCand['cpf'];
        $candidato->senha_candidato = $updatedCand['senha_candidato'];

        if (!$candidato->save())
            dd('erro ao atualizar o candidato $id !');
        return redirect('candidatos');

    }

    public function edit($id) {
        $data = ['candidato' => Candidato::find($id)];
        return view('candidato_edit', $data);
    }

    public function delete($id) {
        if (Candidato::find($id)->delete())
            return redirect('/candidatos');
        else dd($id);
    }
}
