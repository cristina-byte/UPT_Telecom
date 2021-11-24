@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4 ">
				<h2 class="header_page">Clienti</h2>

			</div>
			<div class="col-3 pt-2">
				<input type="text" class="search" placeholder="Cauta...">
			</div>

			<div class="col-5 pt-2">
				<a href="" class="b bordcolor">Avansat</a>
				<a href="{{route('add_client')}}" class="a bcolor">Adaugare</a>
			</div>
		</div>

		<div class="row ">
			<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
				<tr>
					<td class="h">ID Client</td>
					<td class="h">Nume</td>
					<td class="h">Prenume</td>
					<td class="h">Pachet</td>
					<td class="h">Telefon</td>
					<td class="h">Data inscriere</td>
					<td colspan="2" class="h"></td>
				</tr>


				@foreach($clienti as $client)
				<tr>
					<td class="h">{{$client->id}}</td>
					<td class="h">{{$client->nume}}</td>
					<td class="h">{{$client->prenume}}</td>
					<td class="h">{{$client->id_serviciu}}</td>
					<td class="h">{{$client->telefon}}</td>
					<td class="h">{{$client->start_date}}</td>
					<td class="h"> <a href="{{route('client.edit',['id'=>$client->id])}}">Edit</a></td>
					<td class="h"> <a href="{{route('delete.client',['id'=>$client->id])}}">Delete</a></td>
				</tr>
				@endforeach

			</table>
		</div>
	</div>
</section>
@endsection