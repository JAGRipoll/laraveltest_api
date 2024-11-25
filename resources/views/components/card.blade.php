{{-- <div class="w-full border shadow-md rounded-md p-5 bg-white"> --}}
{{-- <div {{ $attributes->merge(['class' => 'w-full border shadow-md rounded-md p-5', 'data-id'=>'test'])}}> --}}


{{-- @props(['type'=> 'info', 'bg' => true]) --}}
<div {{ $attributes->class(['w-full border shadow-md rounded-md p-5', 'bg-white' => $bg])}}>
    {{ $slot }}
    {{-- {{ $type}} --}}
    {{-- {{ $attributes }} --}}

    {{-- {{ $attributes->whereStartWith('bg')}} --}}
    {{-- {{ $attributes->whereDoesntStartWith('cl')}} --}}

    {{-- @if ($attributes->has('class'))
        <div>Class atributte is present</div>
    @endif

    @if ($attributes->has(['bg', 'class']))
    <div>All of the attributes are present</div>
    @endif --}}


</div>