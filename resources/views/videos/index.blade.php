<h1>All Videos</h1>

{{-- Rule: Only Admin can manage Users, but we can put a link here if we want --}}
@if(auth()->user()->role === 'admin')
    <a href="/users">Manage Users (Admin Only)</a>
@endif

<table border="1" style="width:100%; text-align:left; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Channel</th>
            <th>Categories</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ $video->title }}</td>
                {{-- Eager loaded relationship  --}}
                <td>{{ $video->channel->name }}</td>
                <td>
                    @foreach($video->categories as $category)
                        <span style="background: #eee; padding: 2px 5px;">{{ $category->name }}</span>
                    @endforeach
                </td>
                <td>
                    {{-- Rule: Anyone logged in can View --}}
                    <a href="{{ route('videos.show', $video->id) }}">View</a>

                    {{-- Rule: Only the owner can see Edit/Delete buttons [cite: 14, 16] --}}
                    @if(auth()->id() === $video->channel->creator_id)
                        | <a href="{{ route('videos.edit', $video->id) }}">Edit</a>
                        | <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                          </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>