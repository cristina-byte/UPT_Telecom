
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Clienti</h2>
	    			</div>
	    		</div>

				<form method="post">
					<div class="form-section">
						<p>Nume</p>
						<input type="text" value="nume"><br>
					</div>
					<div class="form-section">
						<p>Prenume</p>
						<input type="text" value="prenume"><br>
					</div>
					<div class="form-section">
						<p>Pachet</p>
                        <select id="" class="form-control" >
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
					</div>
					<div class="form-section">
						<p>Email</p>
						<input type="email" value="email"><br>
					</div>
					<div class="form-section">
						<p>Adresa</p>
						<input type="text" value="adresa"><br>
					</div>

					<input type="submit" value="Trimite">
					<input type="reset" value="Anulare">
                </form>
	    </div>
	</section>
	@endsection

