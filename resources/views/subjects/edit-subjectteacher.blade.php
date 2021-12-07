@extends('layouts.layout')

@section('content')
<edit-subjectteacher data_subjectteacher="{{json_encode($subjectteacher)}}"></edit-subjectteacher>
@endsection
