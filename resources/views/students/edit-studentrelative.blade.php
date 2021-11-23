@extends('layouts.layout')

@section('content')
<edit-studentrelative data_studentrelative="{{json_encode($studentRelative)}}"></edit-studentrelative>
@endsection