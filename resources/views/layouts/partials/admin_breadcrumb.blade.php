<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">@yield('contentheader_title', 'Page Header here')</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        <ol class="breadcrumb">
            <li><a href="home">@yield('breadcrumb_title', 'Inicio')</a></li>
            <li class="active">@yield('breadcrumb_ubication')</li>
        </ol>
    </div>
</div>
