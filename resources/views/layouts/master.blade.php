<html>

<head>

    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('../css/bootstrap-rtl.css')}}">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Fontawesome-->
    <link rel="stylesheet" href="{{asset('../css/font/all.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Custom-->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">

</head>

<body>


{{--Navbar--}}
@include('include/header')




<div class="container-fluid ">
    <div class="row ">

        {{--List--}}
        @include('operationsManagement.include.sidebarMenu')
{{--        @include('pharmacovigilanceManagement.include.sidebarMenu')--}}


{{--                @if (auth()->user()->hasRole('operation_Management'))--}}
{{--                    @include('operationsManagement.include.sidebarMenu')--}}
{{--                @elseif (auth()->user()->hasRole('pharmacies_Management'))--}}
{{--                    @include('pharmacyManagement.include.sidebarMenu')--}}
{{--                @endif--}}



        {{--Content--}}
        @yield('content')



    </div>
</div>



<!--jquery and Bootstrap.js-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('2a20d077c5c580cae5c8', {
        cluster: 'ap1'
    });
</script>
<script src="{{asset('js/pusherNotifications.js')}}"></script>

@yield('save_ajax')
</body>
</html>
