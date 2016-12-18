<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Administradores'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="admins form">
					<?php echo $this->Form->create('Admin'); ?>
						<legend><?php echo __('Add Admin'); ?></legend>
						<?php
							echo $this->Form->input('email', array('div' => 'form-group', 'label' => 'Correo Electrónico', 'class' => 'form-control'));
							echo $this->Form->input('password', array('div' => 'form-group', 'label' => 'Contraseña', 'class' => 'form-control'));
							echo $this->Form->input('re-password', array('div' => 'form-group', 'label' => 'Confirmar Contraseña', 'class' => 'form-control', 'type' => 'password'));
						?>
						<?= $this->Form->button('Guardar', array('class' => 'btn btn-primary')); ?>
                        <?= $this->Html->link(__('Cancelar'), array('action' => 'index'), array('class' => 'btn btn-warning')) ?>
					<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
