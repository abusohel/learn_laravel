@extends('layout.app')
@section('title', 'welcome')
@section('body')
welcome {{$user->number}}
@endsection