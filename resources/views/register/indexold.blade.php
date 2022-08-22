<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>AshfakurRahmanFilemanager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/app.css" />
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/dark-sidebar.css" />
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/dark-theme.css" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="page-wrapper">

			<div class="page-content-wrapper">
				<div class="page-content" style="margin-right: 260px;">
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <div class="card border-top border-0 border-4 border-info">
                                <div class="card-body">
                                    <form action="{{ route('auth.register.store') }}" method="post">
                                        @csrf
                                        <div class="border p-4 rounded">
                                            <div class="card-title d-flex align-items-center">
                                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                                </div>
                                                <h5 class="mb-0 text-info">User Registration</h5>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="name" id="inputEnterYourName" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                                <div class="col-sm-12">
                                                    <input type="phone" class="form-control" name="phone_number" id="inputPhoneNo2" placeholder="Phone No">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-12">
                                                    <input type="email" class="form-control" name="email" id="inputEmailAddress2" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" name="password" id="inputChoosePassword2" placeholder="Choose Password">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" id="inputConfirmPassword2" name="password_confirmation" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-info px-5">Register</button>
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
	</div>
</body>
</html>








