@extends('admin.layouts.usersIndex')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>JOCA Users</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-sm-right">Add User</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User Data Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="userTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role ? $user->role->role : 'null' }}</td>
                                            <td>
                                                <!-- Toggle button -->
                                                <button class="btn btn-sm toggle-status {{ $user->is_active ? 'btn-success' : 'btn-danger' }}" 
                                                    data-user-id="{{ $user->id }}">
                                                    {{ $user->is_active ? 'Active' : 'Inactive' }}
                                                </button>
                                            </td>                                                                                                                             
                                            <td>
                                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

<script>
document.querySelectorAll('.toggle-status').forEach(function(button) {
    button.addEventListener('click', function() {
        const userId = this.getAttribute('data-user-id');
        const isActive = this.classList.contains('btn-danger') ? 1 : 0; // Check if button is Active or not

        // Toggle the button style
        if (isActive) {
            this.classList.remove('btn-danger');
            this.classList.add('btn-success');
            this.innerText = 'Active';
        } else {
            this.classList.remove('btn-success');
            this.classList.add('btn-danger');
            this.innerText = 'Inactive';
        }

        // Send AJAX request to update the user status
        fetch(`/admin/users/${userId}/update-status`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ is_active: !isActive })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(data.message); // logs success message
            } else {
                console.error('Failed to update status');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>