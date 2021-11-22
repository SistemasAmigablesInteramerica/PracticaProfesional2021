@extends('layouts.layout')

@section('content')
<edit-teacher data_teacher="{{json_encode($teacher)}}"></edit-teacher>
@endsection