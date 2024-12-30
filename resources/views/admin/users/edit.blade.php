@extends('admin.layouts.usersIndex')
@section('content')
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

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit User: {{ $user->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary float-sm-right">Back to Users</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit User Information</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select class="form-control" id="role" name="role" required>
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                            <!-- Add more roles as necessary -->
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_active" value="1" {{ $user->is_active ? 'checked' : '' }}> Active
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_active" value="0" {{ !$user->is_active ? 'checked' : '' }}> Deactivated
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update User</button>
                                </form>
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
