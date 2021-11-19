@extends('layouts.layout')

@section('content'){{$grade}}
    <edit-grade data_grade="{{json_encode{$grade}}}"></edit-grade>
@endsection