@extends('welcome')
@section('content')

    <section class="web_site">
	<div class="main_content_section">
		<form enctype="multipart/form-data" method="post" action="{{route('cauta_angajat')}}" class="row head ">
			@csrf
			<div class="col-3 pt-2">
				<h2 class="header_page">Angajati</h2>

			</div>
			<div class="col-4 pt-2">
				<input type="text" class="search" placeholder="Cauta..." name="nume">
			</div>

			<div class="col-5 pt-2">
				<button type="submit" class="b bordcolor">Cauta</button>
				<button onclick="showAdvanced()" type="button" class="b bordcolor">Avansat</button>
				<a href="{{route('add_angajat')}}" class="a bcolor">Adaugare</a>
			</div>

            <div class="col-4" id="cautare-avansata" style="display: none; margin-left: 32px">
                <br>
                <p>Caută după:</p>
                <input class="form-check-input" type="radio" name="cautare_avansata" id="id_angajat" value="id_angajat">
                <label class="form-check-label" for="id_angajat">ID angajat</label>
                <input class="form-check-input" type="radio" name="cautare_avansata" id="telefon" value="telefon">
                <label class="form-check-label" for="telefon">Telefon</label>
                <input class="form-check-input" type="radio" name="cautare_avansata" id="functie" value="functie">
                <label class="form-check-label" for="functie">Functie</label>
                <br>
                <button type="submit" class="a bcolor" style="margin-top: 15px">Aplica</button>
            </div>
		</form>

		<div class="row ">
			<table style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
				<tr>
					<td class="h">ID Angajat</td>
					<td class="h">Nume</td>
					<td class="h">Prenume</td>
					<td class="h">Departament</td>
					<td class="h">Adresa</td>
					<td class="h">Telefon</td>
					<td class="h">Email</td>
					<td class="h">Salariu</td>
					<td class="h">Functie</td>
					<td colspan="2" class="h">Actiuni</td>
				</tr>

				@foreach($angajati as $angajat)
				<tr>
					<td class="h">{{$angajat->id}}</td>
					<td class="h">{{$angajat->nume}}</td>
					<td class="h">{{$angajat->prenume}}</td>
					<td class="h">{{$angajat->departament}}</td>
					<td class="h">{{$angajat->adresa}}</td>
					<td class="h">{{$angajat->telefon}}</td>
					<td class="h">{{$angajat->email}}</td>
					<td class="h">{{$angajat->salariu}}</td>
					<td class="h">{{$angajat->functie}}</td>
					<td class="h"> <a href="{{route('edit_angajat',['id'=>$angajat->id])}}">Edit</a></td>
					<td class="h"> <a href="{{route('delete.angajat',['id'=>$angajat->id])}}">Delete</a></td>
				</tr>
				@endforeach

			</table>
		</div>
	</div>
</section>
@endsection

<script>
    function showAdvanced() {
        var x = document.getElementById("cautare-avansata");
        if (x.style.display === "none") {
            x.style.display = "inline";
        } else {
            x.style.display = "none";
        }
    }
</script>
