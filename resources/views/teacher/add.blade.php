@extends('layout/default')
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-body">
    <div class="container col-md-6">
        <h2>Add student</h2>
        <form action="{{url('add-student')}}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" required>
            </div>

            <div class="mb-3">
                <label for="marks" class="form-label">Marks</label>
                <input type="text" name="marks" class="form-control" id="marks" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
@stop
