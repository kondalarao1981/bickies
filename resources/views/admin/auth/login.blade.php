<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
              content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords"
              content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('back-end/assets/images/favicon.png')}}" type="image/x-icon">
        <title>Bickies - Admin Buy Cookies &amp; Gift Tins Online. Flat 15% off + Free Shipping</title>

        <!-- Google font-->
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/vendors/bootstrap.css')}}">

        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/style.css')}}">
    </head>

    <body>
        <!-- login section start -->
        <section class="log-in-section section-b-space">
            <a href="" class="logo-login"><img src="{{ asset('back-end/assets/images/logo/1.png')}}" class="img-fluid"></a>
            <div class="container w-100">
                <div class="row">

                    <div class="col-xl-5 col-lg-6 me-auto">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>Welcome To Bickies Admin Panel</h3>                                
                                <h4>Log In Your Account</h4>
                                @if(session('error'))
                                    <div class="text-danger text-center">{{ session('error') }}</div>
                                @endif
                            </div>                   

                            <div class="input-box">
                                <form class="row g-4" action="{{route('postLogin')}}" method="post">
                                    @csrf
                                    <div class="col-12">                                        
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
                                            <label for="email">Email Address</label>
                                        </div>
                                        @error('email')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">                                        
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input name="password" type="password" class="form-control" id="password"
                                                   placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                        @error('password')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="forgot-box">
                                            <div class="form-check ps-0 m-0 remember-box">
                                                <input name="remember" class="checkbox_animated check-box" type="checkbox"
                                                       id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-animation w-100 justify-content-center" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login section end -->
    </body>
</html>