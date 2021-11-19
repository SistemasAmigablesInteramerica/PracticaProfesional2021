@extends('layouts.layout')

@section('content')
    <edit-grade data_grade="{{json_encode{$grade}}}"></edit-grade>
@endsection