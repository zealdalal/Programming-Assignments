<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    </head>
    <body>
		@foreach ($tags as $tag)
		<p> {{ $tag->value}}  </p>
		@endforeach
    </body>
</html>
