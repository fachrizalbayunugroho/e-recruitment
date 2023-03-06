<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Dept P&E</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<a href="/dashboard2" class="btn btn-primary mt-3">Home</a>
    	<h2><b>DEPT PRODUCTION & ENGINEERING</b></h2>
		<form action="{{ route('add6_2') }}" method="POST">
			@csrf
	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - MOCO & MINE SURVEY SECT. HEAD </p>
  	<div class="form-group col-2 mb-2">
    	<label for="ssh_plan">Plan :</label>
    	<input class="form-control" id="ssh_plan" name="ssh_plan">
    	<label for="ssh_actual">Actual :</label>
    	<input class="form-control" id="ssh_actual" name="ssh_actual">
  	</div>
  	<p> - Moco Officer </p>
  	<div class="form-group col-2">
    	<label for="moo_plan">Plan :</label>
    	<input class="form-control" id="moo_plan" name="moo_plan">
    	<label for="moo_actual">Actual :</label>
    	<input class="form-control" id="moo_actual" name="moo_actual">
  	</div>
  	<p> - PRODUCTION & ENGINEERING SECTION HEAD </p>
  	<div class="form-group col-2">
    	<label for="sch_plan">Plan :</label>
    	<input class="form-control" id="sch_plan" name="sch_plan">
    	<label for="sch_actual">Actual :</label>
    	<input class="form-control" id="sch_actual" name="sch_actual">
  	</div>
  	<p> - PRODUCTION GROUP LEADER </p>
  	<div class="form-group col-2">
    	<label for="pgl_plan">Plan :</label>
    	<input class="form-control" id="pgl_plan" name="pgl_plan">
    	<label for="pgl_actual">Actual :</label>
    	<input class="form-control" id="pgl_actual" name="pgl_actual">
  	</div>
  	<p> - PRODUCTION HELPER </p>
  	<div class="form-group col-2">
    	<label for="prh_plan">Plan :</label>
    	<input class="form-control" id="prh_plan" name="prh_plan">
    	<label for="prh_actual">Actual :</label>
    	<input class="form-control" id="prh_actual" name="prh_actual">
  	</div>
  	<p> - ROD MAN </p>
  	<div class="form-group col-2 mb-2">
    	<label for="rod_plan">Plan :</label>
    	<input class="form-control" id="rod_plan" name="rod_plan">
    	<label for="rod_actual">Actual :</label>
    	<input class="form-control" id="rod_actual" name="rod_actual">
  	</div>
  	<p> - Surveyor </p>
  	<div class="form-group col-2">
    	<label for="sur_plan">Plan :</label>
    	<input class="form-control" id="sur_plan" name="sur_plan">
    	<label for="sur_actual">Actual :</label>
    	<input class="form-control" id="sur_actual" name="sur_actual">
  	</div>
  	<p> - TP.OPERATOR </p>
  	<div class="form-group col-2 mb-2">
    	<label for="tpo_plan">Plan :</label>
    	<input class="form-control" id="tpo_plan" name="tpo_plan">
    	<label for="tpo_actual">Actual :</label>
    	<input class="form-control" id="tpo_actual" name="tpo_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>