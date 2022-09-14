<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    private $empresa;

    public function __construct() {
        $this->empresa = new Empresa();
    }
    public function index() {
        //return response()->json($this->candidato->all());
        return view('empresas', ['empresas'=>$this->empresa->all()]);
    }

    public function show($id) {
        //$produto = $this->produto->find($id);
        //return response()->json($produto);
        return view('empresa_show',['empresa'=>$this->empresa->find($id)]);
    }

    public function create() {
        return view('empresa_create');
    }

    public function store(Request $request) {
        $empresa = new Empresa;
        $empresa->nome_empresa = $request->nome_empresa;
        $empresa->email_empresa = $request->email_empresa;
        $empresa->cnpj = $request->cnpj;
        $empresa->senha_empresa = $request->senha_empresa;

        if ($empresa->save())
            return redirect('/empresas');
        else
            dd('erro ao inserir nova empresa');
    }

    public function update(Request $request, $id) {
        $updatedEmp = $request->all();
        $empresa = Empresa::find($id);

        $empresa->nome_empresa = $updatedEmp['nome_empresa'];
        $empresa->email_empresa = $updatedEmp['email_empresa'];
        $empresa->cnpj = $updatedEmp['cnpj'];
        $empresa->senha_empresa = $updatedEmp['senha_empresa'];

        if (!$empresa->save())
            dd('erro ao atualizar a empresa $id !');
        return redirect('empresas');

    }

    public function edit($id) {
        $data = ['empresa' => Empresa::find($id)];
        return view('empresa_edit', $data);
    }

    public function delete($id) {
        if (Empresa::find($id)->delete())
            return redirect('/empresas');
        else dd($id);
    }
}
