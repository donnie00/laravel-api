@extends('layouts.app')
@section('content')
   <div class="d-flex align-items-center justify-content-between  my-3">
      <h1>Utente {{ Auth::user()->name }}</h1>
      <a href="{{ route('admin.projects.create') }}" class="mx-3">Add new</a>
   </div>


   <table class="table">
      <thead class="table-secondary">
         <tr>
            <th>Nome</th>
            <th>Description</th>
            <th>Cover Image</th>
            <th>Git Link</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($projects as $project)
            <tr>
               <td>{{ $project->name }}</td>
               <td> {{ Str::limit($project->description, 50, '...') }} </td>
               <td>
                  <img
                     src="{{ $project->cover_img ? asset('storage/' . $project->cover_img) : asset('storage/placeholder-image.png') }}"
                     alt="" class="img-fluid">
               </td>
               <td>
                  <a href="{{ $project->github_link }}">
                     {{ $project->github_link }}</a>
               </td>

               <td>
                  <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info w-100">See details</a>
                  @include('admin.projects.partials.delete-form-btn')
                  <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning w-100">Edit</a>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
@endsection
