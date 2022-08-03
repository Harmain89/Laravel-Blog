@extends('layouts.app')

@section('title', $category->meta_title)
@section('meta_description', $category->meta_description)
@section('meta_keyword', $category->meta_keyword)

@section('content')


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                <div class="category-heading">
                    <h4 class="text-dark p-2 border border-secondary rounded"> {{ $category->name }} </h4>
                </div>
                @if($post->count() < 1 )
                    <h3 class="py-5 text-danger ff">There is no post available at the time.</h3>
                    <!-- <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/3o6EhNwxVvOYkfwhyg" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p></p> -->
                    <img src="{{ asset('assets/images/emptyPage.jpg') }}" class="img-fluid ff" alt="">
                @else
                    @foreach($post as $postItem)
                        <div class="card card-shadow mt-4 ff">
                            <div class="card-body">
                                <a href=" {{ url('tutorial/'.$category->slug.'/'.$postItem->slug) }} " class="text-decoration-none" >
                                    <h2>{{ $postItem->name }}</h2>
                                </a>
                                <h6 class="my-3">
                                    <strong>Posted On: </strong>
                                    <span class="text-success">{{ $postItem->created_at->format('d-m-Y') }} </span>
                                </h6>
                            </div>
                        </div>
                    @endforeach
                    <div class="your-paginate my-4">
                        {{ $post->links() }}
                    </div>
                @endif
            </div>
            
            <div class="col-md-3">
                <h4>Advertising Area</h4>
            </div>
        </div>
    </div>
</div>


@endsection