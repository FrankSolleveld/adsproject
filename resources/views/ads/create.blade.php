@extends('layouts.app')

@section('content')
<div class="container">

    {!! Form::open(array('url' => 'foo/bar'))  !!}
    <div class="form-group">
    {{Form::label('Name','Enter your name')}}<br>
    {{Form::text('Name','' ,['placeholder' => 'Name'])}}
    </div>

    <div class="form-group">
    {{Form::label('description', 'Enter the description')}}<br>
    {{Form::text('description', "", ['placeholder' => 'Description'])}}
    </div>

    <div class="form-group">
    {{Form::label('price', 'Fill in the price')}}<br>
    {{Form::number('price', '', ['placeholder' => 'Price'])}}
    </div>

    {{Form::submit('Click Me!')}}
    {{ Form::close() }}

    <!-- Gebruik van flash sessions in laravel & validatie -->

</div>

@endsection