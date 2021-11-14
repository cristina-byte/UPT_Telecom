
@extends('welcome')
@section('content')

	<section class="web_site">
	    <div class="main_content_section">
	    		<div class="row head ">
	    			<div class="col-4 ">
	    				<h2 class="header_page">Adauga un nou tichet</h2>
	    			</div>
	    		</div>

				<form method="post">
					<div class="form-section">
						<label>Responsabil</label>
						<input  class="form-control" type="text"><br>
					</div>
					<div class="form-section">
						<label>Client ID</label>
						<input class="form-control" type="text"><br>
					</div>
					<div class="form-section">
						<label>Descriere</label>
                        <textarea class="form-control" type="text"></textarea>
					</div>
					<div class="form-section">
						<label>Urgenta</label>
                        <select class="form-control" >
                            <option>High</option>
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
