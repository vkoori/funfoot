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
										<h1 class="card-title float-left h4">لیست بازی ها <small>(صفحه: {{request()->page}})</small></span>
									</div>
									<div class="card-content px-1">
										<table class="table bg-white">
											<thead class="bg-dark text-white">
												<tr>
													<th scope="col">میزبان</th>
													<th scope="col">میهمان</th>
													<th scope="col">زمان شروع</th>
													<th scope="col">تغییر</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($matches as $m)
													<tr>
														<td class="align-middle" scope="row">
															<p>{{$m->host_name}} <img width="40" height="40" src="{{ url($m->host_logo) }}" alt="logo"></p>
															<small>{{$m->host_goal}}</small>
														</td>
														<td class="align-middle">
															<p>{{$m->guest_name}} <img width="40" height="40" src="{{ url($m->guest_logo) }}" alt="logo"></p>
															<small>{{$m->guest_goal}}</small>
														</td>
														<td class="align-middle">
															<p>{{$m->start}}</p>
															<small>
																@switch($m->state)
																    @case(-1)
																        شروع نشده
																        @break
																    @case(0)
																        در حال اجرا
																        @break
																    @case(1)
																        پایان یافته
																        @break
																    @default
																        نامشخص
																@endswitch
															</small>
														</td>
														<td class="align-middle"><a class="btn btn-blue" href="{{ url('admin/edit-matche/'.$m->id) }}" title="ویرایش">ویرایش</a></td>
													</tr>
												@endforeach
											</tbody>
										</table>
										<a class="float-right btn btn-secondary mb-1" href="{{ url('admin/matches') }}/{{request()->page+1}}" title="صفحه بعد">صفحه بعد</a>
										@if (request()->page > 1)
											<a class="float-right btn btn-secondary mb-1 mx-1" href="{{ url('admin/matches') }}/{{request()->page-1}}" title="صفحه قبل">صفحه قبل</a>
										@endif
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