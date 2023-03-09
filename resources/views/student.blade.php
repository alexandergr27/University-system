
@extends('layouts.app')

@section('content')
    <h1>{{count($students)}}</h1>
    <student-component></student-component>
@endsection