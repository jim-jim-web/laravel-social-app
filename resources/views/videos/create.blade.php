<h1>Create New Video</h1>
<form action="{{ route('videos.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>

    <label>URL:</label>
    <input type="text" name="url" required>

    <label>Select Channel:</label>
    <select name="channel_id">
        @foreach($channels as $channel)
            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
        @endforeach
    </select>

    <button type="submit">Save Video</button>
</form>