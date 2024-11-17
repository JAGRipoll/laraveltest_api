@extends('dashboard.layout')
@section('content')

    @include('dashboard.fragment._errors-form')

    <h1>{{ $category->title }}</h1>

@endsection 