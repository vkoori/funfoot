		<!-- BEGIN: Main Menu-->
		<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ asset('public/assets/admin/images/background.jpg') }}">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mr-auto">
						<a class="navbar-brand" href="{{ url('/') }}">
							<img class="brand-logo" alt="پنل مدیریت" src="{{ asset('public/assets/images/logo36-negative.png') }}">
							<h3 class="brand-text">فان فوت نیوز</h3>
						</a>
					</li>
					<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
				</ul>
			</div>
			<div class="navigation-background"></div>
			<div class="main-menu-content ps ps--active-y">
				<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
					<li class="nav-item {{  Request::is('admin') ? 'active' : '' }}">
						<a href="{{ url('admin') }}">
							<i class="ft-home"></i>
							<span class="menu-title">پیشخوان</span>
						</a>
					</li>
					<li class="nav-item has-sub">
						<a href="#">
							<i class="ft-users"></i>
							<span class="menu-title">بازیکنان</span>
						</a>
						<ul class="menu-content">
							<li class="{{ Request::is('admin/new-player') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/new-player') }}">بازیکن جدید</a></li>
							<li class="{{ (Request::is('admin/players/*')) ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/players/1') }}">همه بازیکنان</a></li>
						</ul>
					</li>
					<li class="nav-item has-sub">
						<a href="#">
							<i class="ft-shield"></i>
							<span class="menu-title">تیم ها</span>
						</a>
						<ul class="menu-content">
							<li class="{{ Request::is('admin/new-team') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/new-team') }}">تیم جدید</a></li>
							<li class="{{ (Request::is('admin/teams/*')) ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/teams/1') }}">همه تیم ها</a></li>
						</ul>
					</li>
					<li class="nav-item has-sub">
						<a href="#">
							<i class="ft-hash"></i>
							<span class="menu-title">لیگ ها</span>
						</a>
						<ul class="menu-content">
							<li class="{{ Request::is('admin/new-league') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/new-league') }}">لیگ جدید</a></li>
							<li class="{{ Request::is('admin/leagues/*') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/leagues/1') }}">همه لیگ ها</a></li>
						</ul>
					</li>
					<li class="nav-item has-sub">
						<a href="#">
							<i class="ft-clipboard"></i>
							<span class="menu-title">فصل بندی</span>
						</a>
						<ul class="menu-content">
							<li class="{{ Request::is('admin/team-player') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/team-player') }}">بازیکنان یک تیم</a></li>
							<li class="{{ Request::is('admin/team-league') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/team-league') }}">تیم های یک لیگ</a></li>
						</ul>
					</li>

					<li class="nav-item has-sub">
						<a href="#">
							<i class="ft-pocket"></i>
							<span class="menu-title">مسابقات</span>
						</a>
						<ul class="menu-content">
							<li class="{{ Request::is('admin/new-match') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/new-match') }}">مسابقه جدید</a></li>
							<li class="{{ Request::is('admin/matches/*') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/matches/1') }}">همه مسابقات</a></li>
						</ul>
					</li>
					{{-- 
					<li class="nav-item {{  Request::is('admin/comments') ? 'active' : '' }}">
						<a href="#">
							<i class="ft-file-text"></i>
							<span class="menu-title">دیدگاه ها</span>
							@if (1)
								<span class="badge badge bg-blue badge-pill float-right mr-2">2</span>
							@endif
						</a>
						<ul class="menu-content">
							<div>
								@if (1)
									<span class="badge badge bg-blue badge-pill float-right mr-2">1</span>
								@endif
								<li class="{{ Request::is('admin/drug-store/comments') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/drug-store/comments') }}">داروخانه</a></li>
							</div>
							<div>
								@if (1)
									<span class="badge badge badge-info badge-pill float-right mr-2">1</span>
								@endif
								<li class="{{ Request::is('admin/comments/blog') ? 'active' : '' }}"><a class="menu-item" href="{{ url('admin/comments/blog') }}">مجله</a></li>
							</div>
						</ul>
					</li>
					 --}}
				</ul>
			</div>
		</div>
		<!-- END: Main Menu-->
