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
		<form action="{{ route('add7') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - ADMIN PLANT & LOGISTIC </p>
  	<div class="form-group col-2 mb-2">
    	<label for="apl_plan">Plan :</label>
    	<input class="form-control" id="apl_plan" name="apl_plan">
    	<label for="apl_actual">Actual :</label>
    	<input class="form-control" id="apl_actual" name="apl_actual">
  	</div>
  	<p> - HELPER PLANT & LOGISTIC </p>
  	<div class="form-group col-2">
    	<label for="hpl_plan">Plan :</label>
    	<input class="form-control" id="hpl_plan" name="hpl_plan">
    	<label for="hpl_actual">Actual :</label>
    	<input class="form-control" id="hpl_actual" name="hpl_actual">
  	</div>
  	<p> - LOGISTIC GROUP LEADER </p>
  	<div class="form-group col-2 mb-2">
    	<label for="lgl_plan">Plan :</label>
    	<input class="form-control" id="lgl_plan" name="lgl_plan">
    	<label for="lgl_actual">Actual :</label>
    	<input class="form-control" id="lgl_actual" name="lgl_actual">
  	</div>
  	<p> - LOGISTIC SECTION HEAD </p>
  	<div class="form-group col-2">
    	<label for="lsh_plan">Plan :</label>
    	<input class="form-control" id="lsh_plan" name="lsh_plan">
    	<label for="lsh_actual">Actual :</label>
    	<input class="form-control" id="lsh_actual" name="lsh_actual">
  	</div>
  	<p> - Mechanic </p>
  	<div class="form-group col-2 mb-2">
    	<label for="mec_plan">Plan :</label>
    	<input class="form-control" id="mec_plan" name="mec_plan">
    	<label for="mec_actual">Actual :</label>
    	<input class="form-control" id="mec_actual" name="mec_actual">
  	</div>
  	<p> - Mechanic Group Leader </p>
  	<div class="form-group col-2 mb-2">
    	<label for="mgl_plan">Plan :</label>
    	<input class="form-control" id="mgl_plan" name="mgl_plan">
    	<label for="mgl_actual">Actual :</label>
    	<input class="form-control" id="mgl_actual" name="mgl_actual">
  	</div>
  	<p> - Mechanic Helper </p>
  	<div class="form-group col-2">
    	<label for="meh_plan">Plan :</label>
    	<input class="form-control" id="meh_plan" name="meh_plan">
    	<label for="meh_actual">Actual :</label>
    	<input class="form-control" id="meh_actual" name="meh_actual">
  	</div>
  	<p> - Planner </p>
  	<div class="form-group col-2 mb-2">
    	<label for="pla_plan">Plan :</label>
    	<input class="form-control" id="pla_plan" name="pla_plan">
    	<label for="pla_actual">Actual :</label>
    	<input class="form-control" id="pla_actual" name="pla_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>