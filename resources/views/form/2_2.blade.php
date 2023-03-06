<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept Production</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT PRODUCTION</b></h2>
		<form action="{{ route('add2_2') }}" method="POST">
			@csrf
	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - Helper Production </p>
  	<div class="form-group col-2">
    	<label for="hpr_plan">Plan :</label>
    	<input class="form-control" id="hpr_plan" name="hpr_plan">
    	<label for="hpr_actual">Actual :</label>
    	<input class="form-control" id="hpr_actual" name="hpr_actual">
  	</div>
  	<p> - Operator A2B </p>
  	<div class="form-group col-2">
    	<label for="ope_plan">Plan :</label>
    	<input class="form-control" id="ope_plan" name="ope_plan">
    	<label for="ope_actual">Actual :</label>
    	<input class="form-control" id="ope_actual" name="ope_actual">
  	</div>
  	<p> - Production Departement Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="pdh_plan">Plan :</label>
    	<input class="form-control" id="pdh_plan" name="pdh_plan">
    	<label for="pdh_actual">Actual :</label>
    	<input class="form-control" id="pdh_actual" name="pdh_actual">
  	</div>
  	<p> - Section Head </p>
  	<div class="form-group col-2">
    	<label for="she_plan">Plan :</label>
    	<input class="form-control" id="she_plan" name="she_plan">
    	<label for="she_actual">Actual :</label>
    	<input class="form-control" id="she_actual" name="she_actual">
  	</div>
  	<p> - Section Head Blast </p>
  	<div class="form-group col-2 mb-2">
    	<label for="shb_plan">Plan :</label>
    	<input class="form-control" id="shb_plan" name="shb_plan">
    	<label for="shb_actual">Actual :</label>
    	<input class="form-control" id="shb_actual" name="shb_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>