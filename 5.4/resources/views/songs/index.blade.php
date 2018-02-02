@extends('layout.app')
@section('title', 'songs')
@section('body')
{{'welcome to music world'}}</br>

@foreach ($songs as $song)
	{{$song->title}}</br>
@endforeach
@endsection