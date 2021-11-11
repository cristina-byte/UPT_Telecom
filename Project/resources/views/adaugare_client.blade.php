<!DOCTYPE html>
<html>
<head>
	<title>Clienti</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01ff707ca4.js" crossorigin="anonymous"></script>


</head>
<body>
	<section class="web_site">
        @section('navbar')

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
</body>
</html>
