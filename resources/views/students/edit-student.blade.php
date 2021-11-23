@extends('layouts.layout')

@section('content')
<edit-students data_student="{{json_encode($student)}}"></edit-students>
@endsection