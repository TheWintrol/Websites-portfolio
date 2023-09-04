<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AmpTune ADMIN</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS -->
        <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
        <!-- JS -->
        <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.js') }}"></script>
        <script src="{{ asset('admin/js/app.js') }}" defer></script>
        <script src="{{ asset('admin/js/mdb.js') }}"></script>
        <script src="{{ asset('admin/js/popper.js') }}"></script>
        <script src="{{ asset('admin/js/charts/desk-charts.js') }}"></script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    </head>
    <body> 
    <div class="container-for-admin">
    <!--Main Navigation-->
    <header>
    <!-- Navbar -->
        @include('admin.layouts.navbar') 
        <!-- Navbar -->
        <!-- Sidebar -->
        @include('admin.layouts.left_menu')
        <!-- Sidebar -->
    </header>
