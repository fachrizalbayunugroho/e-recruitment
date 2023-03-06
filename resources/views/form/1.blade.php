<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept Operation</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT OPERATION</b></h2>
		<form action="{{ route('add1') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - Project Manager </p>
  	<div class="form-group col-2 mb-2">
    	<label for="pm_plan">Plan :</label>
    	<input class="form-control" id="pm_plan" name="pm_plan">
    	<label for="pm_actual">Actual :</label>
    	<input class="form-control" id="pm_actual" name="pm_actual">
  	</div>
  	<p> - Deputy Project Manager </p>
  	<div class="form-group col-2">
    	<label for="dpm_plan">Plan :</label>
    	<input class="form-control" id="dpm_plan" name="dpm_plan">
    	<label for="dpm_actual">Actual :</label>
    	<input class="form-control" id="dpm_actual" name="dpm_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>