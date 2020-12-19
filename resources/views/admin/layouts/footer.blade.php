	<!-- BEGIN: Footer-->
	<footer class="footer footer-static footer-light navbar-border navbar-shadow">
		<div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
			<span class="float-md-left d-block d-md-inline-block">2020{{  date("Y") == "2020" ? "" : "-".date("Y") }}  © Copyright</span>
			<ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
				<li class="list-inline-item"><a class="my-1" href="{{ url('/') }}"> سامانه funfoot	</a></li>
			</ul>
		</div>
	</footer>
	<!-- END: Footer-->

	{{-- @if (Request::is('admin/new-matches'))
		<script src="{{ asset('public/assets/admin/calender/js-persian-cal.min.js') }}" type="text/javascript" charset="utf-8" defer></script>
		<script>
			var objCal1 = new AMIB.persianCalendar( 'start', { extraInputFormat: "YYYYMMDD" });
		</script>
	@endif --}}

	<!-- BEGIN: Vendor JS-->
	<script src="{{ asset('public/assets/admin/scripts/vendors.min.js') }}" type="text/javascript"></script>
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script> --}}
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script> --}}
	<!-- BEGIN Vendor JS-->

	{{-- @if (Request::is('admin/media-library'))
		<script src="{{ asset('public/assets/admin/scripts/media.js') }}" type="text/javascript"></script>
	@elseif (Request::is('admin/menu-management'))
		<script type="text/javascript" src="{{ asset('public/assets/admin/scripts/jquery.domenu-0.100.77.js') }}"></script>
		<script>
			$(document).ready(function() {
				var menu = document.getElementById("my-main-menu").value;
				$('#domenu-0').domenu({
					data: menu
				})
				.parseJson()
				.on(['onItemCollapsed', 'onItemExpanded', 'onItemAdded', 'onSaveEditBoxInput', 'onItemDrop', 'onItemDrag', 'onItemRemoved', 'onItemEndEdit'], function(a, b, c) {
					var myMenu = $('#domenu-0').domenu().toJson();
					document.getElementById("my-main-menu").value = myMenu;
				});
			});
		</script>

	@endif --}}

	<!-- BEGIN: Page Vendor JS-->
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script> --}}
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script> --}}
	<!-- END: Page Vendor JS-->

	<!-- BEGIN: Theme JS-->
	<script src="{{ asset('public/assets/admin/scripts/app-menu.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('public/assets/admin/scripts/app.min.js') }}" type="text/javascript"></script>
	{{-- <script src="{{ asset('public/assets/admin/scripts/customizer.min.js') }}" type="text/javascript"></script> --}}
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script> --}}
	<!-- END: Theme JS-->

	<!-- BEGIN: Page JS-->
	{{-- <script src="https://themeselection.com/demo/chameleon-admin-template/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script> --}}
	<!-- END: Page JS-->

	<!-- BEGIN: Form validation -->
	<script src="{{ asset('public/assets/admin/scripts/validation.js') }}" type="text/javascript"></script>
	<!-- END: Form validation -->

<!-- END: Body-->
</body>
</html>