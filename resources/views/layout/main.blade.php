<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.ico') }}"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @include('layout.styles.css')
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body>

    <!--  BEGIN NAVBAR  -->
    @include('layout.partials.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layout.partials.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <!-- <div class="page-header">
                    <div class="page-title">
                        <h3>Page Title</h3>
                    </div>
                </div> -->

                <div class="row">
                    @yield('content')
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
     @include('layout.scripts.js')
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
