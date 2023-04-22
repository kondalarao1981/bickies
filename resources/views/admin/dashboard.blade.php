<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
    <title>Bickies - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/ratio.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/remixicon.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vector-map.css')}}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/vendors/slick.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/style.css')}}">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo" src="{{ asset('back-end/assets/images/logo/1.png')}}" alt="logo">
                            <img class="img-fluid white-logo" src="{{ asset('back-end/assets/images/logo/1-white.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="index.html">
                            <img src="{{ asset('back-end/assets/images/logo/1.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <form class="form-inline search-full" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Bickies .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="{{ asset('back-end/assets/images/users/4.jpg')}}" alt="">
                                <div class="user-name-hide media-body">
                                    <span>Emay Walter</span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="all-users.html">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.html">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="support-ticket.html">
                                        <i data-feather="phone"></i>
                                        <span>Spports Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile-setting.html">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="index.html" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="{{ asset('back-end/assets/images/logo/1.png')}}" alt="logo"style="margin-top: -20px;width: 125px;">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo main-white" src="{{ asset('back-end/assets/images/logo/logo.png')}}" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="{{ asset('back-end/assets/images/logo/logo-white.png')}}"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu" style="">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard')}}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="products.html">Prodcts</a>
                                        </li>

                                        <li>
                                            <a href="add-new-product.html">Add New Products</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category.html">Category List</a>
                                        </li>

                                        <li>
                                            <a href="add-new-category.html">Add New Category</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="all-users.html">All users</a>
                                        </li>
                                        <li>
                                            <a href="add-new-user.html">Add new user</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-settings-line"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="profile-setting.html">Profile Setting</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- chart caard section start -->
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                                <div class="custome-3-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Products</span>
                                            <h4 class="mb-0 counter">893
                                                <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                                    ADD NEW</a>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i class="ri-chat-3-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                                <div class="custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Customers</span>
                                            <h4 class="mb-0 counter">4.6k
                                                <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i class="ri-user-add-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title p-0">
                                        <h4>Category</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="category-slider no-arrow">
                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/vegetable.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Vegetables & Fruit</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/cup.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Beverages</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/meats.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Meats & Seafood</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/breakfast.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Breakfast</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/frozen.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Frozen Foods</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/milk.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Milk & Dairies</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/pet.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Pet Food</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/vegetable.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Vegetables & Fruit</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/cup.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Beverages</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/meats.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Meats & Seafood</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/breakfast.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Breakfast</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/frozen.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Frozen Foods</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/milk.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Milk & Dairies</h6>
                                                </a>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/svg/pet.svg')}}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Pet Food</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chart card section End -->
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2023 © Bickies</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- latest js -->
    <script src="{{ asset('back-end/assets/js/jquery-3.6.0.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('back-end/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- feather icon js -->
    <script src="{{ asset('back-end/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/icons/feather-icon/feather-icon.js')}}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset('back-end/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/scrollbar/custom.js')}}"></script>

    <!-- Sidebar jquery -->
    <script src="{{ asset('back-end/assets/js/config.js')}}"></script>

    <!-- tooltip init js -->
    <script src="{{ asset('back-end/assets/js/tooltip-init.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('back-end/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/notify/index.js')}}"></script>

    <!-- Apexchar js -->
    <script src="{{ asset('back-end/assets/js/chart/apex-chart/apex-chart1.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/chart/apex-chart/chart-custom1.js')}}"></script>


    <!-- slick slider js -->
    <script src="{{ asset('back-end/assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('back-end/assets/js/custom-slick.js')}}"></script>

    <!-- customizer js -->
    <script src="{{ asset('back-end/assets/js/customizer.js')}}"></script>

    <!-- ratio js -->
    <script src="{{ asset('back-end/assets/js/ratio.js')}}"></script>

    <!-- sidebar effect -->
    <script src="{{ asset('back-end/assets/js/sidebareffect.js')}}"></script>

    <!-- Theme js -->
    <script src="{{ asset('back-end/assets/js/script.js')}}"></"script>
</body>

</html>