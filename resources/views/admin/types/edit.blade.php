@extends('layouts.app')

@section('content')
   <form action="{{ route('admin.types.update', $type) }}" method="POST">
      @csrf
      @method('PATCH')
      <label class="form-label">Type name: </label>
      <input type="text" name="name" class="form-control" value="{{ old('name', $type->name) }}">

      <button type="submit" class="btn btn-success">Add</button>
   </form>
@endsection
