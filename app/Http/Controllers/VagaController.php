<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class VagaController extends Controller
{
    private $vaga;

    public function __construct() {
        $this->vaga = new Vaga();
    }
    public function index() {
        //return response()->json($this->candidato->all());
        return view('vagas', ['vagas'=>$this->vaga->all()]);
    }

    public function show($id) {
        //$produto = $this->produto->find($id);
        //return response()->json($produto);
        return view('vaga_show',['vaga'=>$this->vaga->find($id)]);
    }

    public function create() {
        return view('vaga_create');
    }

    public function store(Request $request) {
        $vaga = new Vaga;
        $vaga->id_vaga = $request->id_vaga;
        $vaga->descricao = $request->descricao;
        $vaga->area_de_atuacao = $request->area_de_atuacao;

        if ($vaga->save())
            return redirect('/vagas');
        else
            dd('erro ao inserir nova vaga');
    }

    public function update(Request $request, $id) {
        $updatedVag = $request->all();
        $vaga = Vaga::find($id);

        $vaga->id_vaga = $updatedVag['id_vaga'];
        $vaga->descricao = $updatedVag['descricao'];
        $vaga->area_de_atuacao = $updatedVag['area_de_atuacao'];

        if (!$vaga->save())
            dd('erro ao atualizar a vaga $id !');
        return redirect('vagas');

    }

    public function edit($id) {
        $data = ['vaga' => Vaga::find($id)];
        return view('vaga_edit', $data);
    }

    public function delete($id) {
        if (Vaga::find($id)->delete())
            return redirect('/vagas');
        else dd($id);
    }
}
