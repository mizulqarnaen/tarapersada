<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Materio - HTML Laravel Free Admin Template </title>
        <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
        <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
        <!-- laravel CRUD token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Canonical SEO -->
        <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
        <meta name="robots" content="max-image-preview:large" />
        <!-- Include Styles -->
        @include('frontend/layouts/sections/styles')
    </head>
</html>