<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <!-- header content goes here -->
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- sidebar content goes here -->
                </div>

                <div class="col-md-9">
                    <!-- main content goes here -->
                    @yield('content')
                </div>
            </div>
        </div>

        <footer>
            <!-- footer content goes here -->
        </footer>
    </body>
</html>
