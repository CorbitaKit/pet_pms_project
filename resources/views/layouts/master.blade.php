<!DOCTYPE html>
<html>
<head>
	<title>PMS PET PROJECT</title>

	@include('assets.styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper" id="app">

		@include('importants.navbar')
		@include('importants.aside')

		<div class="content-wrapper">
			@yield('content')

		</div>
	</div>

	@include('assets.scripts')

</body>
</html>