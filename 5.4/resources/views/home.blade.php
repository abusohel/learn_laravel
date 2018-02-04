@extends('layout.app')
@section('title', 'welcome')
@section('body')

@foreach($mobiles as $mobile)
<h4>{{$mobile->number}}</h4>
@endforeach
@endsection