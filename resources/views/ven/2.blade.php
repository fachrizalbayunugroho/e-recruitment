<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Vendor page</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href=""></a>
        </div>
    </nav>
    <div class="container pt-5">
    	<form action="{{ route('vendorUpload2') }}" method="POST" enctype="multipart/form-data">
			@csrf
  			<div class="mb-3 col-6">
            <h4>Upload File (extension pdf atau zip)</h4>
            <div class="input-group custom-file-button">
                <input type="file" name="file" class="form-control">
                <label class="input-group-text"></label>
            </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
  		<a href="/dashboard3" class="btn btn-primary mt-3">Home</a>
		</form>
    </div> 
</body>
</html>