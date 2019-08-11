<!DOCTYPE html>
<html>
<head>

	@include('Admin.default.meta')

	@include('Admin.default.css')
	
	<!--Custom styles-->
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">

				<form action="{{ route('Admin.loginpost') }}" method="POST">
                @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email Address">				
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn float-right login_btn">Login</button>
					</div>
                </form>
                
			</div>
		</div>
	</div>
</div>
</body>
</html>