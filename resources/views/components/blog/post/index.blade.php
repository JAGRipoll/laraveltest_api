<div>
    <br>
    <h1>Listado de Posts</h1>

    <h1>  {{ $slot }} </h1>
    @isset($header)
        <h1>  {{ $header }} </h1>
    @endisset

    @foreach ($posts as $p)

        <div class="card card-white mt-2"></div>
            <h3>{{ $p->title }}</h3>
            <a href="{{ route('blog.show', $p) }}">Ir</a>
            <p>{{$p->description}}</p>
    @endforeach
    <br>
    {{-- @isset($extra)
        <h1>  {{ $extra }} </h1>
    @endisset --}}
    
    @isset($footer)
        <h1>  {{ $footer }} </h1>
    @endisset
    
    {{ $posts->links()}}
</div>