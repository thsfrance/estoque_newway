<?php namespace estoque_newway\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use estoque_newway\Produto;
use estoque_newway\Http\Requests\ProdutosRequest;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller{
    public function lista(){
        $produtos = Produto::all();
        if(empty($produtos['id'])){
            return view('produto.listagem');
        }
        return view('produto.listagem')->with('produtos',$produtos);
    }
    
    public function detalhes(){
        
    }
    
    public function novo(){
        return view('produto.formulario');
    }
    
    public function salva(ProdutosRequest $request){
        $validator = Validator::make(['nome' => 'required','descricao' => 'descricao']);
        if($validator->fails()){
            if(Request::input('id')){
                return redirect()->action('ProdutoController@detalhes')->withInput(Request::only('id'));
            }
            return redirect()->action('ProdutoController@novo');
        }
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }
}

