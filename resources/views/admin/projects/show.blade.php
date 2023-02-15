@extends('layouts.app')

@section('content')
   <h1 class="my-3">Progetto id #{{ $project->id }}</h1>

   <div class="row">
      <div class="col">
         <img
            src="{{ $project->cover_img ? asset('storage/' . $project->cover_img) : asset('storage/placeholder-image.png') }}"
            alt="..." class="img-fluid">
      </div>
      <div class="col-8">
         <h4>Name: </h4>
         <p>{{ $project->name }}</p>

         <h4>Type:</h4>
         <p>{{ $project->type->name }}</p>

         <h4>Technologies:</h4>
         @foreach ($project->technologies as $technology)
            <p>
               {{ $project->technologies }}
            </p>
         @endforeach

         <h4>Description: </h4>
         <p>{{ $project->description }}</p>

         <h6 class="text-center">
            <a href="{{ $project->github_link }}">Go check it on github!</a>
         </h6>
      </div>
   </div>
   <a href="{{ route('admin.projects.index') }}" class="mx-3">Return to projects list</a>
   <a href="{{ route('admin.projects.edit', $project->id) }}" class="mx-3">Edit this project</a>
@endsection
