<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{ $site_info->favicon }}">
	@if (isset($site_info->index_google))
		<meta name="robots" content="{{ $site_info->index_google == 1 ? 'index, follow' : 'noindex, nofollow' }}">
	@else
		<meta name="robots" content="noindex, nofollow">
	@endif
	{!! SEO::generate() !!}
	
	<meta http-equiv="content-language" content="vi" />
	<meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Hà Nội" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 	<meta name="_token" content="{{csrf_token()}}" />
 	<link rel="canonical" href="{{ \Request::fullUrl() }}">
	<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/animate.css">
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/style.css">
    <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 	@if (!empty($site_info->google_analytics))
 		{!! $site_info->google_analytics !!}
 	@endif
 	@if (!empty($site_info->code_facebook))
 		{!! $site_info->code_facebook !!}
 	@endif
 	@if (!empty($site_info->script))
 		{!! $site_info->script !!}
 	@endif
	@yield('css')
	
	
 	<script>
 		var base_url = "{{ __BASE_URL__ }}";
 		var base = "{{ url('/') }}";
 	</script>
</head>  
	<body>
		@include('frontend.teamplate.header')

		@yield('main')

		@include('frontend.teamplate.footer')

		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/lib/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/wow.min.js"></script>
		<script type="text/javascript" src="{{ __BASE_URL__ }}/js/private.js"></script>
		@yield('script')
		
	</body>
</html>