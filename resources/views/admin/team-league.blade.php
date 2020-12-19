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
										<h1 class="card-title float-left h4">تیم های این فصل</span>
									</div>
									<div class="card-content px-1">
										<div class="row">
											<form action="{{ url('admin/team-league') }}" method="POST" class="needs-validation col-12" novalidate>
												@csrf
												<div class="form-row mb-1">
													<div class="col-md-4">
														<label for="season">فصل (فقط سال)</label>
														<input class="form-control" id="season" type="number" name="season">
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-4">
														<label for="leagues">لیگ</label>
														<select id="leagues" class="custom-select" name="leagues">
															@foreach ($leagues as $l)
																<option value="{{$l->id}}">{{$l->name}} ({{$l->country}})</option>
															@endforeach
														</select>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
													<div class="col-md-4">
														<label for="team">تیم</label>
														<select id="team" class="custom-select" name="team">
															@foreach ($teams as $t)
																<option value="{{$t->id}}">{{$t->name}} ({{$t->country}})</option>
															@endforeach
														</select>
														<div class="valid-feedback">ورودی معتبر</div>
														<div class="invalid-feedback">ورودی نامعتبر</div>
													</div>
												</div>
												<button type="submit" class="btn text-white bg-blue my-1">ثـبـت</button>
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