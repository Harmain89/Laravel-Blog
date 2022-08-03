<div class="global-navbar">

    <div class="container">
        <div class="row pb-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/bootstrap-logo.svg') }}" width="130" height="94" alt="logo">
            </div>
            <div class="col-md-8">
                <div class="border text-center p-2">
                    <h5>Advertise Here</h5>
                    <!-- <small>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</small> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    @php
                        $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                    @endphp

                    @foreach($categories as $item)
                        <span class="border border-light"></span>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tutorial/'.$item->slug) }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
</div>