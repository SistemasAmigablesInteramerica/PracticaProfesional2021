@extends('layouts.layout')

@section('content')
<edit-userroles data_userroles="{{json_encode($userroles)}}"></edit-userroles>
@endsection