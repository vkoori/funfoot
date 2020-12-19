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
										<h1 class="card-title float-left h4">ثبت تیم جدید</span>
									</div>
									<div class="card-content px-1">
										<div class="row">
											<form action="{{ url('admin/new-team') }}" method="POST" enctype="multipart/form-data" class="needs-validation col-12" novalidate>
												@csrf
												<div class="form-row mb-1">
													<div class="col-md-4">
														<label for="name">نام تیم</label>
														<input class="form-control" id="name" type="text" name="name">
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-4">
														<label for="logo">آرم</label>
														<div class="custom-file mb-0">
															<input type="file" class="custom-file-input" id="logo" name="logo" required="required">
															<label class="custom-file-label" for="logo">بارگزاری آرم ...</label>
														</div>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-4">
														<label>کشور</label>
														<select class="custom-select" name="country">
															@foreach ($countries as $country)
																<option value="{{$country->id}}">{{$country->name}}</option>
															@endforeach
														</select>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
												</div>
												<button type="submit" class="btn text-white bg-blue my-1">ثبت تیم</button>
											</form>
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