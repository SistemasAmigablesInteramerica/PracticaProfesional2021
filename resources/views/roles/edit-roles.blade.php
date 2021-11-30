@extends('layouts.layout')

@section('content')
<edit-roles data_roles="{{json_encode($roles)}}"></edit-roles>
@endsection