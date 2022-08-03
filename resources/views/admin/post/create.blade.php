@extends('layouts.master')
@section('title', 'Add Post')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mt-4">
          
            <div class="card-header">
              <h1 class="mt-4 align-middle">
                  Add Post    
                <a href="{{ url('admin/posts') }}" class="btn btn-non btn-md text-primary float-end">
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
                
                <form action="{{ url('admin/save-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Select Category</label>
                        <select class="custom-select" name="category_id">
                            <option value=""></option>
                            @foreach($data as $cateitem)
                            <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="mysummernote" class="form-control" id="" rows="5"></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="">
                    </div> -->
                    <div class="mb-3">
                        <label for="" class="form-label">Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control" id="">
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
                        <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Status</label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary align-left">Save Post</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

@endsection