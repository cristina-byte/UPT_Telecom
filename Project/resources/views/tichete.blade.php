
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Tichete</h2>
	    			</div>
	    			<div class="col-3 pt-2">
	    				<input type="text" class="search" placeholder="Cauta...">
	    			</div>
	    			<div class="col-5 pt-2">
	    				<a href="" class="b bordcolor">Avansat</a>
	    				<a href="{{route('add_tichet')}}" class="a bcolor">Adaugare</a>
	    			</div>
	    		</div>

	    	<div class="row ">
	    		<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
	    			<tr>
	    				<td class="h">ID</td>
	    				<td class="h">Responsabil</td>
	    				<td class="h">Client ID</td>
	    				<td class="h">Status</td>
	    				<td class="h">Urgenta</td>
	    				<td class="h">Descriere</td>
	    				<td class="h">Data raportare</td>
	    				<td class="h"></td>
	    				<td class="h"></td>

	    			</tr>
	    			<tr>
	    				<td>00001</td>
	    				<td>I87343</td>
	    				<td>C93837</td>
	    				<td>new</td>
	    				<td>high</td>
	    				<td>OOPS</td>
	    				<td>10/10/10</td>
						<td><a>Edit</a></td>
						<td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>I87343</td>
                        <td>C93837</td>
                        <td>new</td>
                        <td>high</td>
                        <td>OOPS</td>
                        <td>10/10/10</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>I87343</td>
                        <td>C93837</td>
                        <td>new</td>
                        <td>high</td>
                        <td>OOPS</td>
                        <td>10/10/10</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    			<tr>
                        <td>00001</td>
                        <td>I87343</td>
                        <td>C93837</td>
                        <td>new</td>
                        <td>high</td>
                        <td>OOPS</td>
                        <td>10/10/10</td>
                        <td><a>Edit</a></td>
                        <td><a>Delete</a></td>
	    			</tr>
	    		</table>
	    	</div>
	    </div>
	</section>
@endsection
