@extends('layouts.app')

@section('title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('meta_keyword', $post->meta_keyword)

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                <div class="category-heading">
                    <h1>{{ $post->name }}</h1>
                </div>
                <div class="category-heading">
                    <h4 class="bg-secondary text-white p-2 border rounded"> 
                        <strong>Category:    </strong><small class="text-warning"><i>#{{ $category->name }}</i></small> 
                    </h4>
                </div>

                <div class="card card-shadow mt-4 ff">
                    <div class="card-body post-description">
                        <div> {!! $post->description !!} </div>
                        <h6 class="my-3">
                            <strong>Posted On: </strong>
                            <span class="text-success">{{ $post->created_at->format('d-m-Y') }} </span>
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <h4 class="py-4">Advertising Area</h4>
                
                <!-- Start Latest posts -->
    
                <div class="card position-fixed">
                    <div class="card-header">
                        <h4>Latest Post</h4>
                    </div>
                    <div class="card-body">
                        @foreach($Latest_post as $lp_Item)
                            <a href=" {{ url('tutorial/'.$lp_Item->category->slug.'/'.$lp_Item->slug) }} " class="text-decoration-none">
                                <h6 class="card-title">> {{ $lp_Item->name }} </h6>
                            </a>
                        @endforeach
                    </div>
                </div>
    
                <!-- End Latest posts -->
            </div>


        </div>
    </div>
</div>


@endsection