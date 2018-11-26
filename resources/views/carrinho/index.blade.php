@extends('layout')

@section('conteudo')
    
<div class="container">
    <div class="row">
        <h3>Produtos no Carrinho</h3>
        <hr/>
        @if (Session::has('mensagem-sucesso'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('menssagem-sucesso') }}<strong>
            </div>
        @endif
        @if (Session::has('mensagem-falha'))
        <div class="alert alert-warning" role="alert">
            <strong>{{ Session::get('menssagem-falha') }}<strong>
        </div>
        @endif
        @forelse ($pedidos as $pedido)
            <h5 class="col-lg-6 col-md-6 col-sm-12">Pedido: {{ $pedido->id }}</h5>
            <h5 class="col-lg-6 col-md-6 col-sm-12">Criado em: {{ $pedido->created_at->format('d/m/y H:i') }}</h5>
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">img</th>
                        <th scope="col">Qtd</th>
                        <th scope="col">Produtos</th>
                        <th scope="col">Valor unit</th>
                        <th scope="col">Desconto</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_produtos as $pedido_produto)

                        <tr>
                        <td class="col=lg-2 col-md-2 col-sm-12">
                            <img height="100" width="100" src="{{ asset('storage/'.str_after($pedido_produto->produto->imgFrente,'public/')) }}" alt="">    
                        </td>
                        <td class="col=lg-2 col-md-2 col-sm-12" align="center">
                            <div align="center">
                                <a class="col-lg-4 col-md-4 col-sm-4 " href="#">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                </a>    
                                <span class="col-lg-4 col-md-4 col-sm-4" >{{ $pedido_produto->qtd }}</span>
                                <a class="col-lg-4 col-md-4 col-sm-4"  href="#">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </a>
                            </div>
                            <a href="#" class="" data-positon="right" data-delay="50" data-toggle="tooltip" title="Retirar produto do carrinho?">Retirar produto</a>    
                        </td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">{{ $pedido_produto->produto->nome }}</td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">R$: {{ number_format($pedido_produto->valores,2,',','.') }}</td>
                        <td class="col=lg-2 col-md-2 col-sm-12 col-xm-12">R$: {{ number_format($pedido_produto->desconto,2,',','.') }}</td>
                        @php
                            $total_produto = $pedido_produto->valores - $pedido_produto->desconto
                            ;
                            $total_pedido += $total_produto;
                        @endphp
                            <td>R$:{{ number_format($total_produto,2,',','.') }}</td>    
                        </tr>    
                    @endforeach
                </tbody>
            </table>
            <div class="container text-center">
                    <div class="row">
                            <strong class="col-lg-2 col-md-2 col-sm-2">Total do pedido: </strong>
                            <span class="col-lg-2 col-md-2 col-sm-2">R$: {{ number_format($total_pedido,2,',','.') }}</span>
                        </div>
                        <div class="row">
                                <a href="{{ route('index') }}" class="col-lg-4 col-md-4 col-sm-4 btn btn-success" data-positon="top" data-delay="50" data-toggle="tooltip" title="Voltar a página inicial para continuar comprando?">Continuar comprando</a>  
                        </div>
            </div>
            
        @empty
            <h3>Não há nenhum pedido no carrinho</h3>
        @endforelse
    </div>
</div>

@endsection
