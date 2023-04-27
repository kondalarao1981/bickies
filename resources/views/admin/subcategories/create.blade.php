<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <!-- meta data -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
              content="Bickies admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords"
              content="admin template, Bickies admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
        <title>Bickies - Add New SubCategory</title>

        <!-- Google font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Linear Icon css -->
        <link rel="stylesheet" href="{{ asset('back-end/assets/css/linearicon.css')}}">

        <!-- Fontawesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/font-awesome.css')}}">

        <!-- Themify icon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/themify.css')}}">

        <!--Dropzon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/dropzone.css')}}">

        <!-- Feather icon css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/feather-icon.css')}}">

        <!-- remixicon css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/remixicon.css')}}">

        <!-- Select2 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/select2.min.css')}}">

        <!-- Plugins css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/chartist.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/date-picker.css')}}">

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/bootstrap.css')}}">

        <!-- Bootstrap-tag input css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/bootstrap-tagsinput.css')}}">

        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/style.css')}}">
    </head>

    <body>
        <!-- tap on top start -->
        <div class="tap-top">
            <span class="lnr lnr-chevron-up"></span>
        </div>
        <!-- tap on tap end -->

        <!-- page-wrapper start -->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            @include('partials.header')
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
                        @include('partials.sidebar')
                    </div>
                </div>
                <!-- Page Sidebar Ends-->

                <!-- index body start -->
                <div class="page-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-8 m-auto">
                                        @if (session('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #0DA487;border-color: #0DA487">
                                            {{ session('message') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>                                        
                                        @endif

                                        @if($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #842029;border-color: #842029">

                                            <strong>{{ $error }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endforeach
                                        @endif

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-header-2">
                                                    <h5 style="color: #0DA487;">SubCategory Information</h5>
                                                </div>

                                                <form class="theme-form theme-form-2 mega-form" action="{{route('subcategories.store')}}" method="post">
                                                    @csrf
                                                    <div class="mb-4 row align-items-center">
                                               <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-9">
                                                       <select class="js-example-basic-single w-100" name="category">
                                                            <option value="">--- Select a category ---</option>
                                                                @foreach($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-3 mb-0">SubCategory Name</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="text" name="subcategory_name"
                                                                   placeholder="SubCategory Name" value="{{ old('subcategory_name') }}">
                                                        </div>                                                       
                                                    </div>                                            

                                                    <div class="col-sm-9">
                                                        <button class="btn ms-auto theme-bg-color text-white" type="submit">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid Ends-->
                    @include('partials.footer')
                </div>
                <!-- index body end -->


            </div>
            <!-- Page Body End -->
        </div>
        <!-- page-wrapper End -->

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
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn  btn--yes btn-primary">Yes</button>
                            </form>
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

        <!-- Sidebar js -->
        <script src="{{ asset('back-end/assets/js/config.js')}}"></script>

        <!-- bootstrap tag-input js -->
        <script src="{{ asset('back-end/assets/js/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{ asset('back-end/assets/js/sidebar-menu.js')}}"></script>

        <!-- customizer js -->
        <script src="{{ asset('back-end/assets/js/customizer.js')}}"></script>

        <!--Dropzon js -->
        <script src="{{ asset('back-end/assets/js/dropzone/dropzone.js')}}"></script>
        <script src="{{ asset('back-end/assets/js/dropzone/dropzone-script.js')}}"></script>

        <!-- Plugins js -->
        <script src="{{ asset('back-end/assets/js/notify/bootstrap-notify.min.js')}}"></script>
        <script src="{{ asset('back-end/assets/js/notify/index.js')}}"></script>

        <!-- select2 js -->
        <script src="{{ asset('back-end/assets/js/select2.min.js')}}"></script>
        <script src="{{ asset('back-end/assets/js/select2-custom.js')}}"></script>

        <!-- sidebar effect -->
        <script src="{{ asset('back-end/assets/js/sidebareffect.js')}}"></script>

        <!-- Theme js -->
        <script src="{{ asset('back-end/assets/js/script.js')}}"></script>

    </body>

</html>