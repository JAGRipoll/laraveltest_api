<div class="car card-white">
    <h1>{{ $post->title }}</h1>
    <span>{{ $post->category->title }}</span>
    <hr>
    {{ $attributes}}
    
    {{ $post->content }}
    
</div>