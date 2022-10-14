
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Login Page 3 | Keenthemes</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="https://keenthemes.com/metronic" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        {{-- <link href="{{ asset('assets_metronic/css/pages/login/classic/login-1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets_metronic/css/pages/login/classic/login-3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets_metronic/css/pages/login/classic/login-5.css')}}" rel="stylesheet" type="text/css" /> --}}

		<link href="{{ asset('assets_metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets_metronic/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets_metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		{{-- <link rel="shortcut icon" href="'assets_metronic/media/logos/favicon.ico" /> --}}

        <link href="{{ asset('custom/custom.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('assets_metronic/css/toastr.css')}}">
		<script src="{{ asset('assets_metronic/js/jquery.min.js')}}"></script>
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">

        <!--begin::Main-->
        @yield('content')
		<!--end::Main-->

	</body>

	<!--begin::Global Config(global config for global JS scripts)-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{ asset('assets_metronic/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{ asset('assets_metronic/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{ asset('assets_metronic/js/scripts.bundle.js')}}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="{{ asset('assets_metronic/js/pages/custom/login/login-general.js')}}"></script>
    <script src="{{ asset('assets_metronic/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>

    <script src="{{ asset('assets_metronic/js/pages/crud/ktdatatable/base/html-table.js')}}"></script>

	{{-- <script src="{{ asset('assets_metronic/js/pages/custom/education/school/teachers.js')}}"></script> --}}
	{{-- <script src="{{ asset('assets_metronic/js/pages/custom/education/school/students.js')}}"></script> --}}
	<!--end::Page Scripts-->

	<script type="text/javascript" src="{{ asset('assets_metronic/js/toastr.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<!--end::Body-->
</html>
