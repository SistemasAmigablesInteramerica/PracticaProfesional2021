@extends('layouts.layout')

@section('content')
<create-student student="{{json_encode($student)}}"></create-student>
@endsection
