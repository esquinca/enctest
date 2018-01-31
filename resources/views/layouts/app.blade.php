<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.partials.admin_htmlheader')
<body class="fix-header">
    @include('layouts.partials.admin_preloader')
    <div id="wrapper">
      @include('layouts.partials.admin_navbar')
      @include('layouts.partials.admin_sidebar')
      <div id="page-wrapper">
        <div class="container-fluid">
          @include('layouts.partials.admin_breadcrumb')

          @yield('content')

          @include('layouts.partials.admin_ticket')
        </div>
        <footer class="footer text-center"> Pie de pagina </footer>
      </div>
    </div>
    @section('script')
      @include('layouts.partials.admin_scripts')
    @show
</body>
</html>
