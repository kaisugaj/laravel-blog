<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 80vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 110px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 50px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        section h1 {
            font-size: 30px;
            text-align: center;
            margin: 5% 15% 20px 15%;
            padding-bottom: 2%;
            border-bottom: 2px solid black;
        }

        footer ul {
            width: 120%;
            list-style: none;
            padding: 5%;
            text-decoration: none;
        }

        footer ul li {
            float: left;
            width: 30%;
            font-weight: bold;
        }

        footer ul li ul {
            padding: 5%;
            float: left;
        }

        footer ul li ul li {
            float: none;
            padding: 5px 0;
            font-weight: normal;
        }

        footer a {
            color: black;
            text-decoration: none;
            text-align: center;
            font-size: 100%;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent
        }

        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6
        }

        .table .table {
            background-color: #f8fafc
        }

        .table-sm td, .table-sm th {
            padding: .3rem
        }

        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6
        }

        .table-bordered thead td, .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-borderless tbody + tbody, .table-borderless td, .table-borderless th, .table-borderless thead th {
            border: 0
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-primary, .table-primary > td, .table-primary > th {
            background-color: #c6e0f5
        }

        .table-hover .table-primary:hover, .table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
            background-color: #b0d4f1
        }

        .table-secondary, .table-secondary > td, .table-secondary > th {
            background-color: #d6d8db
        }

        .table-hover .table-secondary:hover, .table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
            background-color: #c8cbcf
        }

        .table-success, .table-success > td, .table-success > th {
            background-color: #c7eed8
        }

        .table-hover .table-success:hover, .table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
            background-color: #b3e8ca
        }

        .table-info, .table-info > td, .table-info > th {
            background-color: #d6e9f9
        }

        .table-hover .table-info:hover, .table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
            background-color: #c0ddf6
        }

        .table-warning, .table-warning > td, .table-warning > th {
            background-color: #fffacc
        }

        .table-hover .table-warning:hover, .table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
            background-color: #fff8b3
        }

        .table-danger, .table-danger > td, .table-danger > th {
            background-color: #f7c6c5
        }

        .table-hover .table-danger:hover, .table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
            background-color: #f4b0af
        }

        .table-light, .table-light > td, .table-light > th {
            background-color: #fdfdfe
        }

        .table-hover .table-light:hover, .table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
            background-color: #ececf6
        }

        .table-dark, .table-dark > td, .table-dark > th {
            background-color: #c6c8ca
        }

        .table-hover .table-dark:hover, .table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
            background-color: #b9bbbe
        }

        .table-active, .table-active > td, .table-active > th, .table-hover .table-active:hover, .table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table .thead-dark th {
            color: #f8fafc;
            background-color: #212529;
            border-color: #32383e
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .table-dark {
            color: #f8fafc;
            background-color: #212529
        }

        .table-dark td, .table-dark th, .table-dark thead th {
            border-color: #32383e
        }

        .table-dark.table-bordered {
            border: 0
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: hsla(0, 0%, 100%, .05)
        }

        .table-dark.table-hover tbody tr:hover {
            background-color: hsla(0, 0%, 100%, .075)
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }

            .table-responsive-sm > .table-bordered {
                border: 0
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }

            .table-responsive-md > .table-bordered {
                border: 0
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }

            .table-responsive-lg > .table-bordered {
                border: 0
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar
            }

            .table-responsive-xl > .table-bordered {
                border: 0
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive > .table-bordered {
            border: 0
        }
    </style>

<body>
<div class="container">
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
