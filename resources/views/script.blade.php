window.Laravel = {!! json_encode([
	'csrfToken' => csrf_token(),
	'baseUrl' => url('/'),
	'routes' => collect(\Route::getRoutes())->mapWithKeys(function ($route) { return [$route->getName() => $route->uri()]; })
]) !!};