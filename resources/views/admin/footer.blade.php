
</section> <!-- /.content-wrapper -->
</div><!-- /.main-wrapper -->
<style>
  h2#swal2-title {
    font-size: 18px;
}
.swal2-icon.swal2-success.swal2-icon-show {
    font-size: 17px;
}
.swal2-icon.swal2-error.swal2-icon-show {
    font-size: 16px;
}
</style>
{{-- <script src="{{url('assets/js/jquery.mask.min.js')}}"></script> --}}

{{-- <script src="{{url('assets/js/typeahead.jquery.js')}}"></script> --}}
<script src="{{url('assets/js/sweetalert.js')}}"></script>
<script src="{{url('assets/js/toaster.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{url('assets/js/bower.min.js')}}"></script>
<script src="{{url('assets/js/smooth-scroll.min.js')}}"></script>
{{-- <script src="{{url('assets/js/spectrum.min.js')}}"></script> --}}
<script src="{{url('assets/js/app.js')}}"></script>
{{-- <script src="{{url('assets/js/dropzone.min.js')}}"></script> --}}
<script src="{{url('assets/js/demo-formElements.js')}}"></script>

<script>
	// Toast
var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
});

function notify(flag,msg){
  if(flag==1){
  Toast.fire({
    icon: 'success',
    title: msg
  })
}else{
   Toast.fire({
    icon: 'error',
    title: msg
  })
}
}
</script>
@yield('footer')

</body>
</html>