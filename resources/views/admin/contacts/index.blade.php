@extends('layouts.app')

@section('content')
   <h1 class="my-3 text-center">Contacts received</h1>

   <table class="table table-striped align-middle">
      <thead>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Object</th>
            <th>Message</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach ($contacts as $contact)
            <tr>
               <td>
                  {{ $contact->name }}
               </td>
               <td>
                  {{ $contact->email }}
               </td>
               <td>
                  {{ $contact->object }}
               </td>
               <td>
                  {{ $contact->message }}
               </td>
               <td class="text-center">
                  <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-warning">More</a>
                  <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                     @csrf
                     @method('DELETE')

                     <button class="btn btn-danger">Delete</button>

                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

   {{-- <a href="{{ route('admin.contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
   <form action="{{ route('admin.contacts.destroy', $type->id) }}" method="POST">
      @csrf
      @method('delete')
      <button class="btn btn-danger">Delete</button>
   </form> --}}
@endsection
