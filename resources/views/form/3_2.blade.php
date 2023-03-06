<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept Engineering</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT ENGINEERING</b></h2>
		<form action="{{ route('add3_2') }}" method="POST">
			@csrf
	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - MOCO Officer </p>
  	<div class="form-group col-2 mb-2">
    	<label for="moo_plan">Plan :</label>
    	<input class="form-control" id="moo_plan" name="moo_plan">
    	<label for="moo_actual">Actual :</label>
    	<input class="form-control" id="moo_actual" name="moo_actual">
  	</div>
  	<p> - Rodman </p>
  	<div class="form-group col-2">
    	<label for="rod_plan">Plan :</label>
    	<input class="form-control" id="rod_plan" name="rod_plan">
    	<label for="rod_actual">Actual :</label>
    	<input class="form-control" id="rod_actual" name="rod_actual">
  	</div>
  	<p> - Section Head Engineering </p>
  	<div class="form-group col-2 mb-2">
    	<label for="she_plan">Plan :</label>
    	<input class="form-control" id="she_plan" name="she_plan">
    	<label for="she_actual">Actual :</label>
    	<input class="form-control" id="she_actual" name="she_actual">
  	</div>
  	<p> - Section Head Mineplan </p>
  	<div class="form-group col-2">
    	<label for="shm_plan">Plan :</label>
    	<input class="form-control" id="shm_plan" name="shm_plan">
    	<label for="shm_actual">Actual :</label>
    	<input class="form-control" id="shm_actual" name="shm_actual">
  	</div>
  	<p> - Section Head MOCO </p>
  	<div class="form-group col-2 mb-2">
    	<label for="sho_plan">Plan :</label>
    	<input class="form-control" id="sho_plan" name="sho_plan">
    	<label for="sho_actual">Actual :</label>
    	<input class="form-control" id="sho_actual" name="sho_actual">
  	</div>
  	<p> - Section Head Survey </p>
  	<div class="form-group col-2">
    	<label for="shs_plan">Plan :</label>
    	<input class="form-control" id="shs_plan" name="shs_plan">
    	<label for="shs_actual">Actual :</label>
    	<input class="form-control" id="shs_actual" name="shs_actual">
  	</div>
  	<p> - Surveyor </p>
  	<div class="form-group col-2">
    	<label for="sur_plan">Plan :</label>
    	<input class="form-control" id="sur_plan" name="sur_plan">
    	<label for="sur_actual">Actual :</label>
    	<input class="form-control" id="sur_actual" name="sur_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>