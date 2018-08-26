  <!-- Main Footer -->
  <footer class="main-footer" style="text-align:center">

    <!-- Default to the left -->
    <strong> تصميم وتطوير شركة <a href="http://www.dp-itc.com/">{{ trans('language.Development Possibilitise') }}</a> &copy; 2018  ، جميع الحقوق محفوظة </strong>
  </footer>

<!-- ./wrapper -->







<!--====================================================================================================================================================-->
<!-- REQUIRED JS SCRIPTS -->
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<!-- jQuery 3 -->
{{--  <script src="{{ asset('/design/bower_components/jquery/dist/jquery.min.js')}}"></script>  --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/design/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/design/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('/design/bower_components/raphael/raphael.min.js')}}"></script>
{{--  <script src="{{ asset('/design/bower_components/morris.js/morris.min.js')}}"></script>  --}}
<!-- Sparkline -->
<script src="{{ asset('/design/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('/design/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('/design/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/design/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/design/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('/design/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('/design/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/design/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('/design/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/design/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/design/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--  <script src="{{ asset('/design/dist/js/pages/dashboard.js')}}"></script>  --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/design/dist/js/demo.js')}}"></script>

<script src="{{ asset('/design/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/design/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>

    $(document).on('click','#buttonSubmit', function(e){
      
      alert('done');
      var form = $('#form').serialize();
      var url = $('#form').attr('action');

      $.ajax({
        url:url,
        data:form,
        type:'post',
      });
      
    });

      




</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>