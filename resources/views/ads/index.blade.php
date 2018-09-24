@extends('layouts.app')

@section('content')
@foreach($ads as $ad)
    {{ $ad->name }} <br>
    @endforeach
@endsection