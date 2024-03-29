<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logopwa.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @laravelPWA
</head>

<body>

    <div id="app">
        <!-- header -->
        @include('User.Layouts.header')

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="cards">
                        <div id="konten_halaman"></div>
                        {{-- navbar --}}
                        @include('User.Layouts.navbar')
                    </div>
                    {{-- footer --}}
                    @include('User.Layouts.footer')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var url = "{{ route('home') }}";

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(window).on('popstate', function() {
            var url = location.href;

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#halaman_home', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Home';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#halaman_registrasi', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Registrasi';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#halaman_riwayat', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Riwayat';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#halaman_profil', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Profil';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#halaman_informasi', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Informasi';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#mobile_home', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Home';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#mobile_registrasi', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Registrasi';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#mobile_riwayat', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Riwayat';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#mobile_profil', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Profile';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).on('click', '#mobile_informasi', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    $('#konten_halaman').html(data);
                    history.pushState({}, null, url);

                    $('.navbar .isi-menu a').removeClass('active');
                    $('.navbar .isi-menu a[href="' + url + '"]').addClass('active');

                    var newTitle = 'Informasi';
                    $('title').text(newTitle);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
        $(document).ajaxComplete(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'fast');
        });
    </script>
</body>

</html>
