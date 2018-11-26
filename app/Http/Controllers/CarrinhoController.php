<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Http\Controllers\Controller;
use App\pedido;
use App\produto;
use App\pedido_produto;
class CarrinhoController extends Controller
{
    function __construct()
    {
        # obriga está logado
        $this->middleware('auth');
    }
    
    public function index(){
     $pedidos = pedido::where([
         'status' => 'RE',
         'user_id'=>Auth::id()
     ])->get();
    
     return view('carrinho.index',compact('pedidos'));
    }

    public function adicionar()
    {
        $this->middleware('VerifyCsrfToken');
        $req = Request();
        $idproduto = $req->input('id');

        $produto = produto::find($idproduto);
        if(empty($produto->id))
        {
            $req->session()->flash('mensagem-falha','Porduto não encontrado em nossa loja');
            return redirect()->route('carrinho.index');
        }
        $idusuario = Auth::id();
        $idpedido = pedido::consultaId([
            'user_id' => $idusuario,
            'status'  => 'RE' //reservado
        ]);
        if(empty($idpedido))
        {
            $pedido_novo = pedido::create([
                'user_id' => $idusuario,
                'status'  => 'RE'
            ]);
            $idpedido = $pedido_novo->id;
        }
        pedido_produto::create([
            'pedido_id' => $idpedido,
            'produto_id'=> $idproduto,
            'valor'     => $produto->preco,
            'status'    => 'RE'
        ]);

        $req->session()->flash('menssagem-sucesso','produto adicionado ao carrinho com sucesso!');
        return redirect()->route('carrinho.index');
    }
}
