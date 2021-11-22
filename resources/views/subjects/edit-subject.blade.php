@extends('layouts.layout')

@section('content')
<edit-subject data_subject="{{json_encode($subject)}}"></edit-subject>
@endsection