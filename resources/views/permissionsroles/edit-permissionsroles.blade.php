@extends('layouts.layout')

@section('content')
<edit-permissionsroles data_role="{{json_encode($role)}}"></edit-permissionsroles>
@endsection
