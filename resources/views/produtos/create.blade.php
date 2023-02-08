@extends('layouts.template')
@section('title', 'Criar produto')
@section('content')
<div class="container mt-4">
<form method="POST" action="{{route('produtos.insert')}}">
  @csrf

  <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control mt-1" id="" name="nome" required placeholder="Nome do produto">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Valor</label>
            <input type="text" class="form-control mt-1" id="" name="valor" placeholder="Valor unitário do produto">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Estoque</label>
            <input type="text" class="form-control mt-1" id="" name="estoque" placeholder="Quantidade de itens">
        </div>
    </div>
  </div>

  <div class="form-group mt-4">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea class="form-control mt-1" id="" name="descricao" rows="3" placeholder="Descrição do produto"></textarea>
  </div>
  <button type="submit" class=" mt-4 btn btn-primary">Inserir Produto</button>
</form>
</div>
@endsection