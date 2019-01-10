@extends('layouts.app')

@section('content')
<?php $i = 0;
?>
<!-- <div class="col-12" style="margin-top: 15px">
	<form class="mt-4 mb-3">
	    <input class="form-control col-10" type="text" name="name"/>
	    <input type="submit" class="btn btn-primary col-2">
	</form>
</div> -->
<div class="col-12">
<form class="navbar-search navbar-search-dark form-inline mr--2 d-none d-md-flex ml-1">
  <div class="form-group mb-2">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input class="form-control" placeholder="Search" name="name" type="text">
    </div>
  </div>
</form>
</div>
<div class="col-12">
  <div class="card shadow " style="margin-bottom:30px">
    <div class="card-header p-0">

	<div class="table-responsive">
		<table class="table align-items-center table-flush">
		<thead class="thead-light">
			<tr>
				<th scope="col">Nome</th>
			</tr>
		</thead>
		<tbody>
			 @foreach($posts['results'] as $post)
			<tr>
				<td scope="row">
					<div class="media align-items-center">
						<a href="/api/people/{{ (int) filter_var($post['url'], FILTER_SANITIZE_NUMBER_INT) }}">
							{{$post['name']}}
		                 </a>
					</div>
				</td>
			</tr>
			 @endforeach
		</tbody>
		</table>
		<div class="card-footer py-4">
		<ul class="pagination justify-content-end mb-0">
		<nav>
  <ul class="pagination">
  	@if(((int) filter_var($posts['previous'], FILTER_SANITIZE_NUMBER_INT)) == null)
    <li class="page-item disabled">
      <a class="page-link" href="/api/people?page={{(int) filter_var($posts['previous'], FILTER_SANITIZE_NUMBER_INT) }}" aria-label="Previous">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    @else
    <li class="page-item active">
      <a class="page-link " href="/api/people?page={{(int) filter_var($posts['previous'], FILTER_SANITIZE_NUMBER_INT) }}" aria-label="Previous">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    @endif
    <li class="page-item active">
      <a class="page-link" href="/api/people?page={{ (int) filter_var($posts['next'], FILTER_SANITIZE_NUMBER_INT) }}" aria-label="Next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</ul>
	</div>        
</div>        
</div>        
</div>        
@stop