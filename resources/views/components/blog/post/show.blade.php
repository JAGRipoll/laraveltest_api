<div class="card card-white">
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    {{-- {{ $title }} --}}
    {{-- @dd('Cargando componente blog.post.show') --}}

    <h1>{{ $post->title }}</h1>
    <span>{{ $post->category->title }}</span>
    

    <hr>
    {{ $attributes->filter((fn(string $value, string $key) => $key=='data-id')) }}
    {{ $post->content }}

</div>