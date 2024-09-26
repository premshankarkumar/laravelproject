@extends('layout/default')
@section('content')
<div class="container">
    <h2>Edit student</h2>
    <form action="{{url('edit-student')}}" method="POST">
        @csrf
        <input type="hidden" name="id"  value="{{$data->id}}">
        <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
        </div>

        <div class="mb-3 col-md-6">
            <label for="subject" class="form-label">Subject</label>
            <input name="subject" class="form-control" id="subject" value="{{$data->subject}}">
        </div>

        <div class="mb-3 col-md-6">
            <label for="marks" class="form-label">Marks</label>
            <input type="text" name="marks" class="form-control" id="marks" value="{{$data->marks}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
    @stop