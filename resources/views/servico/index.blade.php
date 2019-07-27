@extends('layouts.lateral')
@section('title')
    servico
@stop
@section('conteudo')
 <div class=""
    style=" font-size: 20px; text-shadow: grey; font-weight: bold; text-shadow: 2px 2px 8px rgb(167, 157, 157);">
    <p class="text-center pt-3">MÓDULO | LOGÍSTICA E SERVIÇOS</p>
  </div>
  <div class="row mb-4">
  <div class="col">
    <a href="/servico" class=" badge badge-secondary" style=" font-size: 15px;" >Registo de Serviços</a>
  </div>
  <div class="col">
    <a href="" class="badge badge-light " style=" font-size: 15px;">Actualização de Serviços</a>
  </div>
  <div class="col">
  <a href="" class="badge badge-light "style=" font-size: 15px;" >Logística</a>
  </div>
</div>


  <form>
  <div class="row">
    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="Nome do Serviço" required autofocus>
    </div>
    <div class="col-3 p-3">
      <input type="text" class="form-control" placeholder="Preço Unitário C/ivan" required autofocus>
    </div>
    <div class="col-3 p-3">
        <select class="custom-select">
            <option selected>MZN</option>
            <option >Dollar</option>
            <option >Euro</option>
        </select>
    </div>
    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="Código do Serviço" required >
    </div>
    <div class="col-3 p-3">
      <input type="text" class="form-control" placeholder="Valor do Iva(17%)" required autofocus>
    </div>
    <div class="col-3 p-3">
      <input type="text" class="form-control" placeholder="Preço sem IVAN" required autofocus>
    </div>
    <div class="col-6 p-3">
        <select class="custom-select">
            <option selected>Mensal</option>
            <option value="1">Diaria</option>
            <option value="2">Anual/option>
            <option value="3">Semetral</option>
        </select>
      
    </div>
    <div class="col-6 p-3 ">
      <input class="btn btn-primary my-2 my-lg-0 " type="submit" value="Adicionar">
    </div>
  </div>
</form>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@stop
