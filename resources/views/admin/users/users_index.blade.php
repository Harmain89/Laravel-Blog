@extends('layouts.master')
@section('title', 'Posts')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mt-4">
          
            <div class="card-header">
              <h1 class="mt-4 align-middle">
                  Users
                <a href="{{ url('admin/add-user') }}" class="btn btn-primary btn-md float-end">
                    <i class="fas fa-plus"></i>  
                    Add User
                </a>
              </h1>
            </div>

            <div class="card-body">
                @if(session('status'))
                    <div class="position-fixed p-3" 
                    style="z-index: 5; right: 0; top: 50px;">
                    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="500">
                        <div class="toast-header">
                        <i class="fas fa-bell text-info" style="font-size: large;"></i>
                        <strong class="mr-auto pl-3">Notification</strong>
                        <small>1 sec ago</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="toast-body" style="background-color: whitesmoke;">
                        <h6>{{ session('status') }}</h6>
                        </div>
                    </div>
                    </div>
                @endif

                <!-- Users TABLE -->
                <div class="table-responsive">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-primary"><i class="fas fa-edit"></i>  Edit</th>
                                <th class="text-danger"><i class="fas fa-trash"></i>  Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data as $item)
                                <tr class="align-middle">
                                    <th scope="row">{{ $item['id'] }}</th>

                                    <td class="">{{ $item['name'] }}</td>
                                    
                                    <td>{{ $item['email'] }}</td>  <!--1-->

                                    <td>{{ $item['role_as']=='1' ? 'Admin':'user' }}</td>
                                    
                                                            
                                    <td>  <!--11-->
                                        <a href="{{ url('admin/edit-user/'.$item->id) }}" class="btn btn-primary ">
                                            Edit
                                        </a>
                                    </td>
                                    
                                    <td>  <!--12-->
                                        <a href="" class="btn btn-danger ">
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


<script>
    
    $('.close').click(function() {
    $('#liveToast').hide();
    });
    setTimeout(function() {
        $('#liveToast').hide();
    }, 6000); // <-- time in milliseconds

</script>

@endsection