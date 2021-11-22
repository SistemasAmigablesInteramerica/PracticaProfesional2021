@extends('layouts.layout')

@section('content')
<edit-studentrelative data_grade="{{json_encode($studentRelative)}}"></edit-studentrelative>
@endsection