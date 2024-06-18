<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Calon Peserta</title>
    @include('include.style');
</head>

<body>
    <div id="app">
        @include('include.sidebar.user.pendaftaran')
        <!-- content -->
        @include('include.content.user.pendaftaran')
    </div>
    @include('include.script')
</body>

</html>