@extends('layouts.dashboard_mother')

@section('content')
    <div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
								<div class="row">
									<div class="col-12 col-lg-7 border-right">
										<div class="d-md-flex align-items-center">
											<div class="mb-md-0 mb-3">
												<img src="{{ URL::asset("new-folder/profile_photo.jpg") }}" class="rounded-circle shadow" width="130" height="130" alt="" />
											</div>
											<div class="ms-md-4 flex-grow-1">
												<div class="d-flex align-items-center mb-1">
													<h4 class="mb-0">{{ Auth::user()->name }}</h4>
												</div>
												<p class="mb-0 text-muted">Sr. Web Developer</p>
												<p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p>
												<button type="button" class="btn btn-primary">Connect</button>
												<button type="button" class="btn btn-outline-secondary ml-2">Resume</button>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-5">
										<table class="table table-sm table-borderless mt-md-0 mt-3">
											<tbody>
												<tr>
													<th>Availability:</th>
													<td>Full-time</td>
												</tr>

												<tr>
													<th>Location:</th>
													<td>Sankt, Petersburg, Russia</td>
												</tr>
												<tr>
													<th>Years experience:</th>
													<td>6</td>
									`			</tr>
											</tbody>
										</table>
										<div class="mb-3 mb-lg-0">
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-github'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-twitter'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-facebook'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-linkedin'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-dribbble'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-stack-overflow'></i></a>
										</div>
									</div>
								</div>
								<!--end row-->
								<ul class="nav nav-pills">
									{{-- <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#Experience"><span class="p-tab-name">Experience</span><i class='bx bx-donate-blood font-24 d-sm-none'></i></a>
									</li>
									<li class="nav-item"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#Biography"><span class="p-tab-name">Biography</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
									</li> --}}
									<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile"><span class="p-tab-name">Edit Profile</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
									</li>
								</ul>
								<div class="tab-content mt-3">
									{{-- <div class="tab-pane fade show active" id="Experience">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												<div class="d-sm-flex align-items-center mb-3">
													<h4 class="mb-0">Job Experience</h4>
													<p class="mb-0 ms-sm-3 text-muted">3 Job History</p> <a href="javascript:;" class="btn btn-primary ms-auto radius-10"><i class='bx bx-plus'></i> Add More</a>
												</div>
												<div class="d-flex"> <i class='bx bxl-dribbble media-icons bg-dribbble'></i>
													<div class="ms-3">
														<div class="row align-items-center">
															<div class="col-lg-4">
																<h5 class="mb-0">Graphic Designer</h5>
																<p class="mb-0">Dribbble Inc</p>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bx-time'></i> Feb-2017-Dec-2017</h5>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bxs-map'></i> New York, USA</h5>
															</div>
														</div>
														<p class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
														<h6>Media Files(2)</h6>
														<div class="row g-3">
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/35.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/36.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/37.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/38.jpg" class="img-thumbnail" alt="">
															</div>
														</div>
														<hr/>
													</div>
												</div>
												<div class="d-flex"> <i class='bx bxs-diamond media-icons bg-warning'></i>
													<div class="ms-3">
														<div class="row align-items-center">
															<div class="col-lg-4">
																<h5 class="mb-0">Lead Designer</h5>
																<p class="mb-0">Sketch App</p>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bx-time'></i> Apr-2011-Sep-2013</h5>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bxs-map'></i> Sydney, Australia</h5>
															</div>
														</div>
														<p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Biography">
										<div class="row">
											<div class="col-lg-4">
												<div class="card shadow-none border mb-0">
													<div class="card-body">
														<h5 class="">Websites</h5>
													</div>
													<ul class="list-group list-group-flush">
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bx-globe me-1'></i> Website: <a href="javascript:;">svetlananyukova.com</a>
															</p>
														</li>
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bxl-blogger me-1'></i> Blog: <a href="javascript:;">blog.svetlananyukova.com</a>
															</p>
														</li>
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bx-images me-1'></i> Portfolio: <a href="javascript:;">svetlananyukova.com/portfolio</a>
															</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="card shadow-none border mb-0 radius-15">
													<div class="card-body">
														<h5 class="mb-3">About</h5>
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
														<hr>
														<h5 class="mb-3">Skills</h5>
														<div class="chip">UI Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">android <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">iOS <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">python <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">javascript <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">sketch <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">photoshop <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">Html5 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">bootstrap4 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">jQuery <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">php Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">ms excel <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">programming <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<h5 class="mb-3">Language</h5>
														<hr>
														<ul class="list-inline mb-0">
															<li class="list-inline-item"><i class="flag-icon flag-icon-um me-2"></i><span>English</span>
															</li>
															<li class="list-inline-item"><i class="flag-icon flag-icon-fr me-2"></i><span>French</span>
															</li>
															<li class="list-inline-item"><i class="flag-icon flag-icon-de me-2"></i><span>German</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
									<div class="tab-pane fade show active" id="Edit-Profile">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												<div class="form-body">
													<div class="row">
														<div class="col-12 col-lg-5 border-right">
															<form class="row g-3">
																<div class="col-6">
																	<label class="form-label">Name</label>
																	<input type="text" value="Svetlana" class="form-control">
																</div>
                                                                <div class="col-6">
																	<label class="form-label">Profile</label>
																    <input type="file" value="" class="form-control">
																</div>
																<div class="col-6">
																	<label class="form-label">Old Password</label>
																    <input type="password" value="634560000" class="form-control">
																</div>
																<div class="col-6">
																	<label class="form-label">Password</label>
																    <input type="password" value="1234560000" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">Email</label>
																    <input type="text" value="svetlana1997@example.com" class="form-control">
																</div>

															</form>
														</div>
														<div class="col-12 col-lg-7">
															<form class="row g-3">
																<div class="col-6">
																	<label class="form-label">Phone</label>
																    <input type="text" value="99-10-XXX-XXX" class="form-control">
																</div>
																<div class="col-6">
                                                                    <label class="form-label">Date of Birth</label>
                                                                    <input type="date" class="form-control">
																</div>

																<div class="col-6">
																	<label class="form-label">Twitter</label>
																	<input type="text" class="form-control" value="https://twitter.com/anyukova">
																</div>

																<div class="col-6">
																	<label class="form-label">Facebook</label>
																	<input type="text" class="form-control" value="https://www.facebook.com/anyukova">
																</div>
                                                                <div class="col-12">
																	<label class="form-label">Address</label>
																    <input type="text" value="116-B, Cutela Colony, Sydney, Australia" class="form-control">
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
						</div>
					</div>
				</div>
			</div>
@endsection
