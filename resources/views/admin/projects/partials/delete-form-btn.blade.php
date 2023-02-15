<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
   @csrf
   @method('DELETE')

   <button class="btn btn-danger w-100">Delete</button>

</form>
