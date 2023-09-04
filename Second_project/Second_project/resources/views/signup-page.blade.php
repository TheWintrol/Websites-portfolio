<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Center the sign up page */
		html,
		body {
			height: 100%;
		}
		body {
			display: flex;
			align-items: center;
			background-color: #f2f2f2;
		}
		/* Add margin between button and log in line */
		.form-group button {
			margin-right: 10px;
		}
		/* Center the Sign Up heading */
		.center-heading {
			text-align: center;
		}
		/* Style the sign up form */
		.signup-form {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #888888;
			max-width: 400px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="signup-form">
					<div class="center-heading">
						<h2>Sign Up</h2>
					</div>
					<form action="{{ route('register') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control" id="password" name="password" required>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password_confirmation">Confirm Password:</label>
							<input type="password" class="form-control" id="password_confirmation"
							name="password_confirmation" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Sign Up</button>
							<span>Already have an account? <a href="{{ url('/login-page') }}">Log in</a></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
