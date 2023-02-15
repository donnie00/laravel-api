@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row my-5 justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Welcome ' . ucfirst(Auth::user()->name)) }}</div>

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                     </div>
                  @endif

                  @if (Auth::user()->name === 'admin')
                     <ul>
                        <li>
                           <a href="{{ route('admin.projects.index') }}">Manage all projects</a>
                        </li>
                        <li>
                           <a href="{{ route('admin.types.index') }}">Manage types</a>
                        </li>
                     </ul>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
