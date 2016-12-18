<!--nav class="navbar navbar-inverse navbar-fixed-bottom">

	<div id="footer-sec">
	    &copy; CF 2016 | Diseñado por : <a href="http://www.google.com/" target="_blank">CrowFounding</a>
	</div>

</nav-->

<?= $this->Html->script('jquery-1.11.1.min') ?>
<?= $this->Html->script('bootstrap.min') ?>
<?= $this->Html->script('chart.min') ?>
<?= $this->Html->script('chart-data') ?>
<?= $this->Html->script('bootstrap-datepicker') ?>
<?= $this->Html->script('functions') ?>

<script>
	$( function() {
		$.fn.datepicker.defaults.format = "mm-dd-yyyy";
		$('#UserBirthdate').datepicker();
	  } );
</script>
