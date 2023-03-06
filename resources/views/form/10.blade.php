<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept HSE & OPSD</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT HSE & OPSD</b></h2>
		<form action="{{ route('add10') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - HSE & OPSD Departemen Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="dph_plan">Plan :</label>
    	<input class="form-control" id="dph_plan" name="dph_plan">
    	<label for="dph_actual">Actual :</label>
    	<input class="form-control" id="dph_actual" name="dph_actual">
  	</div>
  	<p> - HSE Section Head </p>
  	<div class="form-group col-2">
    	<label for="hsh_plan">Plan :</label>
    	<input class="form-control" id="hsh_plan" name="hsh_plan">
    	<label for="hsh_actual">Actual :</label>
    	<input class="form-control" id="hsh_actual" name="hsh_actual">
  	</div>
  	<p> - OSPD Section Head </p>
  	<div class="form-group col-2">
    	<label for="osh_plan">Plan :</label>
    	<input class="form-control" id="osh_plan" name="osh_plan">
    	<label for="osh_actual">Actual :</label>
    	<input class="form-control" id="osh_actual" name="osh_actual">
  	</div>
  	<p> - HSE Officer </p>
  	<div class="form-group col-2 mb-2">
    	<label for="off_plan">Plan :</label>
    	<input class="form-control" id="off_plan" name="off_plan">
    	<label for="off_actual">Actual :</label>
    	<input class="form-control" id="off_actual" name="off_actual">
  	</div>
  	<p> - Instruktur OSPD </p>
  	<div class="form-group col-2">
    	<label for="ins_plan">Plan :</label>
    	<input class="form-control" id="ins_plan" name="ins_plan">
    	<label for="ins_actual">Actual :</label>
    	<input class="form-control" id="ins_actual" name="ins_actual">
  	</div>
  	<p> - Junior HSE </p>
  	<div class="form-group col-2">
    	<label for="jun_plan">Plan :</label>
    	<input class="form-control" id="jun_plan" name="jun_plan">
    	<label for="jun_actual">Actual :</label>
    	<input class="form-control" id="jun_actual" name="jun_actual">
  	</div>
  	<p> - Paramedic </p>
  	<div class="form-group col-2">
    	<label for="par_plan">Plan :</label>
    	<input class="form-control" id="par_plan" name="par_plan">
    	<label for="par_actual">Actual :</label>
    	<input class="form-control" id="par_actual" name="par_actual">
  	</div>
  	<p> - Admin HSE </p>
  	<div class="form-group col-2 mb-2">
    	<label for="adh_plan">Plan :</label>
    	<input class="form-control" id="adh_plan" name="adh_plan">
    	<label for="adh_actual">Actual :</label>
    	<input class="form-control" id="adh_actual" name="adh_actual">
  	</div>
  	<p> - Admin OSPD </p>
  	<div class="form-group col-2">
    	<label for="ado_plan">Plan :</label>
    	<input class="form-control" id="ado_plan" name="ado_plan">
    	<label for="ado_actual">Actual :</label>
    	<input class="form-control" id="ado_actual" name="ado_actual">
  	</div>
  	<p> - Helper </p>
  	<div class="form-group col-2">
    	<label for="hel_plan">Plan :</label>
    	<input class="form-control" id="hel_plan" name="hel_plan">
    	<label for="hel_actual">Actual :</label>
    	<input class="form-control" id="hel_actual" name="hel_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>