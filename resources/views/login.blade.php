@extends('master')
@section('content')
<h1>Login page</h1>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Login Page</title>
</head>
<body>
			<div class="Container custom-login">
				<div class="row">
					<div class="col-sm-4">
						.
					</div>
					<div class="col-sm-4">						
							<form>
								<div class="form-group">
								  <label for="exampleInputEmail1">Email address</label>
								  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="exampleInputPassword1">Password</label>
								  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>			
					</div>
					<div class="col-sm 4">
						.
					</div>
				</div>
			</div>
</body>
@endsection