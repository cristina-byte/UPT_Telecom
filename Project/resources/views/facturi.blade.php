
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Facturi</h2>

	    			</div>
	    			<div class="col-3 pt-2">
	    				<input type="text" class="search" placeholder="Cauta...">
	    			</div>

	    			<div class="col-5 pt-2">
	    				<a href="" class="b bordcolor">Avansat</a>
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
	    				<td class="h"></td>
	    				<td class="h"></td>

	    			</tr>
	    			<tr>
	    				<td>00001</td>
	    				<td>C0293</td>
	    				<td>10/21/23</td>
	    				<td>S2344</td>
	    				<td>47</td>
	    				<td>Done</td>
						<td><a>Edit</a></td>
						<td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>C0293</td>
                        <td>10/21/23</td>
                        <td>S2344</td>
                        <td>47</td>
                        <td>Done</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>C0293</td>
                        <td>10/21/23</td>
                        <td>S2344</td>
                        <td>47</td>
                        <td>Done</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>C0293</td>
                        <td>10/21/23</td>
                        <td>S2344</td>
                        <td>47</td>
                        <td>Done</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    		</table>
	    	</div>
	    </div>
	</section>
@endsection
