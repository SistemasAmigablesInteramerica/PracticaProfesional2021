@extends('layouts.layout')

@section('content')
<edit-subjectgrade data_subjectgrade="{{json_encode($subjectgrade)}}"></edit-subjectgrade>
@endsection