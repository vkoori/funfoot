@include('admin.layouts.header')
@include('admin.layouts.sidebar')

	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-wrapper-before"></div>
			<div class="content-header row"></div>
			<div class="content-body">
				@if($errors->any())
					<ul class="alert alert-danger px-3">
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				@endif
				@if(session()->has('success'))
					<div class="alert alert-success px-3">
						{{ session()->get('success') }}
					</div>
				@endif

				<!-- add product -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						{{-- begin: product name --}}
						<div class="row">
							<div class="col-12">
								<div class="card pull-up">
									<div class="card-header">
										<h1 class="card-title float-left h4">ثبت بازی جدید</span>
									</div>
									<div class="card-content px-1">
										<div class="row">
											@if ($step == 1)
												<form class="needs-validation col-12" action="{{ url('admin/new-match') }}" method="GET" class="needs-validation" novalidate>
													<div class="col-md-12">
														<label for="league">لیگ مورد نظر را انتخاب کنید:</label>
														<select id="league" class="custom-select" name="teams_league">
															@foreach ($leagues as $l)
																<option value="{{$l->id}}">{{$l->league}} ({{$l->season}})</option>
															@endforeach
														</select>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<button type="submit" class="btn text-white bg-blue my-1">انتخاب لیگ</button>
												</form>
											@else
												<form class="needs-validation col-12" action="{{ url('admin/set-match') }}" method="POST" class="needs-validation" novalidate>
													@csrf
													<div class="form-row mb-1">
														<div class="col-md-4">
															<label for="host">میزبان</label>
															<select id="host" class="custom-select" name="host">
																@foreach ($teams as $t)
																	<option value="{{$t->id}}">{{$t->name}} ({{$t->country}})</option>
																@endforeach
															</select>
															<div class="valid-feedback">ورودی معتبر</div>
															<div class="invalid-feedback">ورودی نامعتبر</div>
														</div>
														<div class="col-md-4">
															<label for="guest">مهمان</label>
															<select id="guest" class="custom-select" name="guest">
																@foreach ($teams as $t)
																	<option value="{{$t->id}}">{{$t->name}} ({{$t->country}})</option>
																@endforeach
															</select>
															<div class="valid-feedback">ورودی معتبر</div>
															<div class="invalid-feedback">ورودی نامعتبر</div>
														</div>
														<div class="col-md-4">
															<label for="start">شروع</label>
	                            							{{-- <input type="text" class="form-control mr-1 d-inline-block" id="start" name="start" required="required"> --}}
															<input class="form-control" type="datetime-local" id="start" name="start" required="required">
															<div class="valid-feedback">ورودی معتبر</div>
															<div class="invalid-feedback">ورودی نامعتبر</div>
														</div>
													</div>
													<button type="submit" class="btn text-white bg-blue my-1">ثبت مسابقه</button>
												</form>
											@endif
										</div>
									</div>
								</div>
							</div>
						</div>
						{{-- end: product name --}}
					</div>
				</div>
				<!--/ add product -->
			</div>
		</div>
	</div>
	<!-- END: Content-->
@include('admin.layouts.footer')