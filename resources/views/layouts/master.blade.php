<!doctype html>
<html lang="en">

<head>
  @include('partials.head')
  @yield('add-css')
</head>

<body>
  @include('partials.header')

	<!-- Main -->
	<main id="main">
    @yield('content')
	</main>

  @include('partials.footer')

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
	<script>window.jQuery || document.write('<script src="{{ url('theme/js/jquery-3.6.0.min.js')}}" defer><\/script>')</script>

	<!-- Custom Scripts and Plugins -->
	<script src="{{ url('theme/js/custom-scripts.js')}}" defer></script>
	<script src="{{ url('theme/js/script.js')}}" defer></script>
  @yield('add-js')

</body>

</html>
