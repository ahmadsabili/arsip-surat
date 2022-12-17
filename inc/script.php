<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/app.init.horizontal.js"></script>
<script src="dist/js/app-style-switcher.horizontal.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!--This page plugins -->
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="dist/js/pages/datatable/datatable-basic.init.js"></script>

<?php if ($page == 'edit-surat-masuk' || $page == 'edit-surat-keluar') : ?>
<script src="inc/js/edit-button-surat-masuk.js"></script>
<?php endif; ?>

<?php if ($page == 'tambah-user') : ?>
<script src="inc/js/password-confirmation.js"></script>
<?php endif; ?>