<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title_app')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('Frontend.layout.header_css')

</head>

<body>

    @include('Frontend.layout.header')

    @include('Frontend.pages.about')

    @include('Frontend.pages.resume')

    @include('Frontend.pages.services')

    @include('Frontend.pages.portfolio')

    @include('Frontend.pages.contact')


    @include('Frontend.layout.footer_credits')


</body>

</html>

@include('frontend.layout.footer_js')
