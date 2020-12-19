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
										<h1 class="card-title float-left h4">لیست لیگ ها <small>(صفحه: {{request()->page}})</small></span>
									</div>
									<div class="card-content px-1">
										<table class="table bg-white">
											<thead class="bg-dark text-white">
												<tr>
													<th scope="col">نام</th>
													<th scope="col">کشور</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($leagues as $l)
													<tr>
														<td class="align-middle" scope="row">{{$l->name}}</td>
														<td class="align-middle">{{$l->country}} <img width="20" src="{{ asset('public/assets/images/flags/'.$l->flag) }}" alt="{{$l->country}}"></td>
													</tr>
												@endforeach
											</tbody>
										</table>
										<a class="float-right btn btn-secondary mb-1" href="{{ url('admin/leagues') }}/{{request()->page+1}}" title="صفحه بعد">صفحه بعد</a>
										@if (request()->page > 1)
											<a class="float-right btn btn-secondary mb-1 mx-1" href="{{ url('admin/leagues') }}/{{request()->page-1}}" title="صفحه قبل">صفحه قبل</a>
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