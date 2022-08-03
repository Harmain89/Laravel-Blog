@extends('layouts.master')
@section('title', 'Categories')

@section('content')

<div class="container-fluid px-4">
    
    <div class="row">
        
        <div class="card mt-4">
            <div class="card-header">
                <h1 class="">
                    Add Category
                    <a href="{{ url('admin/category') }}" class="btn btn-non btn-md text-primary float-end">
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

                <form action="{{ url('admin/store-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="">
                    </div>


                    <h4>SEO tags</h4>
                    <div class="mb-3">
                        <label for="" class="form-label">Meta Title</label>
                        <textarea name="meta_title" class="form-control" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Meta Keywords</label>
                        <textarea name="meta_keyword" class="form-control" id="" rows="3"></textarea>
                    </div>


                    <h4>Status Mode</h4>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="navbar_status" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Navbar Status</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Status</label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary align-left">ADD</button>
                    </div>
                </form>
            </div> 
        </div>

    </div>
</div>

@endsection