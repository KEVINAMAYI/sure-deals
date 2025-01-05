<!doctype html>
<html lang="en">

<head>

    <base href="{{ URL::to('/') }}"/>
    <meta charset="utf-8"/>
    <title>SURE DEALS LTD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>

    <link rel="stylesheet" href="{{ asset('build/assets/dashboard-DcJAaK_G.css') }}">

{{--    @vite('resources/css/dashboard.css')--}}

    @stack('css')

</head>

<body>
<div id="layout-wrapper">

    <livewire:layout.dashboard.header/>

    <livewire:layout.dashboard.sidebar/>

    {{ $slot }}

    <livewire:layout.dashboard.rightbar/>

</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<script data-navigate-once  src="dashboard/libs/jquery/jquery.min.js"></script>
<script data-navigate-once  src="dashboard/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dashboard/libs/metismenu/metisMenu.min.js"></script>
<script src="dashboard/libs/simplebar/simplebar.min.js"></script>
<script src="dashboard/libs/node-waves/waves.min.js"></script>
<script src="dashboard/libs/feather-icons/feather.min.js"></script>

<!-- pace js -->
<script src="dashboard/libs/pace-js/pace.min.js"></script>

<!-- apexcharts -->
<script src="dashboard/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="dashboard/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="dashboard/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>



<script src="dashboard/libs/dropzone/min/dropzone.min.js"></script>

<!-- choices js -->
<script src="dashboard/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- sweet alert js -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- data tables -->
<script src="dashboard/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="dashboard/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- data tables buttons -->
<script  src="dashboard/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="dashboard/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="dashboard/libs/jszip/jszip.min.js"></script>
<script src="dashboard/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="dashboard/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="dashboard/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="dashboard/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="dashboard/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="dashboard/js/app.js"></script>

<script data-navigate-once>
    document.addEventListener("livewire:navigated", function () {
        // Destroy any existing DataTable instances to avoid reinitialization conflicts
        if ($.fn.dataTable.isDataTable("#categories_table")) {
            $("#categories_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#products_table")) {
            $("#products_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#staff_table")) {
            $("#staff_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#variations_table")) {
            $("#variations_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#roles_table")) {
            $("#roles_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#deals_table")) {
            $("#deals_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#customers_table")) {
            $("#customers_table").DataTable().destroy();
        }
        if ($.fn.dataTable.isDataTable("#customers_table")) {
            $("#callbacks_table").DataTable().destroy();
        }

        // Reinitialize DataTables after destruction
        $("#categories_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#categories_table_wrapper .col-md-6:eq(0)");

        $("#products_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#products_table_wrapper .col-md-6:eq(0)");

        $("#staff_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#staff_table_wrapper .col-md-6:eq(0)");

        $("#variations_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#variations_table_wrapper .col-md-6:eq(0)");

        $("#roles_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#roless_table_wrapper .col-md-6:eq(0)");

        $("#deals_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#dealss_table_wrapper .col-md-6:eq(0)");

        $("#customers_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#customers_table_wrapper .col-md-6:eq(0)");

        $("#callbacks_table").DataTable({
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "colvis"]
        }).buttons().container().appendTo("#customers_table_wrapper .col-md-6:eq(0)");

        // Apply the select style after initializing DataTables
        $(".dataTables_length select").addClass("form-select form-select-sm");
    });
</script>



<!-- init js -->
@stack('js')

<x-livewire-alert::scripts/>


</body>

</html>
