
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Factura</h2>
	    			</div>
	    		</div>

				<form method="post">
					<div class="form-section">
						<p>Responsabil</p>
						<input type="text" value="responsabil"><br>
					</div>
					<div class="form-section">
						<p>Client ID</p>
						<input type="text" value="client"><br>
					</div>
					<div class="form-section">
						<p>Descriere</p>
                        <textarea type="text" value="descriere"></textarea>
					</div>
					<div class="form-section">
						<p>Urgenta</p>
						<input type="email" value="urgenta"><br>
					</div>
					<input type="submit" value="Trimite">
					<input type="reset" value="Anulare">
                </form>
	    </div>
	</section>
	@endsection