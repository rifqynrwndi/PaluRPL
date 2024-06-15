                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2024 Teman Jasa Anda. All rights reserved. Palu</p>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ asset('admin/demo/app') }}/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{ asset('admin/demo/app') }}/assets/vendors/select2/select2.min.js"></script>
    <script src="{{ asset('admin/demo/app') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/demo/app') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
    <script>
        $(document).ready(function() {
            $('#data-table1').DataTable();
            $('#data-table2').DataTable();
            $('#data-table3').DataTable();
            $('#data-table4').DataTable();
    });
    </script>
    <script src="{{ asset('admin/demo/app') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('admin/demo/app') }}/assets/js/pages/dashboard-default.js"></script>

    <!-- Core JS -->
    <script src="{{ asset('admin/demo/app') }}/assets/js/app.min.js"></script>

</body>

</html>
