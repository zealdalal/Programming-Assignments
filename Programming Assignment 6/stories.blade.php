<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    </head>
    <body>
		@foreach ($stories as $story)
		<p> {{ $story->title}}  </p>
		<ol> 
			@foreach($story->tags as $tag)
				<li>{{$tag->value}} </li>
				@endforeach
		</ol>
		<p> {{ $story->story}}  </p>
		<p> {{ $story->published}} </p>
		@endforeach
    </body>
</html>
