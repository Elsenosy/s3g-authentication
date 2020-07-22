
@include('S3GAuthentication::layouts.header')
    <div class="admin">
        <div class="container-faluid">
            <div class="row">
                <!--***top nav***-->
                @include('S3GAuthentication::layouts.topnav')
                
                <!--***side nav***-->
                @include('S3GAuthentication::layouts.sidenav')

                <!--***body content***-->
                @yield('content')
            </div>
        </div>
    </div>
    </div>
    <!-- partial -->
    <script src="{{ asset('elsenosy/s3guthentication/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('elsenosy/s3guthentication/js/popper.min.js')}}"></script>
    <script src="{{ asset('elsenosy/s3guthentication/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js"></script>
    <script src="{{ asset('elsenosy/s3guthentication/js/main.js')}}"></script>
    @yield('js')
</body>

</html>
