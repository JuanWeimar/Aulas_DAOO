<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Candidato::all());
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
            $newCandidato = $request->all();
            $storedProduto = Candidato::create($newCandidato);
            return response()->json([
                'msg' => 'Candidato inserido com sucesso!',
                'candidato' =>$storedProduto
            ]);
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => 'Erro ao inserir novo candidato',
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
            return response()->json(Candidato::find($id));
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => "O candidato com id:$id não foi encontrado!",
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
            $newCandidato = Candidato::findOrFail($id);
            $newCandidato->update($data);
            return response()->json([
                'msg' => "Candidato atualizado com sucesso",
                'candidato' => $newCandidato
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao atualizar o candidato',
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
            if(Candidato::findOrFail($id)->delete())
            return response()->json(['msg'=>"Candidato com id:$id removido"]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao excluir candidato',
                'Exception' => $error->getMessage()
            ], 404);
        }
    }
}
