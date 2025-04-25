<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <!-- CSS -->
<link rel="stylesheet" href="/node_modules/admin-lte/dist/css/adminlte.min.css">
<link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

<!-- JS -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/node_modules/admin-lte/dist/js/adminlte.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    @vite("resources/scss/app.scss")
    @vite("resources/js/app.js")

  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        @include('Admin.layout.navbar')
        @include('Admin.layout.slidebar')

              <main class="app-main">
            @yield('content')
              </main>
              @include('Admin.layout.footer')
    
    </div>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
