@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4 ">
				<h2 class="header_page">Adauga un nou angajat</h2>
			</div>
		</div>

		<form enctype="multipart/form-data" method="post" action="{{route('store.angajat')}}">
			@csrf
			<div class="form-section">
				<label>Nume:</label>
				<input class="form-control" name="nume" type="text"><br>
			</div>
			<div class="form-section">
				<label>Prenume:</label>
				<input class="form-control" name="prenume" type="text"><br>
			</div>
			<div class="form-section">
				<label>ID Departament:</label>
				<input class="form-control" name="id_departament" type="text"></input>
			</div>
			<div class="form-section">
				<label>Adresa:</label>
				<input class="form-control" name="adresa" type="text"></input>
			</div>
			<div class="form-section">
				<label>Telefon:</label>
				<input class="form-control" name="telefon" type="number"></input>
			</div>
			<div class="form-section">
				<label>Salariu:</label>
				<input class="form-control" name="salariu" type="number"></input>
			</div>
			<div class="form-section">
				<label>Functie:</label>
				<input class="form-control" name="functie" type="text"></input>
			</div>
			<div class="form-section">
				<label>Email:</label>
				<input class="form-control" name="email" type="email"><br>
			</div>

			<div class="btn-group">
				<input class="b bordcolor" type="reset" value="Anulare">
				<input class="a bcolor" type="submit" value="Trimite">
			</div>

		</form>
	</div>
</section>
@endsection