<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 cuả An để build CRUD Operation </title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}" type = "text/css">
</head>
<body>
    <script src = "{{asset ('js/app.js') }}" type = "text/js"></script>
    <div class = "container">
        @yield('main')
        <!--không có gía trị default, 
        có nghĩa là nếu lớp con không thực hiện extend phần content thì sẽ không có gì hiển thị cả-->
    </div>
</body>
</html>