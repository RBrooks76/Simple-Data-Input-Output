
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
		<title>Title</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
        <link href="{{ asset('assets_metronic/css/pages/login/classic/login-1.css" rel="stylesheet" type="text/css')}}" />
		<link href="{{ asset('assets_metronic/css/pages/login/classic/login-3.css" rel="stylesheet" type="text/css')}}" />
        <link href="{{ asset('assets_metronic/css/pages/login/classic/login-5.css" rel="stylesheet" type="text/css')}}" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets_metronic/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css')}}" />
		<link href="{{ asset('assets_metronic/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css')}}" />
		<link href="{{ asset('assets_metronic/css/style.bundle.css" rel="stylesheet" type="text/css')}}" />
		<!--end::Global Theme Styles-->

        <link href="{{ asset('assets/plugins/custom/uppy/uppy.bundle.css" rel="stylesheet" type="text/css')}}" />
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assets_metronic/media/logos/favicon.ico')}}" />

        <link href="{{ asset('assets_metronic/css/custom.css" rel="stylesheet" type="text/css')}}" />
		<link rel="stylesheet" href="{{ asset('/assets_metronic/css/toastr.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets_metronic/css/custom.css')}}">
		<script src="{{ asset('assets_metronic/js/jquery.min.js')}}"></script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">

        <!--begin::Main-->
        @yield('content')
		<!--end::Main-->

	</body>

	<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>

	<script src="{{ asset('assets_metronic/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{ asset('assets_metronic/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{ asset('assets_metronic/js/scripts.bundle.js')}}"></script>
	<script src="{{ asset('assets_metronic/js/pages/custom/login/login-general.js')}}"></script>

    <script src="{{ asset('assets_metronic/plugins/custom/uppy/uppy.bundle.js')}}"></script>
    <script src="{{ asset('assets_metronic/js/pages/crud/file-upload/uppy.js')}}"></script>

</html>
