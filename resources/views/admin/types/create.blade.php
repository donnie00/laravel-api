@extends('layouts.app')

@section('content')
   <form action="{{ route('admin.types.store') }}" method="POST">
      @csrf
      <label class="form-label">Type name: </label>
      <input type="text" name="name" class="form-control">

      <button type="submit" class="btn btn-success">Add</button>
   </form>
@endsection
