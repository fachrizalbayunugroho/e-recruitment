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
		<form action="{{ route('add4') }}" method="POST">
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
  	<div class="form-group col-2">
    	<label for="ccr_plan">Plan :</label>
    	<input class="form-control" id="ccr_plan" name="ccr_plan">
    	<label for="ccr_actual">Actual :</label>
    	<input class="form-control" id="ccr_actual" name="ccr_actual">
  	</div>
  	<p> - Driver Support </p>
  	<div class="form-group col-2 mb-2">
    	<label for="dri_plan">Plan :</label>
    	<input class="form-control" id="dri_plan" name="dri_plan">
    	<label for="dri_actual">Actual :</label>
    	<input class="form-control" id="dri_actual" name="dri_actual">
  	</div>
  	<p> - Electrical </p>
  	<div class="form-group col-2">
    	<label for="ele_plan">Plan :</label>
    	<input class="form-control" id="ele_plan" name="ele_plan">
    	<label for="ele_actual">Actual :</label>
    	<input class="form-control" id="ele_actual" name="ele_actual">
  	</div>
  	<p> - Group Leader </p>
  	<div class="form-group col-2 mb-2">
    	<label for="gle_plan">Plan :</label>
    	<input class="form-control" id="gle_plan" name="gle_plan">
    	<label for="gle_actual">Actual :</label>
    	<input class="form-control" id="gle_actual" name="gle_actual">
  	</div>
  	<p> - Helper Mekanik </p>
  	<div class="form-group col-2">
    	<label for="hel_plan">Plan :</label>
    	<input class="form-control" id="hel_plan" name="hel_plan">
    	<label for="hel_actual">Actual :</label>
    	<input class="form-control" id="hel_actual" name="hel_actual">
  	</div>
  	<p> - Instruktur </p>
  	<div class="form-group col-2 mb-2">
    	<label for="ins_plan">Plan :</label>
    	<input class="form-control" id="ins_plan" name="ins_plan">
    	<label for="ins_actual">Actual :</label>
    	<input class="form-control" id="ins_actual" name="ins_actual">
  	</div>
  	<p> - Mekanik </p>
  	<div class="form-group col-2">
    	<label for="mek_plan">Plan :</label>
    	<input class="form-control" id="mek_plan" name="mek_plan">
    	<label for="mek_actual">Actual :</label>
    	<input class="form-control" id="mek_actual" name="mek_actual">
  	</div>
  	<p> - Mekanik Magang </p>
  	<div class="form-group col-2">
    	<label for="mkm_plan">Plan :</label>
    	<input class="form-control" id="mkm_plan" name="mkm_plan">
    	<label for="mkm_actual">Actual :</label>
    	<input class="form-control" id="mkm_actual" name="mkm_actual">
  	</div>
  	<p> - Oilman </p>
  	<div class="form-group col-2 mb-2">
    	<label for="oil_plan">Plan :</label>
    	<input class="form-control" id="oil_plan" name="oil_plan">
    	<label for="oil_actual">Actual :</label>
    	<input class="form-control" id="oil_actual" name="oil_actual">
  	</div>
  	<p> - Planner </p>
  	<div class="form-group col-2">
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