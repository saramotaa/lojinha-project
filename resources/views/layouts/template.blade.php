<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    
  <script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ml-4" href="./">LOJINHA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('produtos')}}">Produtos  <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="clientes">Clientes  </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('usuarios.logout')}}">Usuários  </a>
        </li>

        <?php
         @session_start();
         if (@$_SESSION['id_usuario'] == null) {
        ?>

        <li class="nav-item">
          <a class="nav-link" href="usuarios">Login  </a>
        </li>

        <?php
         } else {
        ?>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="filtrar" id="Filtrar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo @$_SESSION['nome_usuario']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Editar perfil</a>
            <a class="dropdown-item" href="#">Informações</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('usuarios.logout')}}">Sair</a>
          </div>
        </li>

        <?php
         }
        ?>

        <li class="nav-item">
          <a class="nav-link disabled" href="visuais-de-estilo">Visuais de Estilo (EM BREVE)</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success mt-2" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>
  @yield('content')
</body>
</html>