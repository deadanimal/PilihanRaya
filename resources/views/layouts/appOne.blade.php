<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My Undian is an advanced poll analytics">
    <meta name="author" content="My Undian">
    <link href="https://pipeline.com.my/assets/img/pipe-favicon.png" rel="icon">
    <link href="https://pipeline.com.my/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>My Undian</title>

    <link href="{{ URL::asset('css/modern.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    @yield('styles')
</head>

<body>

    <div class="py-3 bg-white landing-nav">
        <div class="container text-center">
            <a href="/" class="btn btn-lg btn-pill btn-link text-dark">MyUndian</a>
            <a href="/berita" class="btn btn-lg btn-pill btn-link text-dark">Berita</a>
            <a href="/calon" class="btn btn-lg btn-pill btn-link text-dark">Calon</a>
            <a href="/tinjauan" class="btn btn-lg btn-pill btn-link text-dark">Tinjauan</a>
        </div>
    </div>

    @yield('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



    @yield('script')


    <script>
        // Initialize the agent at application startup.
        const fpPromise = import('https://fpcdn.io/v3/1M63oPQwAnl9pjZ9MXal')
            .then(FingerprintJS => FingerprintJS.load({
                region: "ap"
            }))

        // Get the visitor identifier when you need it.
        fpPromise
            .then(fp => fp.get())
            .then(result => {
                // This is the visitor identifier:
                const visitorId = result.visitorId
                console.log(visitorId)
            })
    </script>








</body>

</html>
