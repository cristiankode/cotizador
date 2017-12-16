</div>
<!-- Despues de esto no borrar 				-->
<!-- /.content -->
<!-- /.content-wrapper -->
<!-- Main Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/footer_lte.php'); ?>
<!-- Control Sidebar -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/lateralder_lte.php'); ?>
</div>
<!-- ./wrapper -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/js.php'); ?>


<!--Scripts /js-->
<!--<script src="./public/js/jquery.js"></script>-->
<script src="./public/js/bootstrap.min.js"></script>
<script src="./public/js/jquery-ui.js"></script>
<script src="./public/js/jquery.dataTables.min.js"></script>
<!--<script src="./public/js/moment.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!--<script src="./public/js/range_dates.js"></script>-->
<script type="text/javascript" src="./public/js/fileinput.min.js"></script>
<script src='https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/datepicker/bootstrap-datepicker.js'></script>
<script src='https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/datepicker/locales/bootstrap-datepicker.es.js'></script>
<script src='https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/fullcalendar/fullcalendar.js'></script>
<script src='https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/fullcalendar/locale/es.js'></script>
<script src='https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/fullcalendar/locale-all.js'></script>
<script src="./public/js/funciones.js"></script>
<script>

	$(document).ready(function() {
		$('#calendar').fullCalendar({
			locale: 'es',
			weekNumbers: true
		});
	});

</script>
</body>
</html>