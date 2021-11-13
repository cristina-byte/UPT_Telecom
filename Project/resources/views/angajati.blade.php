
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Angajati</h2>

	    			</div>
	    			<div class="col-3 pt-2">
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
	    				<td class="h">Email</td>
	    				<td class="h">Telefon</td>
	    				<td class="h">Salariu</td>
	    				<td class="h">Functie</td>
	    				<td class="h"></td>
	    				<td class="h"></td>

	    			</tr>
	    			<tr>
	    				<td>00001</td>
	    				<td>Ion</td>
	    				<td>Popescu</td>
	    				<td>Clientela</td>
	    				<td>ion.popescu@mail.com</td>
	    				<td>078945613</td>
	    				<td>10000</td>
	    				<td>Inginer</td>
						<td><a>Edit</a></td>
						<td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>Ion</td>
                        <td>Popescu</td>
                        <td>Clientela</td>
                        <td>ion.popescu@mail.com</td>
                        <td>078945613</td>
                        <td>10000</td>
                        <td>Inginer</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>Ion</td>
                        <td>Popescu</td>
                        <td>Clientela</td>
                        <td>ion.popescu@mail.com</td>
                        <td>078945613</td>
                        <td>10000</td>
                        <td>Inginer</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>Ion</td>
                        <td>Popescu</td>
                        <td>Clientela</td>
                        <td>ion.popescu@mail.com</td>
                        <td>078945613</td>
                        <td>10000</td>
                        <td>Inginer</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    		</table>
	    	</div>
	    </div>
	</section>
	@endsection
