@php
    $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
@endphp

<h3>Categories</h3>

<div style="padding-left: 6px;" class="list-group">
    
    @foreach($categories as $cat_item)
        <a href=" {{ url('tutorial/'.$cat_item->slug) }} " class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">{{ $cat_item->name }}</h5>
                <small>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                  <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>
                </small>
            </div>
        </a>
    @endforeach
    
</div>