<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#"><img src="{{ asset('image/logo/logo.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    {{-- <div class="offcanvas__widget">
        <span>Call us for any questions</span>
        <h4>+01 123 456 789</h4>
    </div> --}}
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">

                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li>
                            <a href="{{ route('toHome') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('toAdd')}}">Add</a>
                        </li>
                        <li>
                            <a href="{{ route('toList') }}">To List</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

<script>


</script>
<!-- Header Section End -->
