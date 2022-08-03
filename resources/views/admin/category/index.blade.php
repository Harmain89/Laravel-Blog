@extends('layouts.master')
@section('title', 'Categories')

@section('content')

<div class="container-fluid px-4">
    
    
    
  <div class="row">
      
      <div class="card mt-4">
          <div class="card-header">
              <h1 class="mt-4 align-middle">
                  Categories
                  <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-md float-end">
                    <i class="fas fa-plus"></i>  
                    Add Category
                </a>
              </h1>
          </div>
          <div class="card-body">


              <!-- POST TABLE -->
              <div class="table-responsive">
                  <table class="table text-center" id="datatablesSimple">
                      <thead>
                          <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Image</th>
                              <th scope="col">Category Name</th>
                              <th scope="col">Status</th>
                              <th scope="col">Edit</th>
                              <th scope="col">Delete</th>
                          </tr>
                      </thead>
                      <tbody>

                      @foreach($data as $cat)
                      <tr class="align-middle">
                        <th scope="row">{{ $cat['id'] }}</th>
                        <td>  <!--0-->
                          <img src="{{ asset('uploads/category/'.$cat['image']) }}" class="rounded" width="60px" height="60px" alt="">
                        </td>
                        <td>{{ $cat['name'] }}</td>  <!--1-->
                        
                        <td>{{ $cat['status'] == '1' ? 'Hidden':'Shown' }}</td> <!--2-->
                        
                        
                        <!-- d-none td -->
                        <td class="d-none">{{ $cat['id'] }}</td> <!--3-->
                        <td class="d-none">  <!--4-->
                          <span>{{ $cat['slug'] }}</span>
                        </td>
                        <td class="d-none">  <!--5-->
                          <span>{{ $cat['description'] }}</span>
                        </td>
                        <td class="d-none">  <!--6-->
                          <span>{{ asset('uploads/category/'.$cat['image']) }}</span>
                        </td>
                        <td class="d-none">  <!--7-->
                          <span>{{ $cat['meta_title'] }}</span>
                        </td>
                        <td class="d-none">  <!--8-->
                          <span>{{ $cat['meta_description'] }}</span>
                        </td>
                        <td class="d-none">  <!--9-->
                          <span>{{ $cat['meta_keyword'] }}</span>
                        </td>
                        <td class="d-none">  <!--10-->
                          <span>{{ $cat['created_by'] }}</span>
                        </td>
                        <td class="d-none">  <!--11-->
                          <span>{{ $cat['status'] }}</span>
                        </td>
                        
                         
                        
                        
                        <td>  <!--12-->
                            <!-- <a href="#" class="btn btn-primary">Edit</a> -->
                          <button type="button" class="btn btn-primary btnSelect" data-toggle="modal" data-target="#myModal">
                            Edit
                          </button>
                        </td>
                        <td>  <!--13-->
                          <a href="{{ url('admin/delete-category'.$cat->id) }}" class="btn btn-danger">Delete</a>
                        </td>

                        

                      </tr>
                      @endforeach
                      
                      </tbody>
                  </table>
              </div>
  
          </div>
      
      </div>--

  </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title show_name"></h1>
        <button type="button" class="close text-danger" data-dismiss="modal">×</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        
        <!-- Modal Form -->
        <div class="row">
          <div style="background-color: whitesmoke;" class="col-lg-4">
              <div class="mb-3">
                <img src="" id="show_image" width="100%" height="50%" alt="">
              </div>
            </div>
          <div class="col-lg-8">
            <form action="{{ url('admin/update-category') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
            
              <input class="d-none" type="text" id="access_id" name="id">


              <div class="mb-3">
                <label for="text" class="form-label">
                  <h5>Category Name</h5>
                </label>
                <input id="show_name" name="name" type="text" class="form-control form-text">
              </div>
              <!-- <div class="mb-3">
                <label for="text" class="form-label">Image</label>
                <img src="" id="show_image" width="100%" height="50%" alt="">
              </div> -->
              <div class="row">
                <div class="mb-3 col-sm-8">
                  <label for="text" class="form-label"><h5>Image</h5></label>
                  <input type="file" name="image" class="form-control" id="">
                </div>
                <div class="mb-3 col-md-4">
                  <a class="align-middle btn btn-info" href="#">Get from previous one..</a>
                </div> 
              </div>
              <div class="mb-3">
                <label for="text" class="form-label">
                  <h5>Slug</h5>
                </label>
                <input id="show_slug" name="slug" type="text" class="form-control form-text">
                <label for="text" class="form-label mt-3 mb-0"><h5>Description</h5></label>
              </div>
              <!-- <div class="mb-3">
                <label for="text" class="form-label">description</label>
                <input id="show_description" type="text" class="form-control form-text">
              </div> -->
              <div class="form-floating">
                <textarea class="form-control" id="show_description" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <div class="mb-3">
                <label for="text" class="form-label mt-3">
                  <h5>Meta Title</h5>
                </label>
                <input id="show_meta_title" name="meta_title" type="text" class="form-control form-text">
                <label for="text" class="form-label mt-3 mb-0"><h5>Meta Description</h5></label>
              </div>
              <div class="mb-3">
                <!-- <input id="" type="text" class="form-control form-text"> -->
                <textarea class="form-control" id="show_meta_description" name="meta_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <div class="mb-3">
                <label for="text" class="form-label">
                  <h5>Meta Keywords</h5>
                </label>
                <input id="show_meta_keyword" name="meta_keyword" type="text" class="form-control form-text">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="status" id="get_status" value="checkedValue">
                  Hidden
                </label>
              </div>
              
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
          </div>
            
          </div>
        <!-- Ends Modal Form  -->


      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){

    // code to read selected table row cell data (values).
    $("#datatablesSimple").on('click','.btnSelect',function(){
        // get the current row
        var currentRow=$(this).closest("tr"); 
        
        var id=currentRow.find("td:eq(3)").text(); // get current row 1st TD value
        var name=currentRow.find("td:eq(1)").text(); // get current row 1st TD value
        var image=currentRow.find("td:eq(6)").text(); // get current row 4th TD
        var slug=currentRow.find("td:eq(4)").text(); // get current row 2nd TD
        var description=currentRow.find("td:eq(5)").text(); // get current row 4th TD
        var meta_title=currentRow.find("td:eq(7)").text(); // get current row 4th TD
        var meta_description=currentRow.find("td:eq(8)").text(); // get current row 4th TD
        var meta_keyword=currentRow.find("td:eq(9)").text(); // get current row 4th TD
        var get_status=currentRow.find("td:eq(11)").text(); // get current row 4th TD
        // var data=col1+"\n"+col2+"\n"+col3+"\n"+col4+"\n"+col5;
        
        // alert(data);

        $('#access_id').val(id);

        $('.show_name').text(name);

        
        
        $('#show_name').val(name);
        $('#show_image').attr("src",image);
        
        var slu = $.trim(slug)
        $('#show_slug').val(slu);
        
        var des = $.trim(description)
        $('#show_description').val(des);
        
        var mt = $.trim(meta_title)
        $('#show_meta_title').val(mt);
        
        var md = $.trim(meta_description)
        $('#show_meta_description').val(md);
        
        var mk = $.trim(meta_keyword)
        $('#show_meta_keyword').val(mk);

        if(get_status == 1) {
          // $('#get_status').addClass('d-nonen');
          $('#get_status').prop('checked', true);
        }
        else{
          $('#get_status').prop('checked', false);
        }




        // $('#myModal').modal('toggle');
        // $('input[@type="text"]')[0].focus();
        // $('input:text#show_name').focus();
        document.getElementById("show_name").focus();
    });
  });
  // function getfocus() {
  // }


</script>

@endsection