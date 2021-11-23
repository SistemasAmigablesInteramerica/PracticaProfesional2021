@extends('layouts.layout')

@section('content')
<edit-employment data_employment="{{json_encode($employment)}}"></edit-employment>
@endsection