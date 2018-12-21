
   <script src="vendor/jquery/jquery.min.js">

        </script>
        <script src="assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>  
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/popper/popper.min.js">
        </script>
        <script src="assets/js/material.min.js"></script>
        <script src="assets/js/bootstrap-material-design.js"></script>
        </script>
        <script src="vendor/moment/moment.min.js">
        </script>
        <script src="vendor/font-awesome/all.min.js">
        </script>
        <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="vendor/boostrap-datetimepicker/bootstrap-datetimepicker.js">
        </script>
        <script src="assets/js/jasny-bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/bootstrap-tagsinput.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="vendor/nouislider/nouislider.min.js">
        </script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        
        
		<script src="assets/js/cerrar_modales.js"></script>
		<script src="assets/js/date.js"></script>
		<script src="assets/js/cargar_iconos_cursos.js"></script>

	<!-- Plugin For Google Maps -->
	 



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	 
	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="assets/assets-for-demo/modernizr.js" type="text/javascript"></script>
	<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			var slider = document.getElementById('sliderRegular');

	        noUiSlider.create(slider, {
	            start: 40,
	            connect: [true,false],
	            range: {
	                min: 0,
	                max: 100
	            }
	        });

	        var slider2 = document.getElementById('sliderDouble');

	        noUiSlider.create(slider2, {
	            start: [ 20, 60 ],
	            connect: true,
	            range: {
	                min:  0,
	                max:  100
	            }
	        });



			materialKit.initFormExtendedDatetimepickers();

		});
	</script>