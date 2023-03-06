<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept Plant</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT PLANT</b></h2>
		<form action="{{ route('add4_2') }}" method="POST">
			@csrf
	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - Plant Departement Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="pdh_plan">Plan :</label>
    	<input class="form-control" id="pdh_plan" name="pdh_plan">
    	<label for="pdh_actual">Actual :</label>
    	<input class="form-control" id="pdh_actual" name="pdh_actual">
  	</div>
  	<p> - SAP Counter </p>
  	<div class="form-group col-2">
    	<label for="sap_plan">Plan :</label>
    	<input class="form-control" id="sap_plan" name="sap_plan">
    	<label for="sap_actual">Actual :</label>
    	<input class="form-control" id="sap_actual" name="sap_actual">
  	</div>
  	<p> - Section Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="sec_plan">Plan :</label>
    	<input class="form-control" id="sec_plan" name="sec_plan">
    	<label for="sec_actual">Actual :</label>
    	<input class="form-control" id="sec_actual" name="sec_actual">
  	</div>
  	<p> - Support </p>
  	<div class="form-group col-2">
    	<label for="sup_plan">Plan :</label>
    	<input class="form-control" id="sup_plan" name="sup_plan">
    	<label for="sup_actual">Actual :</label>
    	<input class="form-control" id="sup_actual" name="sup_actual">
  	</div>
  	<p> - Toolkeeper </p>
  	<div class="form-group col-2 mb-2">
    	<label for="too_plan">Plan :</label>
    	<input class="form-control" id="too_plan" name="too_plan">
    	<label for="too_actual">Actual :</label>
    	<input class="form-control" id="too_actual" name="too_actual">
  	</div>
  	<p> - Track </p>
  	<div class="form-group col-2">
    	<label for="tra_plan">Plan :</label>
    	<input class="form-control" id="tra_plan" name="tra_plan">
    	<label for="tra_actual">Actual :</label>
    	<input class="form-control" id="tra_actual" name="tra_actual">
  	</div>
  	<p> - Trackman </p>
  	<div class="form-group col-2 mb-2">
    	<label for="trm_plan">Plan :</label>
    	<input class="form-control" id="trm_plan" name="trm_plan">
    	<label for="trm_actual">Actual :</label>
    	<input class="form-control" id="trm_actual" name="trm_actual">
  	</div>
  	<p> - Tyreman </p>
  	<div class="form-group col-2">
    	<label for="tyr_plan">Plan :</label>
    	<input class="form-control" id="tyr_plan" name="tyr_plan">
    	<label for="tyr_actual">Actual :</label>
    	<input class="form-control" id="tyr_actual" name="tyr_actual">
  	</div>
  	<p> - Washingman </p>
  	<div class="form-group col-2">
    	<label for="was_plan">Plan :</label>
    	<input class="form-control" id="was_plan" name="was_plan">
    	<label for="was_actual">Actual :</label>
    	<input class="form-control" id="was_actual" name="was_actual">
  	</div>
  	<p> - Welder </p>
  	<div class="form-group col-2 mb-2">
    	<label for="wel_plan">Plan :</label>
    	<input class="form-control" id="wel_plan" name="wel_plan">
    	<label for="wel_actual">Actual :</label>
    	<input class="form-control" id="wel_actual" name="wel_actual">
  	</div>
  	<p> - Wheel </p>
  	<div class="form-group col-2">
    	<label for="whe_plan">Plan :</label>
    	<input class="form-control" id="whe_plan" name="whe_plan">
    	<label for="whe_actual">Actual :</label>
    	<input class="form-control" id="whe_actual" name="whe_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>