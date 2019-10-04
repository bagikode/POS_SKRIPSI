        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">

            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Foodo Restaurant<i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url('assets/node_modules/raphael/raphael.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/morris.js/morris.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/chartist/dist/chartist.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/chart.js/dist/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/jvectormap/jquery-jvectormap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') ?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-pro/jquery/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 08:34:46 GMT -->
<script type="text/javascript">
// var jumlah_keseluruhan = $('#jumlah_keseluruhan').val();
// var bayar = parseInt($('#bayar').val());
// $('#jumlahseluruhnilai').val(jumlah_keseluruhan)
// $('#jumlahseluruhnilai').val(jumlah_keseluruhan)

$(document).ready(function () {

$("#bayar").on("keyup",function () {
var jumlah_keseluruhan = parseInt($('#jumlah_keseluruhan').val());
var bayar = parseInt($(this).val());

var kembali= bayar - jumlah_keseluruhan;
  $('#kembali').val(kembali)
})
})
//   $('#bayar').on("keyup",function(){
//     alert($(this.val())
// var jumlah_keseluruhan = parseInt($('#jumlah_keseluruhan').val());
// var bayar = parseInt($(this).val());

// var kembali= bayar - jumlah_keseluruhan;
//   $('#kembali').val(kembali)
//   })

</script>
</html>