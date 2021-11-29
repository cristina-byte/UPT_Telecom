@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-3 ">
				<h2 class="header_page">Adauga un nou client</h2>
			</div>
		</div>

		<form enctype="multipart/form-data" method="post" action="{{route('store.client')}}">
			@csrf
			<div class="form-section">
				<label>Nume</label>
				<input class="form-control" name="nume" type="text"><br>
				@error('nume')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Prenume</label>
				<input class="form-control" name="prenume" type="text"><br>
				@error('prenume')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Pachet</label>
				<select class="form-control" name="pachet">
					<option selected>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
			<div class="form-section">
				<label>Email</label>
				<input class="form-control" name="email" type="email"><br>
				@error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>

			<div class="form-section">
				<label>Telefon</label>
				<input class="form-control" name="telefon" type="text"><br>
				@error('telefon')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Adresa</label>
				<input class="form-control" name="adresa" type="text"><br>
				@error('adresa')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>

			<div class="form-section">
				<label>Data incheiere contract</label>
				<input class="form-control" name="start_date" type="date"><br>
				@error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>

			<div class="form-section">
				<label>Durata contract</label>
				<input class="form-control" name="durata" type="date"><br>
				@error('durata')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>

			<div class="btn-group">
				<input class="b bordcolor" type="reset" value="Anulare">
				<input class="a bcolor" type="submit" value="Trimite">
			</div>
		</form>
	</div>
</section>
@endsection