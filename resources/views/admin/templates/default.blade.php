<!doctype html>
<html lang="en">

@include('admin.templates.partials._head')

<body>

    <div id="wrapper" class="admin-panel">

 @include('admin.templates.partials._sidebar')

        <!-- Header Container
        ================================================== -->
@include('admin.templates.partials._header')

        <!-- content -->
        <div class="page-content">
            <div class="page-content-inner pt-lg-0  pr-lg-0">


@yield('content')


@include('admin.templates.partials._footer')
            </div>
        </div>
@include('admin.templates.partials._scripts')

</body>

</html>
