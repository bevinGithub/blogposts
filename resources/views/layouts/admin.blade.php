<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.head')
    </head>
    <body>

        <!-- TOP BAR -->
        <div id="top-bar">
            @include('admin.includes.topbar')
        </div> <!-- end top-bar -->

        <!-- HEADER -->
        <div id="header-with-tabs">	
            @include('admin.includes.tabs')
        </div> <!-- end header -->



        <!-- MAIN CONTENT -->
        <div id="content">
            <div class="page-full-width cf">
                <div class="side-menu fl">				
                    <h3>Side Menu</h3>
                    @include('admin.includes.sidebar')				
                </div>
                <!-- end side-menu -->

                <div class="side-content fr">
                    @yield('content')
                </div> <!-- end side-content -->

            </div> <!-- end full-width -->
        </div> <!-- end content -->

        <!-- FOOTER -->
        <div id="footer">
            @include('admin.includes.footer')	
        </div> <!-- end footer -->

    </body>
</html>