<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('titulo')</title>
  </head>
  <body>
  <nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
<span class="navbar-text">
<a href="/site">Voltar</a>
</div>
<br>
<form>
<div class="   col-md-6 offset-md-3">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome da Empresa:</label>
    <div class="col-sm-10">
      <input type="nome" class="form-control" id="nome" placeholder="">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Cidade:</label>
    <div class="col-sm-10">
      <input type="cidade" class="form-control" id="cidade" placeholder="">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Atuação:</label>
    <div class="col-sm-10">
      <input type="atuacao" class="form-control" id="atuacao" placeholder="">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Qtd. Funcionários:</label>
    <div class="col-sm-10">
      <input type="num_func" class="form-control" id="num_func" placeholder="">
    </div>
  </div>
</br>
  <button class="btn btn-primary" type="submit">Cadastrar</button>
</div>
</form>
