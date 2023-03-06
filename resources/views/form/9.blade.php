<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept Road Maintenance</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT Road Maintenance</b></h2>
		<form action="{{ route('add9') }}" method="POST">
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
  	<p> - Driver A2B </p>
  	<div class="form-group col-2">
    	<label for="dri_plan">Plan :</label>
    	<input class="form-control" id="dri_plan" name="dri_plan">
    	<label for="dri_actual">Actual :</label>
    	<input class="form-control" id="dri_actual" name="dri_actual">
  	</div>
  	<p> - Group Leader </p>
  	<div class="form-group col-2">
    	<label for="gle_plan">Plan :</label>
    	<input class="form-control" id="gle_plan" name="gle_plan">
    	<label for="gle_actual">Actual :</label>
    	<input class="form-control" id="gle_actual" name="gle_actual">
  	</div>
  	<p> - Helper </p>
  	<div class="form-group col-2 mb-2">
    	<label for="hel_plan">Plan :</label>
    	<input class="form-control" id="hel_plan" name="hel_plan">
    	<label for="hel_actual">Actual :</label>
    	<input class="form-control" id="hel_actual" name="hel_actual">
  	</div>
  	<p> - Operator A2B </p>
  	<div class="form-group col-2">
    	<label for="ope_plan">Plan :</label>
    	<input class="form-control" id="ope_plan" name="ope_plan">
    	<label for="ope_actual">Actual :</label>
    	<input class="form-control" id="ope_actual" name="ope_actual">
  	</div>
  	<p> - Section Head </p>
  	<div class="form-group col-2">
    	<label for="sch_plan">Plan :</label>
    	<input class="form-control" id="sch_plan" name="sch_plan">
    	<label for="sch_actual">Actual :</label>
    	<input class="form-control" id="sch_actual" name="sch_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>