@extends('layouts.app')

@section('content')

   <h1>Edit project# {{ $project->id }}</h1>

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

   <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <label class="form-label">Project name:</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
         value="{{ old('name', $project->name) }}">

      <label class="form-label">Description:</label>
      <textarea name="description" cols="30" rows="5"
         class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>

      <label class="form-label">Category: </label>
      <select type="select" class="form-select" name="type_id">
         @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ $type->id === $project->type_id ? 'selected' : '' }}>{{ $type->name }}
            </option>
         @endforeach
      </select>

      <label class="form-label">Technology: </label>

      <div class="mb-3">
         @foreach ($technologies as $technology)
            <div class="form-check form-check-inline @error('technologies') is-invalid @enderror">
               <input class="form-check-input @error('technologies') is-invalid @enderror" type="checkbox"
                  id="technologiesCheck_{{ $loop->index }}" name="technologies[]" value="{{ $technology->id }}"
                  {{ $project->technologies->contains('id', $technology->id) ? 'checked' : '' }}>

               <label class="form-check-label" for="technologiesCheck_{{ $loop->index }}">
                  {{ $technology->name }}
               </label>
            </div>
         @endforeach
      </div>

      <label class="form-label">Cover image:</label>
      <input type="file" name="cover_img" class="form-control @error('cover_img') is-invalid @enderror">

      @if ($project->cover_img)
         <p class="form-text">Current image: </p>
         <img src="{{ asset('storage/' . $project->cover_img) }}" alt="" class="img-thumbnail">
      @endif

      <label class="form-label">Github link:</label>
      <input type="text" name="github_link" class="form-control @error('github_link') is-invalid @enderror"
         value="{{ old('github_link', $project->github_link) }}">

      <button type="submit" class="btn btn-warning my-3">Edit</button>

      <a href="{{ route('admin.projects.index') }}" class="mx-3">Return to projects list</a>
      <a href="{{ route('admin.projects.show', $project->id) }}" class="mx-3">Return to this projects page</a>

   </form>
@endsection
