<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head><!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FirstReach Logistics Admin Login</title>
    <!-- Title-->

    <link rel="icon" href="{{ "" }}" type="image/x-icon">

    <!-- Style Css -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{asset("build/assets/app-CGGva2Fh.css")}}">
    <script src="{{asset("build/assets/app-CvSG40sc.js")}}"></script>
    <link href="{{ asset('dist/admin/assets/css/styles.css') }}" rel="stylesheet">

    <!-- End styles -->


</head>

<body class="authentication-background">

    {{ $slot }}
    <script src="{{ asset('dist/admin/assets/js/show-password.js') }}"></script> <!-- End::main-scripts -->
</body>
</html>
