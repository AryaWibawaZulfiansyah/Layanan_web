<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Tasikmalaya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .menu-item {
            background-color: #A8CD9F;
            /* padding: 5px; */
            padding-bottom: 20px;
            border-radius: 5px;
            /* margin: 10px 0; */
            /* margin-right: 90px; */
            /* height: 130px;
            width: 130px; */
            /* right: 10px; */
            margin-bottom: 10px;
            text-align: center;
            transition: all 0.3s ease;

        }

        .menu-item a:link {
            color: #4C4F69;
            font-family: "Poppins", sans-serif;
        }

        .menu-item:hover {
            background-color: #a9d7a7;
            transform: translateY(-5px);
        }

        .menu-item i {
            align-items: center;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .menu-item svg {
            color: white;
        }

        .main-content {
            padding: 20px;
        }

        .login-card {
            max-width: 800px;
            /* margin: auto; */
        }
    </style>
    @include('include.style')
</head>

<body>
    <!-- Navbar -->
    @include('include.content.navbar')
    <div class="container-fluid" style="padding-left: 250px;">
        <div class="row mt-4">
            <!-- Left Menu Boxes -->
            @include('include.content.home.menu')
            <!-- Register -->
            @include('include.content.home.register')

        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('include.script')
</body>

</html>