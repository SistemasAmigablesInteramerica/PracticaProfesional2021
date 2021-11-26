@extends('layouts.layout')

@section('content')
<edit-permissions data_permissions="{{json_encode($permissions)}}"></edit-permissions>
@endsection