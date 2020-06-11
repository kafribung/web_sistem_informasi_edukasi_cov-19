<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('includes.meta_page')
    @include('includes.css_page')
</head>

<body>
    
    @include('layouts._navbar_page')

    <!-- banner part start-->
    @include('layouts._banner_page')
    <!-- banner part start-->

    <!--::Content::-->
    @yield('content')
    <!--::End Content::-->
    
    <!--::footer_part start::-->
    @include('layouts._footer_page')
    <!--::footer_part end::-->

    @include('includes.script_page')
    @stack('after_script')

</body>

</html>