@extends('layo.pap')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <h1 class="display-one">{{ ucfirst($department->Department_Name) }}</h1>
            <p>{!! $department->Department_Code !!}</p> 
            <hr>
            <a href="/departments/{{ $department->id }}/edit" class="btn btn-outline-primary">Edit Department</a>
    </div>
</div>   
@endsection