@extends('layouts.master')
@section('title', 'Edit User')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mt-4">
          
            <div class="card-header">
              <h1 class="mt-4 align-middle">
                  Edit User <i class="text-success">{{$data->name}}</i>
                <a href="{{ url('admin/users') }}" class="btn btn-non btn-md text-primary float-end">
                    <i class="fas fa-arrow-left"></i>
                      <strong>Back</strong>
                      <!-- <i class="bi bi-arrow-left"></i> -->
                </a>
              </h1>
            </div>

            <div class="card-body">

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                
                <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <p class="form-control">{{ $data->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email Id</label>
                    <p class="form-control">{{ $data->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Created At</label>
                    <p class="form-control">{{ $data->created_at->format('d/m/y') }}</p>
                </div>
                
                <form action="{{ url('admin/update-user/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <label for="" class="form-label">Website User Role </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Role As</label>
                        </div>
                        <select name="role_as" class="custom-select" id="inputGroupSelect01">
                            <option value="1" {{ $data->role_as == '1' ? 'selected':'' }}>Admin</option>
                            <option value="0" {{ $data->role_as == '0' ? 'selected':'' }} >User</option>
                            <option value="2" {{ $data->role_as == '2' ? 'selected':'' }} >Blogger</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary align-left">Update Profile</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>


@endsection