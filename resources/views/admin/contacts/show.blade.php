@extends('layouts.app')

@section('content')
   <div class="container text-center">
      <h1 class="my-3">
         {{ $contact->object }}
      </h1>

      <h2> {{ $contact->name }} - <small class="text-muted">{{ $contact->email }}</small> </h2>

      <h3>Message:</h3>
      <p class="fs-4">{{ $contact->message }}</p>

      <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
         @csrf
         @method('DELETE')

         <button class="btn btn-outline-danger">Delete</button>

      </form>


      <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-primary my-3">
         &LeftArrow; All contacts
      </a>
   </div>
@endsection
