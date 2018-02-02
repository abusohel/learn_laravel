@extends('layout.app')
@section('title','song edit')
@section('body')
	{{$song->title}}</br>
	by {{$song->artist}}


@endsection