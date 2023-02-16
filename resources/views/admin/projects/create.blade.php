@extends('layouts.app')

@section('content')
   <h1 class="my-3">Create new project</h1>

   @if ($errors->any())
      <div class="alert alert-danger">
         Check the following:
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <label class="form-label">Project name:</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
         value="{{ old('name') }}">

      <label class="form-label">Description:</label>
      <textarea name="description" cols="30" rows="5"
         class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

      <label class="form-label">Category: </label>
      <select type="select" class="form-select" name="type_id">
         <option selected disabled></option>
         @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
         @endforeach
      </select>

      <label class="form-label">Technology: </label>

      <div class="mb-3">
         @foreach ($technologies as $technology)
            <div class="form-check form-check-inline @error('technologies') is-invalid @enderror">
               <input class="form-check-input @error('technologies') is-invalid @enderror" type="checkbox"
                  id="technologiesCheck_{{ $loop->index }}" name="technologies[]" value="{{ $technology->id }}">

               <label class="form-check-label" for="technologiesCheck_{{ $loop->index }}">
                  {{ $technology->name }}
               </label>
            </div>
         @endforeach
      </div>


      <label class="form-label">Cover image:</label>
      <input type="file" name="cover_img" class="form-control @error('cover_img') is-invalid @enderror">

      <label class="form-label">Github link:</label>
      <input type="text" name="github_link" class="form-control @error('github_link') is-invalid @enderror"
         value="{{ old('github_link') }}">

      <button type="submit" class="btn btn-success my-3">Create</button>

      <a href="{{ route('admin.projects.index') }}" class="mx-3">Return to projects list</a>

   </form>
@endsection
