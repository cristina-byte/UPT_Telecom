@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-5">
				<h2 class="header_page">Editare factura</h2>
			</div>
		</div>

		<form enctype="multipart/form-data" method="post" action="{{route('update_factura',['id'=>$factura->id])}}">
			@csrf
			<div class="form-section">
				<label>ID Client</label>


				<select class="form-control" name="id_client">

					@foreach($clienti as $client)
					<option>{{$client->id}}</option>

					@endforeach
				</select>



			</div>
			<div class="form-section">
				<label>ID Serviciu</label>

				<select class="form-control" name="id_serviciu">

					@foreach($servicii as $serviciu)
					<option>{{$serviciu->id}}</option>

					@endforeach
				</select>



			</div>
			<div class="form-section">
				<label>Pret</label>
				<textarea class="form-control" name="pret" type="text"></textarea>
				@error('pret')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Data Scadenta</label>
				<input class="form-control" name="data_scadenta" type="date"><br>
				@error('data_scadenta')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Status</label>
				<select class="form-control" name="status">
					<option selected>scadent</option>
					<option>platit</option>
					<option>neplatit</option>
				</select>
			</div>
			<div class="btn-group">
				<a class="b bordcolor" href="{{route('factura')}}" type="reset" >Anulare</a>
				<input class="a bcolor" type="submit" value="Trimite">
			</div>
		</form>
	</div>
</section>
@endsection