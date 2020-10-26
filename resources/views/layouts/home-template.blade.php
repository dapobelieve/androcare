<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        @yield('site.meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#ea9467">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        @include('includes.head')
        @yield('site.styles')
    </head>

	<body>
		@include('includes._nav')

		@yield('content')

		@include('includes._footer')


		@include('includes.scripts')
		<script>
			function toggleMenu() {
				document.getElementById("ftco-nav").classList.toggle("collapse")
			}
		</script>
		@yield('site.scripts')
	</body>
</html>
