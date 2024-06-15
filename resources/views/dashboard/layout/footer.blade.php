                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2024 Teman Jasa Anda. All rights reserved. Palu</p>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->


            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
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
