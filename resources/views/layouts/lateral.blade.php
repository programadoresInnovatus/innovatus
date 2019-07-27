@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  

@section('content')
<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-3 p-0 bg-white">
            <nav class="navbar navbar-expand navbar-ligth bg-ligth flex-md-column flex-row align-items-start">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item p-3">
                        <a href="/" style="font-weight:bold;"><i class="fas fa-home fa-2x" style="color:grey;"></i> Página Principal</a>
                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-tasks fa-2x" style="color: grey;"></i> Minhas Tarefas</a>
                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-camera fa-2x" style="color: grey;"></i> Capturar</i>
                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-paperclip fa-2x" style="color: grey;"></i> Anexar  Documento</a>
                        </li >
                        <li class="nav-item p-3">
          <a href="" style="font-weight: bold;"><i class="fas fa-folder-open fa-2x" style="color: grey;"></i>
          Arquivar</a>
                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-share-alt fa-2x" style="color: grey;"></i>
          Partilhar</a>
                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-print fa-2x" style="color:grey;"></i> Imprimir</a>

                        </li>
                        <li class="nav-item p-3">
                        <a href="" style="font-weight: bold;"><i class="fas fa-book fa-2x" style="color: grey;"></i> Manual do Utilizador</a>

                        </li>
                        
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col">
        <div class="container ">
            @yield('conteudo')
        </div>
        </main>
    </div>
</div>

<div class="footer bg-dark pb-3">
    <p  class="text-center text-white bg-dark pt-1">&#x000AEINNOGEST SOFTWARE</p>
  </div>

@stop

  
  