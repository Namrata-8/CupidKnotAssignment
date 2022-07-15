<!DOCTYPE html>
<html>
    <head>
        <title>Cupid Knot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    
    </head>
    <body>
       
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<label>Admin Login</label>
							</div>
						</div>
						<hr>
					</div>
					<span class="login100-form-title p-b-43">
						@if(session()->has('error'))
							<div class="alert alert-danger">
								{{ session()->get('error') }}
							</div>
						@endif						
					</span>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="adminLogin" method="post" role="form" style="display: block;">
									@csrf
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email ID" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </body>
</html>
