<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Linea - Creative Website Template</title>
        @include('layouts.student_head')
        @toastr_css
  </head>

    @yield('body')
    @include('layouts.student_footer')
    @toastr_js
    @toastr_render

</html>