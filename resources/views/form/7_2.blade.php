<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept P&L</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT PLANT & LOGISTIC</b></h2>
		<form action="{{ route('add7_2') }}" method="POST">
			@csrf
	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - PLANT & LOG  SECTION HEAD </p>
  	<div class="form-group col-2 mb-2">
    	<label for="sch_plan">Plan :</label>
    	<input class="form-control" id="sch_plan" name="sch_plan">
    	<label for="sch_actual">Actual :</label>
    	<input class="form-control" id="sch_actual" name="sch_actual">
  	</div>
  	<p> - PLANT & LOG SUPPORT DRIVER </p>
  	<div class="form-group col-2">
    	<label for="spd_plan">Plan :</label>
    	<input class="form-control" id="spd_plan" name="spd_plan">
    	<label for="spd_actual">Actual :</label>
    	<input class="form-control" id="spd_actual" name="spd_actual">
  	</div>
  	<p> - Plant & SCM Departement Head </p>
  	<div class="form-group col-2">
    	<label for="dph_plan">Plan :</label>
    	<input class="form-control" id="dph_plan" name="dph_plan">
    	<label for="dph_actual">Actual :</label>
    	<input class="form-control" id="dph_actual" name="dph_actual">
  	</div>
  	<p> - PLANT INSTRUCTOR </p>
  	<div class="form-group col-2">
    	<label for="pli_plan">Plan :</label>
    	<input class="form-control" id="pli_plan" name="pli_plan">
    	<label for="pli_actual">Actual :</label>
    	<input class="form-control" id="pli_actual" name="pli_actual">
  	</div>
  	<p> - TYRE MAN </p>
  	<div class="form-group col-2">
    	<label for="tym_plan">Plan :</label>
    	<input class="form-control" id="tym_plan" name="tym_plan">
    	<label for="tym_actual">Actual :</label>
    	<input class="form-control" id="tym_actual" name="tym_actual">
  	</div>
  	<p> - TYRE SUPPORT FABRICATION GROUP LEADER </p>
  	<div class="form-group col-2 mb-2">
    	<label for="fgl_plan">Plan :</label>
    	<input class="form-control" id="fgl_plan" name="fgl_plan">
    	<label for="fgl_actual">Actual :</label>
    	<input class="form-control" id="fgl_actual" name="fgl_actual">
  	</div>
  	<p> - Welder </p>
  	<div class="form-group col-2">
    	<label for="wel_plan">Plan :</label>
    	<input class="form-control" id="wel_plan" name="wel_plan">
    	<label for="wel_actual">Actual :</label>
    	<input class="form-control" id="wel_actual" name="wel_actual">
  	</div>
  	<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>