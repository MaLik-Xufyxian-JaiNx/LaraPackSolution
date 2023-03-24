@include('layouts.partials.header')

<body id="page-top">
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.partials.navbar')


                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    @yield('content')

                </div>
                <!---Container Fluid-->
            </div>

            @include('layouts.partials.footer')
