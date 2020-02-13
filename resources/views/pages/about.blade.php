@extends('layouts/master', ['title' => 'About'])

@section('content')
	<div class="container">
		<h2>What is Laramap ?</h2>
		<p>{{config('app.name')}} is a clone of <a href="http://laramap.com">Laramap.com</a> </p>

		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-warning">
					<strong> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> this app has been build by @etsmo for learning purpose.</strong>
				</div>
			</div>
		</div>

		<P>feel free to help to improve the <a href="https://github.com/DK-codeur/laracarte" target="_blank">source code</a></P>

		<hr>

		<h2>What is Laramap ?</h2>
		<p>Laramap is the website which {{config('app.name')}} was inspired :).</p>
		<p>More info <a href="#">here</a></p>

		<hr>

		<h2>which tools and serveice are used in {{config('app.name')}} ?</h2>
		<p>Basically it's built on Laravel &amp; bootstrap. But there's bunch of service used for email and other section .</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google map</li>
			<li>Gravatar</li>
			<li>Antony Martin's geolocation package</li>
			<li>Google map</li>
			<li>Heroku</li>
		</ul>
	</div>
@endsection