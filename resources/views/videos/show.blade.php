<h1>{{ $video->title }}</h1>
<p>Channel: {{ $video->channel->name }}</p>
<p>URL: <a href="{{ $video->url }}">{{ $video->url }}</a></p>
<a href="{{ route('videos.index') }}">Back to List</a>