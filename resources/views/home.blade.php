@include('layout.header')
    <main class="container my-1">
        <h1 class="h3">پیش بینی کنید و <span class="green bold">جایزه</span> ببرید!</h1>
        <p>مسابقات رو پیش بینی کن و جایزه ببر! امتیاز بیشتر یعنی شانس بیشتر برای برنده شدن!</p>
        <p>پیش بینی کاملا درست 5 امتیاز، پیش بینی برد یا باخت 3 امتیاز و اشتباه 1 امتیاز خواهد داشت.</p>
    	<div class="row">
			<div class="col-md-8">
				<div class="light-gray p-1 img-rounded">
					<section>
						<h2 class="h4">مسابقات</h2>

						@if($errors->any())
	                        @foreach($errors->all() as $error)
	                        	<p class="text-danger">{{ $error }}</p>
	                        @endforeach
	                    @endif

						<div>
							<style>
								.row-odd{
									background-color: #37374c;
								}
								.f-warp{
									flex-wrap: wrap;
									flex-flow: wrap;
								}
								.f-warp > *{
									flex-basis: 100%;
									width: 100%;
								}
								.forecasts-input{
									width: 2em;
									height: 2em;
									text-align: center;
								}
								.forecasts-submit{
									width: 100%;
									height: 2em;
								}
							</style>
							<div class="row small p-1 row-odd">
								<div class="col-md-3">تاریخ</div>
								<div class="col-md-2">لیگ</div>
								<div class="col-md-3">تیم ها</div>
								<div class="col-md-1">نتیجه</div>
								<div class="col-md-3">پیش بینی</div>
							</div>

							@foreach ($matches as $k => $match)
								@if ($match->state == "-1")
									<form class="row p-1 flex {{($k%2 == 0) ? '' : 'row-odd' }}" action="{{url('forecasts')}}" method="post" accept-charset="utf-8">
										@csrf
										<input type="hidden" name="matchid" value="{{$match->id}}">
								@else
									<div class="row p-1 flex {{($k%2 == 0) ? '' : 'row-odd' }}">
								@endif
									<div class="col-md-3 flex-vertical-center f-warp">
										<div class="h5 my-0">{{getTime($match->start)}}</div>
										<time class="small" datetime="{{$match->start}}">{{getJalali($match->start)}}</time>
									</div>
									<div class="col-md-2 small flex-vertical-center">{{$match->league}}</div>
									<div class="col-md-3 flex-vertical-center f-warp">
										<div>
											<img width="30" src="{{$match->host_logo}}" alt="{{$match->host_name}}">
											<span class="mx-1">{{$match->host_name}}</span>
										</div>
										<div>
											<img width="30" src="{{$match->guest_logo}}" alt="{{$match->guest_name}}">
											<span class="mx-1">{{$match->guest_name}}</span>
										</div>
									</div>
									@if (is_null($match->host_goal))
										<div class="col-md-1 small flex-vertical-center f-warp">
											<div>-</div>
											<div>-</div>
										</div>
										<div class="col-md-1 small flex-vertical-center f-warp">
											<div><input class="forecasts-input" type="number" autocomplete="off" name="forecasts-host" value="{{$match->user_h_goal}}"></div>
											<div><input class="forecasts-input" type="number" autocomplete="off" name="forecasts-guest" value="{{$match->user_g_goal}}"></div>
										</div>
										<div class="col-md-2 small flex-vertical-center">
											<button class="forecasts-submit" type="submit">ثبت</button>
										</div>
									@else
										<div class="col-md-1 small flex-vertical-center f-warp">
											<div>{{$match->host_goal}}</div>
											<div>{{$match->guest_goal}}</div>
										</div>
										<div class="col-md-3 small flex-vertical-center f-warp">
											<div>{{$match->user_h_goal}}</div>
											<div>{{$match->user_g_goal}}</div>
										</div>
									@endif
								@if ($match->state == "-1")
									</form>
								@else
									</div>
								@endif
							@endforeach

						</div>
					</section>
				</div>
			</div>
			<div class="col-md-4">
				<div class="light-gray p-1 img-rounded">
					<section>
						<h2 class="h4">امتیازات</h2>
						@foreach ($scores as $k => $score)
							<div class="row p-1 flex {{($k%2 == 1) ? '' : 'row-odd' }}">
								<div class="col-md-4 small flex-vertical-center">امتیاز&nbsp;&nbsp;&nbsp;&nbsp;{{$score->score}}</div>
								<div dir="ltr" class="col-md-8 small flex-vertical-center">{{substr_replace($score->mobile,'***',5,3)}}</div>
							</div>
						@endforeach
					</section>
				</div>
			</div>
    	</div>
    </main>