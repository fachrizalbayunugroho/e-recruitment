<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept CPSD</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT CPSD</b></h2>
		<form action="{{ route('add8') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - CPSD Officer </p>
  	<div class="form-group col-2 mb-2">
    	<label for="off_plan">Plan :</label>
    	<input class="form-control" id="off_plan" name="off_plan">
    	<label for="off_actual">Actual :</label>
    	<input class="form-control" id="off_actual" name="off_actual">
  	</div>
  	<p> - Instrumen Radio </p>
  	<div class="form-group col-2">
    	<label for="ins_plan">Plan :</label>
    	<input class="form-control" id="ins_plan" name="ins_plan">
    	<label for="ins_actual">Actual :</label>
    	<input class="form-control" id="ins_actual" name="ins_actual">
  	</div>
  	<p> - IT Officer </p>
  	<div class="form-group col-2">
    	<label for="ito_plan">Plan :</label>
    	<input class="form-control" id="ito_plan" name="ito_plan">
    	<label for="ito_actual">Actual :</label>
    	<input class="form-control" id="ito_actual" name="ito_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>