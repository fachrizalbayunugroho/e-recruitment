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
		<form action="{{ route('add3') }}" method="POST">
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
  	<p> - CCR </p>
  	<div class="form-group col-2 mb-2">
    	<label for="ccr_plan">Plan :</label>
    	<input class="form-control" id="ccr_plan" name="ccr_plan">
    	<label for="ccr_actual">Actual :</label>
    	<input class="form-control" id="ccr_actual" name="ccr_actual">
  	</div>
  	<p> - Data Processor </p>
  	<div class="form-group col-2 mb-2">
    	<label for="dpr_plan">Plan :</label>
    	<input class="form-control" id="dpr_plan" name="dpr_plan">
    	<label for="dpr_actual">Actual :</label>
    	<input class="form-control" id="dpr_actual" name="dpr_actual">
  	</div>
  	<p> - Engineering Departement Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="edh_plan">Plan :</label>
    	<input class="form-control" id="edh_plan" name="edh_plan">
    	<label for="edh_actual">Actual :</label>
    	<input class="form-control" id="edh_actual" name="edh_actual">
  	</div>
  	<p> - Geologist </p>
  	<div class="form-group col-2">
    	<label for="geo_plan">Plan :</label>
    	<input class="form-control" id="geo_plan" name="geo_plan">
    	<label for="geo_actual">Actual :</label>
    	<input class="form-control" id="geo_actual" name="geo_actual">
  	</div>
  	<p> - Intrumentman </p>
  	<div class="form-group col-2 mb-2">
    	<label for="int_plan">Plan :</label>
    	<input class="form-control" id="int_plan" name="int_plan">
    	<label for="int_actual">Actual :</label>
    	<input class="form-control" id="int_actual" name="int_actual">
  	</div>
  	<p> - Junior Mine Planner </p>
  	<div class="form-group col-2">
    	<label for="jmp_plan">Plan :</label>
    	<input class="form-control" id="jmp_plan" name="jmp_plan">
    	<label for="jmp_actual">Actual :</label>
    	<input class="form-control" id="jmp_actual" name="jmp_actual">
  	</div>
  	<p> - Mine Plan Officer </p>
  	<div class="form-group col-2 mb-2">
    	<label for="mpo_plan">Plan :</label>
    	<input class="form-control" id="mpo_plan" name="mpo_plan">
    	<label for="mpo_actual">Actual :</label>
    	<input class="form-control" id="mpo_actual" name="mpo_actual">
  	</div>
  	<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>