@include('admin.layouts.head')

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('assets/admin/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!--  BEGIN SIDEBAR  -->
        @include('admin.layouts.sidebar')
        <!--  END SIDEBAR  -->
        <div class="page-wrapper">
            <!-- BEGIN PAGE HEAD -->
            @include('admin.layouts.header')
            <!-- END PAGE HEAD -->

            <!-- BEGIN PAGE BODY -->
            <div class="page-body">
                @yield('content')
            </div>
            <!-- END PAGE BODY -->
            <!--  BEGIN FOOTER  -->
            @include('admin.layouts.footer')
            <!--  END FOOTER  -->
        </div>
    </div>

    @include('admin.layouts.modal')
</body>

</html>