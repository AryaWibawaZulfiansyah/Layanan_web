<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('include.style');
</head>

<body>
    <div id="app">
        @include('include.sidebar.admin.datasiswa')
        <!-- content -->
        @include('include.content.admin.datasiswa')
    </div>
    @include('include.script')
</body>

</html>