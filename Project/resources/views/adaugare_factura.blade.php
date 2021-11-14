
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-5">
	    				<h2 class="header_page">Adauga o noua factura</h2>
	    			</div>
	    		</div>

				<form method="post">
					<div class="form-section">
						<label>ID Client</label>
						<input class="form-control" type="text"><br>
					</div>
					<div class="form-section">
						<label>ID Serviciu</label>
						<input class="form-control" type="text"><br>
					</div>
					<div class="form-section">
						<label>Pret</label>
                        <textarea class="form-control" type="text"></textarea>
					</div>
					<div class="form-section">
						<label>Data Scadenta</label>
						<input class="form-control" type="email"><br>
					</div>
                    <div class="form-section">
						<label>Status</label>
                        <select class="form-control" >
                            <option>Platit</option>
                            <option>Expirat</option>
                            <option>Scadent</option>
                        </select>					</div>
                    <div class="btn-group">
                        <input class="b bordcolor" type="reset" value="Anulare">
                        <input class="a bcolor" type="submit" value="Trimite">
                    </div>
                </form>
	    </div>
	</section>
	@endsection
