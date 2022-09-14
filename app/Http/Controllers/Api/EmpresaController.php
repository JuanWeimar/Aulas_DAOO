<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Vaga;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    private $empresa;
    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Empresa::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newEmpresa = $request->all();
            $storedEmpresa = Empresa::create($newEmpresa);
            return response()->json([
                'msg' => 'Empresa inserida com sucesso!',
                'empresa' =>$storedEmpresa
            ]);
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => 'Erro ao inserir nova empresa',
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return response()->json(Empresa::find($id));
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => "A empresa com id:$id não foi encontrada!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $newEmpresa = Empresa::findOrFail($id);
            $newEmpresa->update($data);
            return response()->json([
                'msg' => "Empresa atualizada com sucesso",
                'empresa' => $newEmpresa
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao atualizar a empresa',
                'Exception' => $error->getMessage()
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if(Empresa::findOrFail($id)->delete())
            return response()->json(['msg'=>"Empresa com id:$id removida"]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao excluir empresa',
                'Exception' => $error->getMessage()
            ], 404);
        }
    }

    public function vagas($id)
    {
        $data = Empresa::find($id)->load('vagas');
        return($data);
        //return response()->json($data->with('vagas')->get());
        //find($id)->with('relacao')->get()
    }
}
