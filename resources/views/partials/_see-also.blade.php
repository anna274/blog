<div class="see-also">
    @foreach($posts as $post)
    <div class="preview">
        <a href="/posts/{{$post->id}}">
            <span class="preview">
                <img src="{{$post->image}}">
            </span>
        </a>
        <a href="/posts/{{$post->id}}">
            <p>{{$post->title}}</p>
        </a>
    </div>
    @endforeach
</div>