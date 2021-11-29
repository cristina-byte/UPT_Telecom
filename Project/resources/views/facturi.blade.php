@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-3 ">
				<h2 class="header_page">Facturi</h2>

			</div>
			<div class="col-4 pt-2">
				<input type="text" class="search" placeholder="Cauta...">
			</div>

			<div class="col-5 pt-2">

	<div style="display:inline;"class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>

  <div id="list" class="dropdown-menu" >
    <a class="dropdown-item" href="{{route('cauta_factura',['status'=>"done"])}}">status1</a>
    <a class="dropdown-item" href="{{route('cauta_factura',['status'=>"new"])}}">status2</a>
    <a class="dropdown-item" href="{{route('cauta_factura',['status'=>"in progress"])}}">status2</a>
  </div>
</div>
				<a href="{{route('add_factura')}}" class="a bcolor">Adaugare</a>
			</div>
		</div>

		<div class="row ">
			<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
				<tr>
					<td class="h">ID Factura</td>
					<td class="h">ID Client</td>
					<td class="h">Data emisa</td>
					<td class="h">ID serviciu</td>
					<td class="h">Cost</td>
					<td class="h">Status</td>
					<td class="h">Actiuni</td>


				</tr>

				@foreach($facturi as $factura)

				<tr>
					<td class="h">{{$factura->id}}</td>
					<td class="h">{{$factura->id_client}}</td>
					<td class="h">{{$factura->perioada}}</td>
					<td class="h">{{$factura->id_serviciu}}</td>
					<td class="h">{{$factura->pret}}</td>
					<td class="h">{{$factura->status}}</td>
					<td class="h"><a href="{{route('edit_factura',['id'=>$factura->id])}}">Edit</a></td>


				</tr>

				@endforeach


			</table>
		</div>
	</div>
</section>




<script>



var dropdown=document.getElementById('dropdownMenuButton');
var droplist=document.getElementById('list');

dropdown.addEventListener('click', function(){

if(droplist.style.display=="none")
	droplist.style.display="block";
else
	droplist.style.display="none";

})




</script>
@endsection