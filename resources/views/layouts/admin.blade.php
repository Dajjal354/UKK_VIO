<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Welcome {{ Auth::user()->name }}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Master
        </div>

        <!-- Nav Item - Keahlian Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeahlian"
                aria-expanded="true" aria-controls="collapseKeahlian">
                <i class="fas fa-fw fa-cog"></i>
                <span>Keahlian</span>
            </a>
            <div id="collapseKeahlian" class="collapse" aria-labelledby="headingKeahlian" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Keahlian:</h6>
                    <a class="collapse-item" href="{{ route('admin.bidang-keahlian.index') }}">
                        <i class="fas fa-fw fa-book mr-1"></i>Bidang Keahlian
                    </a>
                    <a class="collapse-item" href="{{ route('admin.program-keahlian.index') }}">
                        <i class="fas fa-fw fa-bookmark mr-1"></i>Program Keahlian
                    </a>
                    <a class="collapse-item" href="{{ route('admin.konsentrasi-keahlian.index') }}">
                        <i class="fas fa-fw fa-tag mr-1"></i>Konsentrasi Keahlian
                    </a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Tahun Lulus -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.tahun-lulus.index') }}">
                <i class="fas fa-fw fa-calendar-alt"></i>
                <span>Tahun Lulus</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('partialsAdmin.navbar')
                
               @yield('content')

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-log-out">
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                            class="text-light"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>

   <!-- Vendor scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages -->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

<script type="module">
    import UserRegistryChart from '/js/registry-chart.js';

    document.addEventListener('DOMContentLoaded', async () => {
        const chart = new UserRegistryChart();
        await chart.init();

        // Perbarui chart setiap 5 menit
        setInterval(() => chart.updateChart(), 300000);
    })
</script>

<style>
/* Previous theme variables and base styles remain... */

/* Right-aligned Sidebar Layout Modifications */
#wrapper {
  flex-direction: row-reverse;
}

/* Sidebar Positioning */
.sidebar {
  right: 0;
  left: auto;
  border-right: none;
  border-left: 1px solid rgba(139, 92, 246, 0.2);
}

/* Content Wrapper Adjustments */
#content-wrapper {
  margin-right: 0;
  margin-left: 0;
}

/* Sidebar Toggle Button */
.sidebar.toggled {
  margin-right: -14rem;
}

/* Adjust Dropdown Menus */
.dropdown-menu {
  left: auto;
  right: 0;
}

/* Transform Hover Effects */
.sidebar .nav-item:hover {
  transform: translateX(-5px) !important;
}

.collapse-inner .collapse-item:hover {
  transform: translateX(-5px) !important;
}

/* Adjust Sidebar Content Alignment */
.sidebar .sidebar-brand,
.sidebar .nav-item .nav-link,
.sidebar-heading {
  text-align: right;
}

.sidebar .nav-item .nav-link i {
  margin-right: 0;
  margin-left: 0.5rem;
}

/* Adjust Collapse Menu */
.collapse-inner {
  margin-right: 1rem;
  margin-left: 1rem;
}

/* Adjust Divider Gradient */
.sidebar-divider {
  background: linear-gradient(-90deg, transparent, var(--accent-color), transparent);
}

/* Adjust Heading Line */
.sidebar-heading::after {
  right: 1.5rem;
  left: auto;
}

/* Responsive Adjustments */
@media (min-width: 768px) {
  .sidebar.toggled {
    overflow: visible;
    width: 6.5rem !important;
    margin-right: 0;
  }

  .sidebar.toggled .nav-item .nav-link {
    text-align: center;
    padding: 1rem;
  }

  .sidebar.toggled .nav-item .nav-link i {
    margin-left: 0;
    font-size: 1.25rem;
  }
}

/* Topbar Adjustments */
.topbar {
  padding-right: 0;
  padding-left: 0;
}

/* Scroll to Top Button Adjustment */
.scroll-to-top {
  right: auto;
  left: 1rem;
}
</style>
</body>

</html>
