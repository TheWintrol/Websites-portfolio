<!DOCTYPE html>
<html>
<head>
	<title>AmpTune</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Center the login page */
		html,
		body {
			height: 100%;
		}
		body {
			display: flex;
			align-items: center;
			background-color: #f2f2f2;
		}
		/* Add margin between button and sign up line */
		.form-group button {
			margin-right: 10px;
		}
		/* Center the Login heading */
		.center-heading {
			text-align: center;
		}
		/* Style the login form */
		.login-form {
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
				<div class="login-form">
					<div class="center-heading">
						<h2>Login</h2>
					</div>
					@if (session('login_error'))
						<div class="alert alert-danger">
							{{ session('login_error') }}
						</div>
					@endif
					<form method="POST" action="{{ route('login') }}">
					@csrf
						<div class="form-group">
						<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Login</button>
							<span>or <a href="{{ url('/signup-page') }}">sign up</a> if you don't have an account</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
