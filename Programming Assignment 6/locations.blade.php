<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    </head>
    <body>
		@foreach ($locations as $location)
		<p> {{ $location->value}}  </p>
		<ol> 
			@foreach($location->stories as $story)
				<li>{{$story->title}} </li>
				@endforeach
		</ol>
		@endforeach
    </body>
</html>
