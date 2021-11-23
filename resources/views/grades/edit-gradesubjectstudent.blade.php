@extends('layouts.layout')

@section('content')
<edit-gradesubjectstudent data_gradesubjectstudent="{{json_encode($gradesubjectstudent)}}"></edit-gradesubjectstudent>
@endsection