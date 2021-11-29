@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4 ">
				<h2 class="header_page">Adauga un nou tichet</h2>
			</div>
		</div>

		<form enctype="multipart/form-data" method="post" action="{{route('store.tichete')}}">
			@csrf
			<div class="form-section">
				<label>Responsabil</label>
				<select name="responsabil" class="form-control">

					@foreach($angajati as $angajat)
					<option>{{$angajat->id}}</option>

					@endforeach

				</select>

			</div>
			<div class="form-section">
				<label>Client ID</label>
				<select name="client" class="form-control">

					@foreach($clienti as $client)
					<option>{{$client->id}}</option>

					@endforeach

				</select>
			</div>
			<div class="form-section">
				<label>Descriere</label>
				<textarea class="form-control" name="descriere" type="text"></textarea>
				@error('descriere')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Data raportare</label>
				<input class="form-control" name="d_raportare" type="date">
				@error('d_raportare')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Status</label>
				<select class="form-control" name="status">
					<option selected>done</option>
					<option>in progres</option>
					<option>new</option>
				</select>
			</div>
			<div class="form-section">
				<label>Urgenta</label>
				<select class="form-control" name="urgenta">
					<option selected>High</option>
					<option>Medium</option>
					<option>Low</option>
				</select>
			</div>
			<div class="btn-group">
				<input class="b bordcolor" type="reset" value="Anulare">
				<input class="a bcolor" type="submit" value="Trimite">
			</div>
		</form>
	</div>
</section>
@endsection