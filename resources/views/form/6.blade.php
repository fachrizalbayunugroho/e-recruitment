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
		<form action="{{ route('add6') }}" method="POST">
			@csrf
  	<div class="form-group col-2 mb-2">
    	<label for="name">Nama site :</label>
    	<input class="form-control" id="name" name="name">
  	</div>
  	<p> - CCR & ADM ENG - PROD </p>
  	<div class="form-group col-2 mb-2">
    	<label for="prod_plan">Plan :</label>
    	<input class="form-control" id="prod_plan" name="prod_plan">
    	<label for="prod_actual">Actual :</label>
    	<input class="form-control" id="prod_actual" name="prod_actual">
  	</div>
  	<p> - Data Processor </p>
  	<div class="form-group col-2">
    	<label for="dpr_plan">Plan :</label>
    	<input class="form-control" id="dpr_plan" name="dpr_plan">
    	<label for="dpr_actual">Actual :</label>
    	<input class="form-control" id="dpr_actual" name="dpr_actual">
  	</div>
  	<p> - Engineering Departement Head </p>
  	<div class="form-group col-2">
    	<label for="edh_plan">Plan :</label>
    	<input class="form-control" id="edh_plan" name="edh_plan">
    	<label for="edh_actual">Actual :</label>
    	<input class="form-control" id="edh_actual" name="edh_actual">
  	</div>
  	<p> - FODP </p>
  	<div class="form-group col-2">
    	<label for="fodp_plan">Plan :</label>
    	<input class="form-control" id="fodp_plan" name="fodp_plan">
    	<label for="fodp_actual">Actual :</label>
    	<input class="form-control" id="fodp_actual" name="fodp_actual">
  	</div>
  	<p> - HE. OPERATOR </p>
  	<div class="form-group col-2">
    	<label for="heo_plan">Plan :</label>
    	<input class="form-control" id="heo_plan" name="heo_plan">
    	<label for="heo_actual">Actual :</label>
    	<input class="form-control" id="heo_actual" name="heo_actual">
  	</div>
  	<p> - INSTRUMENT MAN </p>
  	<div class="form-group col-2 mb-2">
    	<label for="ins_plan">Plan :</label>
    	<input class="form-control" id="ins_plan" name="ins_plan">
    	<label for="ins_actual">Actual :</label>
    	<input class="form-control" id="ins_actual" name="ins_actual">
  	</div>
  	<p> - Mine Plan Officer </p>
  	<div class="form-group col-2">
    	<label for="mpo_plan">Plan :</label>
    	<input class="form-control" id="mpo_plan" name="mpo_plan">
    	<label for="mpo_actual">Actual :</label>
    	<input class="form-control" id="mpo_actual" name="mpo_actual">
  	</div>
  	<p> - Mine Plan Section Head </p>
  	<div class="form-group col-2 mb-2">
    	<label for="msh_plan">Plan :</label>
    	<input class="form-control" id="msh_plan" name="msh_plan">
    	<label for="msh_actual">Actual :</label>
    	<input class="form-control" id="msh_actual" name="msh_actual">
  	</div>
  		<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
    </div> 
</body>
</html>