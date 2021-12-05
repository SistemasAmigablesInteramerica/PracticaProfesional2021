@extends('layouts.layout')

@section('content')
<edit-permissionsroles data_permissionsroles="{{json_encode($permissionsroles)}}"></edit-permissionsroles>
@endsection