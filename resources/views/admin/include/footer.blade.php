<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2021 <a href="index-2.html#">Devant IT Solution</a>. 
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->		</div><!-- End Page -->
			<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

		<!-- Jquery js-->
		<script src="{{asset('public/admin/')}}/assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="{{asset('public/admin/')}}/assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Sidemenu js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/sidemenu/sidemenu.js"></script>
		
		<!-- P-scroll js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scroll1.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scroll.js"></script>

		
		<!--INTERNAL Peitychart js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/peitychart/peitychart.init.js"></script>

		<!--INTERNAL Apexchart js-->
		<script src="{{asset('public/admin/')}}/assets/js/apexcharts.js"></script>

		<!--INTERNAL ECharts js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/echarts/echarts.js"></script>

		<!--INTERNAL Chart js -->
		<script src="{{asset('public/admin/')}}/assets/plugins/chart/chart.bundle.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/chart/utils.js"></script>

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('public/admin/')}}/assets/plugins/select2/select2.full.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/js/select2.js"></script>

		<!--INTERNAL Moment js-->
		<script src="{{asset('public/admin/')}}/assets/plugins/moment/moment.js"></script>

		<!--INTERNAL Index js-->
		<script src="{{asset('public/admin/')}}/assets/js/index1.js"></script>

		<!-- Simplebar JS -->
		<script src="{{asset('public/admin/')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
		<!-- Custom js-->
		<script src="{{asset('public/admin/')}}/assets/js/custom.js"></script>

		
		<script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

		<!-- Switcher js-->
		<script src="{{asset('public/admin/')}}/assets/switcher/js/switcher.js"></script>

		<!-- INTERNAL WYSIWYG Editor js -->
		<script src="{{asset('public/admin/')}}/assets/plugins/wysiwyag/jquery.richtext.js"></script>
		<script src="{{asset('public/admin/')}}/assets/js/form-editor.js"></script>

		<!-- INTERNAL quill js -->
		<script src="{{asset('public/admin/')}}/assets/plugins/quill/quill.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/js/form-editor2.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scroll1.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/p-scrollbar/p-scroll.js"></script>
		<!-- INTERNAL Data tables -->
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/plugins/datatable/responsive.bootstrap4.min.js"></script>
		<script src="{{asset('public/admin/')}}/assets/js/datatables.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer">
@if(Session::has('msg'))
                        <script type="text/javascript">
                            swal("Good job!","Updated", "success");
                        </script>
                                    
			@endif
		 
			<script>
				function img_pathUrl(input){
					$('#img_url').show();
				$('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
			   }

		</body>
</html>
		