<!DOCTYPE html>
<html>
    <head>
        <title>Cupid Knot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	    <script src="{{ asset('js/main.js') }}"></script>
	
    </head>
    <body>
    
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" @if(empty($google_user)) class="active"  @endif id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" @if(!empty($google_user)) class="active"  @endif id="register-form-link">Register</a>
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
								<form id="login-form" action="login" method="post" role="form" @if(!empty($google_user)) style="display: none;" @else style="display: block;" @endif>
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
                                <a href="auth/google" style="margin-top:20px;" class="btn btn-lg btn-success btn-block">Login with Google</a>
								<form id="register-form" action="/signup" method="post" role="form" @if(empty($google_user)) style="display: none;" @endif>
									@csrf
                                    <label>Basic Information Section</label>
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First name" @if(!empty($google_user)) value="{{ explode(' ', $google_user->name)[0] }}" @endif required>
									</div>
                                    <div class="form-group">
                                        <label>Last Name*</label>
										<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last name" @if(!empty($google_user)) value="{{ explode(' ', $google_user->name)[1] }}" @endif required>
									</div>
									<div class="form-group">
                                        <label>Email*</label>
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" @if(!empty($google_user)) value="{{ $google_user->email }}"  @endif required>
									</div>
									<div class="form-group">
                                        <label>Password*</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
                                        <label>Date Of Birth*</label>
										<input type="date" name="date_of_birth" id="date_of_birth" tabindex="2" class="form-control" placeholder="Date Of Birth" required>
									</div>
                                    <div class="form-group">
                                        <label>Gender*</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                            <label class="form-check-label">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Others">
                                            <label class="form-check-label">Others</label>
                                        </div>
									</div>
                                    <div class="form-group">
                                        <label>Annual Income*</label>
										<input type="text" name="annual_income" id="annual_income" tabindex="1" class="form-control" placeholder="Annual Income" value="" required>
									</div>
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <select id="occupation" name="occupation" class="form-control">
                                            <option>Private job</option>
                                            <option>Government job</option>
                                            <option>Business</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Family Type</label>
                                        <select id="family_type" name="family_type" class="form-control">
                                            <option>Joint family</option>
                                            <option>Nuclear family</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Manglik</label>
                                        <select id="manglik" name="manglik" class="form-control">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <hr>

                                    <label>Partner Preference</label>
                                    <div class="form-group">
                                        <label>Expected Income</label>
                                        <input type="text" id="expected_income" name="expected_income" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <div id="slider-range"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <select id="expected_occupation" name="expected_occupation" class="form-control">
                                            <option>Private job</option>
                                            <option>Government job</option>
                                            <option>Business</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Family Type</label>
                                        <select id="expected_family_type" name="expected_family_type" class="form-control">
                                            <option>Joint family</option>
                                            <option>Nuclear family</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Manglik</label>
                                        <select id="expected_manglik" name="expected_manglik" class="form-control">
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Both</option>
                                        </select>
                                    </div>
                                    @if((!empty($google_user)))
                                    <input type="hidden" value="0" id="login_type" name="login_type"/>
                                    <input type="hidden" value="{{ $google_user->id }}" id="google_id" name="google_id"/>
                                    @else
                                    <input type="hidden" value="1" id="login_type" name="login_type"/>
                                    @endif
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
