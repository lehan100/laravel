<!DOCTYPE html>
<html lang="en">
  <head>
	@include('backend.layouts.includes.head')
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			@include('backend.layouts.includes.sitebar')

			<!-- top navigation -->
			@include('backend.layouts.includes.navigation')
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				@yield('content')
			</div>
			<!-- /page content -->

			<!-- footer content -->
			@include('backend.layouts.includes.footer')
			<!-- /footer content -->
		</div>
	</div>

	
    @include('backend.layouts.includes.script')
</body></html>
