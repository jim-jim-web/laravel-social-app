<h1>Edit Video</h1>
<form action="{{ route('videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Title:</label>
    <input type="text" name="title" value="{{ $video->title }}">

    <label>URL:</label>
    <input type="text" name="url" value="{{ $video->url }}">

    <button type="submit">Update Video</button>
</form>