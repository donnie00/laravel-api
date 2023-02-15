@extends('layouts.app')

@section('content')
   <h1 class="my-3 text-center">Types list</h1>

   <a href="{{ route('admin.types.create') }}" class="btn btn-success mb-3 w-100">
      Add new &plus;
   </a>

   <ul class="list-group text-center">
      @foreach ($types as $type)
         <li class="list-group-item d-flex justify-content-between">
            {{ $type->name }}
            <div>
               <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning">Edit</a>
               <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">Delete</button>
               </form>
            </div>
         </li>
      @endforeach
   </ul>
@endsection
