<!-- Head Section Start -->
@include('element.head-section')
<!-- Head Section End -->

<!-- Sidebar Section Start -->
        <div class="row">
            <div class="col-md-3">
                @include('element.sidebar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>   
<!-- Sidebar Section End -->

<!-- Footer Script Section Start--->
@include('element.footer-section')
<!-- Footer Script Section End--->