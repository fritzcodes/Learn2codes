@foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>Posted by: {{ $post->username }}</p>
    </div>
@endforeach
