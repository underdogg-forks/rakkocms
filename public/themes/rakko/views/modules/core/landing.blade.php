@extends($theme_front)

{{-- Web site Title --}}
@section('title')
{{ Config::get('core.title') }} :: @parent
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('themes/' . $activeTheme . '/assets/css/cd_style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('themes/' . $activeTheme . '/assets/css/carousel.css') }}">
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('themes/' . $activeTheme . '/assets/js/jquery.mobile.custom.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('themes/' . $activeTheme . '/assets/js/main.js') }}"></script>
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')


<!-- Banner -->
<div class="container-fluid">
<div class="row">

	{!!
		Widget::NewsBanner()
	!!}

</div><!--./row-->
</div><!--./container-fluid-->

<div class="container-fluid padding-top-md">
	@include($activeTheme . '::' . '_partials._front._content.jumbo_tron')
</div><!--./container-fluid-->

<div class="row margin-left-md margin-right-md">
<div class="col-md-4">
	<article class="left-box">

		<h4>
		Built for you and your institution
		</h4>
		<p>
		Campus Soft wasn't created by a team who have no actual classroom experience.
		Campus Soft was created by a teacher with vast experience in several educational institutions for your institution.
		</p>
		<a class="btn btn-default" href="/" role="button">Learn&nbsp;{{ trans('kotoba::button.more') }}&nbsp;&raquo;</a>

	</article>
</div>
<div class="col-md-4">
	<article class="left-box">

		<h4>
		Everything in One Place
		</h4>
		<p>
		Campus Soft takes advantage of your time and your data.
		Why would you want to store your data across several systems when it can be stored in one?
		We at Campus Soft thought the same thing!
		</p>
		<a class="btn btn-default" href="/" role="button">Learn&nbsp;{{ trans('kotoba::button.more') }}&nbsp;&raquo;</a>

	</article>
</div>
<div class="col-md-4">
	@include($activeTheme . '::' . '_partials._front._tabs.tabs')
</div>
</div> <!-- ./row -->


	@include($activeTheme . '::' . '_partials._front._content.main_content')
	@include($activeTheme . '::' . '_partials._front._content.bottom_content')

@stop
