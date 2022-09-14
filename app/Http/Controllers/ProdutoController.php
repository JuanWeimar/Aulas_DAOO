<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{ 

    private $produto;

    public function __construct() {
        $this->produto = new Produto();
    }

    public function index() {
        //return response()->json($this->produto->all());
        return view('produtos', ['produtos'=>$this->produto->all()]);
    }

    public function show($id) {
        //$produto = $this->produto->find($id);
        //return response()->json($produto);
        return view('produto_show',['produto'=>$this->produto->find($id)]);
    }
}
