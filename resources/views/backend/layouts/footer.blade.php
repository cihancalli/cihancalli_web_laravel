</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="https://zerdasoftware.com/" target="_blank">Zerda Software</a> {{ \Carbon\Carbon::now()->format('d M Y') }}</span>
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
                <a class="btn btn-primary" href="{{route('admin.logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{route('homepage')}}/backend/vendor/jquery/jquery.min.js"></script>
<script src="{{route('homepage')}}/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{route('homepage')}}/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{route('homepage')}}/backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{route('homepage')}}/backend/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{route('homepage')}}/backend/js/demo/chart-area-demo.js"></script>
<script src="{{route('homepage')}}/backend/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="{{route('homepage')}}/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{route('homepage')}}/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{route('homepage')}}/backend/js/demo/datatables-demo.js"></script>
@yield('summernoteJS')

</body>

</html>
