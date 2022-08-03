@extends('layouts.app')

@section('content')

<h1 class="text-center my-4">Hello From FrontEnd</h1>


<section class="section bg-f2f2f2">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
                
            <!-- End Post Card -->
            <div class="row row-cols-1 row-cols-md-3"  data-masonry='{"percentPosition": true }'>
                @foreach($post as $cardItem)
                <div class="col mb-4 postCard-css">
                    <div class="card h-100">
                    <!-- <img src="" class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <a class="text-decoration-none" href=" {{ url('tutorial/'.$cardItem->category->slug.'/'.$cardItem->slug) }} ">
                                <h3 style="" class="card-title text-success"> {{ $cardItem->name }} </h3>
                            </a>
                            
                            <div class="pc-color">
                                @php
                                    $myString = $cardItem->description;
                                    $setString = strstr( $myString, '<p>' );
                                    echo(substr($setString,3,150).'</p>');
                                @endphp
                            </div>
                            <a class="text-decoration-none" href=" {{ url('tutorial/'.$cardItem->category->slug.'/'.$cardItem->slug) }} ">
                                <p class="card-text"> {{ $cardItem->slug }} </p>
                            </a>
                            <p class="card-text"><small class="text-muted">Posted On: {{ $cardItem->created_at->format('d-m-Y') }} </small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- End Post Card -->


                <div class="div">
                    <h3 class="global-heading">Popular Posts</h3>
                    <div class="underline bg-red"></div>
                </div>
                <div class="row">
                    @foreach($post as $postItem)
                        <div class="col-md-12 mt-4 ff">
                            <a href=" {{ url('tutorial/'.$postItem->category->slug.'/'.$postItem->slug) }} ">
                                <div class="card shadow border">
                                    <div class="card-body">
                                        <h4 class="mb-2 f-20 font-weight-bold text-dark">
                                            {{ $postItem->name }}
                                        </h4>
                                        <a href="https://www.fundaofwebit.com/post/laravel-8-full-ecommerce-tutorial-source-code" class="text-danger "> read more <i class="fa fa-angle-right"></i></a>
                                        <div class="mt-3 ">
                                            <label class="text-secondary"><i class="fa fa-calendar"></i> {{ $postItem->created_at->format('d-m-Y') }} </label>
                                            <label class="mr-2"> | Share: </label>
                                            <a href="https://api.whatsapp.com/send?text=*Laravel 8 Ecommerce Project Tutorial Source Code*%0A%0Ahttps://www.fundaofwebit.com/post/laravel-8-full-ecommerce-tutorial-source-code" target="_blank"
                                                class="btn btn-sm btn-success f-14 text-white">
                                                <i class="fa fa-whatsapp font-weight-bold"></i> Whatsapp
                                            </a>

                                            <p class="p70 d-none">https://www.fundaofwebit.com/post/laravel-8-full-ecommerce-tutorial-source-code</p>
                                            <button onclick="copyToClipboard('.p70')" class="btn btn-sm f-14 btn-info text-white">Copy Link</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="your-paginate my-4">
                        {{ $post->links() }}
                    </div>
                </div>

                

            </div>
            <div class="col-md-2">
                <!-- <h3>Left Sidebar</h3> -->
                @include('layouts.inc.frontend-left-sidebar')
            </div>
        </div>
    </div>
</section>

@endsection