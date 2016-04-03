<!DOCTYPE html>
<html lang="en">
    <head> 
	    <meta charset="utf-8" />
        <title></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		</head>
    <body>
	<form method="post" action="/story/store">
		LOCATION<br>
		<select name="location_id">
		@foreach ($locations as $location)
		<option value="{{$location->id}}">{{$location->value}}</option>
		@endforeach
		</select><br>
		TITLE<br>
		<input type="text" name="title"><br>
		STORY<br>
		<input type="text" name="story"><br>
		<input type="radio" name="published" value=1 checked> Published<br>
        <input type="radio" name="published" value=0> Not published<br>
		<input type="submit" value="Submit"><br>
		</form>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
