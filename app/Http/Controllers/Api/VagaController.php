<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Vaga::all());
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
            $newVaga = $request->all();
            $storedVaga = Vaga::create($newVaga);
            return response()->json([
                'msg' => 'Vaga inserida com sucesso!',
                'vaga' =>$storedVaga
            ]);
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => 'Erro ao inserir nova vaga',
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
            return response()->json(Vaga::find($id));
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => "A vaga com id:$id não foi encontrada!",
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
            $newVaga = Vaga::findOrFail($id);
            $newVaga->update($data);
            return response()->json([
                'msg' => "Vaga atualizada com sucesso",
                'vaga' => $newVaga
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao atualizar a vaga',
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
            if(Vaga::findOrFail($id)->delete())
            return response()->json(['msg'=>"Vaga com id:$id removida"]);
        } catch (\Exception $error) {
            return response()->json([
                'Erro' => 'Erro ao excluir vaga',
                'Exception' => $error->getMessage()
            ], 404);
        }
    }
}
