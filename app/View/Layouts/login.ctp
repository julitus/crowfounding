<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('datepicker3');
		echo $this->Html->css('styles');

		echo $this->Html->script('lumino.glyphs');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					<?php echo $this->Flash->render('auth'); ?>
					<?php echo $this->Form->create('Admin'); ?>
					    <fieldset>
					        <?php echo $this->Form->input('email', array('div' => 'form-group', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Correo Electrónico'));
					        echo $this->Form->input('password', array('div' => 'form-group', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña'));
					    ?>
					    <div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Recordar Contraseñas
							</label>
						</div>
						<?= $this->Form->button(__('Ingresar'), array('class' => 'btn btn-primary')) ?>
					    </fieldset>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<?= $this->Html->script('jquery-1.11.1.min') ?>
	<?= $this->Html->script('bootstrap.min') ?>
	<?= $this->Html->script('chart.min') ?>
	<?= $this->Html->script('chart-data') ?>
	<?= $this->Html->script('bootstrap-datepicker') ?>
	<?= $this->Html->script('functions') ?>		

	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
