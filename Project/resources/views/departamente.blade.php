@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4 ">
				<h2 class="header_page">Departamente</h2>

			</div>
			<div class="col-3 pt-2">
				<input type="text" class="search" placeholder="Cauta...">
			</div>

			<div class="col-5 pt-2">
				<button class="b bordcolor">Avansat</button>
				<button class="a bcolor">Adaugare</button>
			</div>
		</div>

		<div class="row ">
			<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
				<tr>
					<td class="h">ID Departament</td>
					<td class="h">Nume</td>
					<td class="h"></td>
					<td class="h"></td>

				</tr>
				<tr>
					<td>00001</td>
					<td>Clietele</td>
					<td><a>Edit</a></td>
					<td><a>Delete</a></td>
				</tr>
				<tr>
					<td>00002</td>
					<td>IT</td>
					<td><a>Edit</a></td>
					<td><a>Delete</a></td>
				</tr>
				<tr>
					<td>00003</td>
					<td>HR</td>
					<td><a>Edit</a></td>
					<td><a>Delete</a></td>
				</tr>
				<tr>
					<td>00004</td>
					<td>PR</td>
					<td><a>Edit</a></td>
					<td><a>Delete</a></td>
				</tr>
			</table>
		</div>
	</div>
</section>
@endsection