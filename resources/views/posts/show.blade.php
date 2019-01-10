@extends('layouts.app')
@section('content')
<div align="center">
<div class="card">
  <img class="card-img-top shadow" src="{{$uri}}" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">{{$post['name']}}</h5>
    <p class="card-text">
    <ul class="list-group">
       <li class="list-group-item" >Height: {{$post['height']}}</li>
       <li class="list-group-item" >Hair color: {{$post['hair_color']}}</li>
       <li class="list-group-item" >Skin color:  {{$post['skin_color']}}</li>
       <li class="list-group-item" >Eye color:  {{$post['eye_color']}}</li>
       <li class="list-group-item" >Gender: {{$post['gender']}}</li>
       <li class="list-group-item" >Birth year: {{$post['birth_year']}}</li>
   </ul>
    </p>
    <ul class="pagination">
        <li class="page-item active">
            <a class="page-link" href="/" aria-label="Previous">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Voltar</span>
            </a>
        </li>
    </ul>
    </div>
</div>

@stop
