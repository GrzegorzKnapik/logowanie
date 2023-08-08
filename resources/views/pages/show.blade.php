@extends('layouts.index')
@section('title', 'adsd')

@section('content')
@foreach($page as $p)
    {{$p->title}}

@endforeach
@endsection
