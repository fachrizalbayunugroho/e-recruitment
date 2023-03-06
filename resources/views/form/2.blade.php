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
		<form action="{{ route('add2') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - Admin Clerk </p>
  	<div class="form-group col-2 mb-2">
    	<label for="acl_plan">Plan :</label>
    	<input class="form-control" id="acl_plan" name="acl_plan">
    	<label for="acl_actual">Actual :</label>
    	<input class="form-control" id="acl_actual" name="acl_actual">
  	</div>
  	<p> - Blaster </p>
  	<div class="form-group col-2">
    	<label for="bla_plan">Plan :</label>
    	<input class="form-control" id="bla_plan" name="bla_plan">
    	<label for="bla_actual">Actual :</label>
    	<input class="form-control" id="bla_actual" name="bla_actual">
  	</div>
  	<p> - Driver A2B </p>
  	<div class="form-group col-2 mb-2">
    	<label for="dri_plan">Plan :</label>
    	<input class="form-control" id="dri_plan" name="dri_plan">
    	<label for="dri_actual">Actual :</label>
    	<input class="form-control" id="dri_actual" name="dri_actual">
  	</div>
  	<p> - Dumpman </p>
  	<div class="form-group col-2">
    	<label for="dum_plan">Plan :</label>
    	<input class="form-control" id="dum_plan" name="dum_plan">
    	<label for="dum_actual">Actual :</label>
    	<input class="form-control" id="dum_actual" name="dum_actual">
  	</div>
  	<p> - Group Leader </p>
  	<div class="form-group col-2 mb-2">
    	<label for="gle_plan">Plan :</label>
    	<input class="form-control" id="gle_plan" name="gle_plan">
    	<label for="gle_actual">Actual :</label>
    	<input class="form-control" id="gle_actual" name="gle_actual">
  	</div>
  	<p> - Helper Blasting </p>
  	<div class="form-group col-2">
    	<label for="hbl_plan">Plan :</label>
    	<input class="form-control" id="hbl_plan" name="hbl_plan">
    	<label for="hbl_actual">Actual :</label>
    	<input class="form-control" id="hbl_actual" name="hbl_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>