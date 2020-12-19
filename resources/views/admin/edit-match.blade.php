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
										<h1 class="card-title float-left h4">ویرایش بازی</span>
									</div>
									<div class="card-content px-1">
										<div class="row">
											<form class="needs-validation col-12" action="{{ url('admin/set-match/'.request()->id) }}" method="POST" class="needs-validation" novalidate>
												@csrf
												<div class="form-row mb-1">
													<div class="col-md-3">
														<label for="host_goal">
															<img width="10" height="10" src="{{$match->host_logo}}" alt="logo"> {{$match->host_name}}
														</label>
														<input class="form-control" type="number" min="0" name="host_goal" value="{{$match->host_goal}}">
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-3">
														<label for="guest_goal">
															<img width="10" height="10" src="{{$match->guest_logo}}" alt="logo"> {{$match->guest_name}}
														</label>
														<input class="form-control" type="number" min="0" name="guest_goal" value="{{$match->guest_goal}}">
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-3">
														<label for="state">وضعیت</label>
														<select id="state" class="custom-select" name="state">
															<option value="-1" {{$match->state == -1 ? 'selected=selected' : '' }}>شروع نشده</option>
															<option value="0" {{$match->state == 0 ? 'selected=selected' : '' }}>در حال اجرا</option>
															<option value="1" {{$match->state == 1 ? 'selected=selected' : '' }}>پایان یافته</option>
														</select>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-3">
														<label for="start">زمان شروع</label>
														<input class="form-control" type="datetime-local" id="start" name="start" value="{{date('Y-m-d\TH:i',strtotime($match->start))}}" required="required">
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
												</div>
												<button type="submit" class="btn text-white bg-blue my-1">ثبت مسابقه</button>
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