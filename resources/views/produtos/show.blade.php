@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php
$valor_prod = number_format($produto->valor, 2,",",".");
?>
  <div class="jumbotron">
    <h1 class="display-4 ml-6"><?php echo $produto->nome;?></h1>
    <p class="lead ml-6">Valor R$<?php echo $valor_prod;?> - <?php echo $produto->descricao;?></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg ml-6" href="{{route('produtos')}}" role="button">Produtos</a>
    </p>
  </div>
  @endsection