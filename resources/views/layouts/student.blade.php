<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Dashboard</title>
          @include('layouts.student_head')
          @toastr_css
</head>
    
    @yield('body')
    @include('layouts.student_footer')
    @toastr_js
    @toastr_render

</html>