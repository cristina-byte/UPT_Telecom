
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-3 pt-2">
	    				<h2 class="header_page">Angajati</h2>

	    			</div>
	    			<div class="col-4 pt-2">
	    				<input type="text" class="search" placeholder="Cauta...">
	    			</div>

	    			<div class="col-5 pt-2">
	    				<a href="" class="b bordcolor">Avansat</a>
	    				<a href="{{route('add_angajat')}}" class="a bcolor">Adaugare</a>
	    			</div>
	    		</div>

	    	<div class="row ">
	    		<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
	    			<tr>
	    				<td class="h">ID Angajat</td>
	    				<td class="h">Nume</td>
	    				<td class="h">Prenume</td>
	    				<td class="h">Departament</td>
	    				<td class="h">Adresa</td>
	    				<td class="h">Telefon</td>
	    				<td class="h">Email</td>
	    				<td class="h">Salariu</td>
	    				<td class="h">Functie</td>
	    				<td colspan="2" class="h">Actiuni</td>
	    				


	    			</tr>
	    			

	    			@foreach($angajati as $angajat)
	    			<tr>
	    				<td class="h">{{$angajat->id}}</td>
	    				<td class="h">{{$angajat->nume}}</td>
	    				<td class="h">{{$angajat->prenume}}</td>
	    				<td class="h">{{$angajat->departament}}</td>
	    				<td class="h">{{$angajat->adresa}}</td>
	    				<td class="h">{{$angajat->telefon}}</td>
	    				<td class="h">{{$angajat->email}}</td>
	    				<td class="h">{{$angajat->salariu}}</td>
	    				<td class="h">{{$angajat->functie}}</td>
	    			    <td class="h"> <a href="{{route('edit_angajat',['id'=>$angajat->id])}}">Edit</a></td>
	    			    <td class="h"> <a href="{{route('delete.angajat',['id'=>$angajat->id])}}">Delete</a></td>
	    			</tr>
	    		     @endforeach



	    		</table>
	    	</div>
	    </div>
	</section>
	@endsection
