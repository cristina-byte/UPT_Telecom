@extends('welcome')
@section('content')

<section class="web_site">
	<div class="main_content_section">
		<div class="row head ">
			<div class="col-4 ">
				<h2 class="header_page">Editare serviciu</h2>
			</div>
		</div>

		<form enctype="multipart/form-data" method="post" action="{{route('update_serviciu',['id'=>$serviciu->id])}}">
			@csrf
			<div class="form-section">
				<label>Tip:</label>
				<select class="form-control" name="tip">

					<option selected>pachet1</option>
					<option>pachet2</option>
					<option>pachet3</option>
				</select>

			</div>
			<div class="form-section">
				<label>Nivel:</label>
				<select class="form-control" name="nivel">

					<option selected>low</option>
					<option>medium</option>
					<option>high</option>
				</select>
			</div>
			<div class="form-section">
				<label>Pret:</label>
				<input class="form-control" name="pret" type="text"></input>
				@error('pret')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="form-section">
				<label>Descriere:</label>
				<input class="form-control" name="descriere" type="text"></input>
				@error('descriere')
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