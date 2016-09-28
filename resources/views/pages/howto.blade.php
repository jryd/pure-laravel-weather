@extends('master')

@section('title')
How To
@endsection

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">	
		<h2>Weather App How To</h2>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		    <li><a data-toggle="tab" href="#location">Location</a></li>
		    <li><a data-toggle="tab" href="#locationDay">Location &amp; Day</a></li>
	 	</ul>

		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active">
		    	<h3>Home</h3>
		    	<p>By hitting the home page, the application will automatically pick up your location and show you the weather forecast for that day and the week ahead.</p>
		  	</div>
		  	<div id="location" class="tab-pane fade">
		    	<h3>Specifying Location</h3>
		    	<p>You can specify the location you're after if you like, by simply adding the location in the URI; <code>http://weather.app/{location}</code>.</p>
		  	</div>
		  	<div id="locationDay" class="tab-pane fade">
		    	<h3>Specifying location &amp; day</h3>
		    	<p>You can also extend the location by providing a specific day you're after within the next seven days by adding this to the URI; <code>http://weater.app/{location}/{day}</code>.</p>
		  	</div>
		</div>
	</div>
</div>
@endsection