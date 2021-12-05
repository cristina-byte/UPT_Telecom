@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4">
				<h2 class="header_page">Servicii</h2>
                <br>
                <a href="{{route('add_serviciu')}}" class="a bcolor" style="margin-left: 32px">Adaugare</a>
            </div>

		</div>

		<div class="row ">
			<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
				<tr>
					<td class="h">ID Serviciu</td>
					<td class="h">Tip</td>
					<td class="h">Nivel</td>
					<td class="h">Pret</td>
					<td class="h">Descriere</td>
					<td colspan="2" class="h">Actiuni</td>


				</tr>

				@foreach($servicii as $serviciu)
				<tr>
					<td>{{$serviciu->id}}</td>
					<td>{{$serviciu->tip}}</td>
					<td>{{$serviciu->nivel}}</td>
					<td>{{$serviciu->pret}}</td>
					<td>{{$serviciu->descriere}}</td>
					<td><a href="{{route('edit_serviciu',['id'=>$serviciu->id])}}">Edit</a></td>
					<td><a href="{{route('delete_serviciu',['id'=>$serviciu->id])}}">Delete</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</section>
@endsection
