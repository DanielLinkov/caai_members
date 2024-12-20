<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} -
        @endisset
        {{ config('app.name') }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

	@stack('styles')
</head>
<body data-bs-theme="light">
	<div>{{ $slot }}</div>
</body>
</html>