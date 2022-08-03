@extends('layouts.master')
@section('title', 'Posts')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mt-4">
          
            <div class="card-header">
              <h1 class="mt-4 align-middle">
                  View Posts
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-md float-end">
                    <i class="fas fa-plus"></i>  
                    Add Post
                </a>
              </h1>
            </div>
 
            <div class="card-body">

                <!-- POST TABLE -->
                <div class="table-responsive">
                    <table class="table text-left" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Post Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-primary"><i class="fas fa-edit"></i>  Edit</th>
                                <th scope="col" class="text-danger"><i class="fas fa-trash"></i>  Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($data as $post)
                                <tr class="align-middle">
                                    <th scope="row">{{ $post['id'] }}</th>

                                    <td class="d-none">{{ $post['id'] }}</td>
                                    
                                    <td>{{ $post['name'] }}</td>  <!--1-->
                                    <td>{{ $post->category->name }}</td>  <!--1-->
                                    <!-- <td>{{ substr($post['description'], 0, 100).'......' }}</td> -->
                                    
                                    <td>{{ $post['status'] == '1' ? 'Hidden':'Shown' }}</td> <!--2-->
                                    
                                                            
                                    <td>  <!--11-->
                                        <a href="{{ url('admin/edit-post/'.$post->id) }}" class="btn btn-primary ">
                                            Edit
                                        </a>
                                    </td>
                                    
                                    <td>  <!--12-->
                                        <a href="{{ url('admin/delete-post/'.$post->id) }}" class="btn btn-danger ">
                                            Delete
                                        </a>                                 
                                    </td>

                                    

                                </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>




@endsection