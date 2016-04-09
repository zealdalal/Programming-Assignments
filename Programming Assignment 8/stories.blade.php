    @extends('page')
        @section('title', 'Stories')

    @section('content')

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
    @endsection
