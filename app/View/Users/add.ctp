<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Usuarios'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-6">
					<div class="users form">
					<?php echo $this->Form->create('User'); ?>
						<legend><?php echo __('Agregar Usuario'); ?></legend>
						<?php
							echo $this->Form->input('first_name', array('div' => 'form-group', 'label' => 'Nombres', 'class' => 'form-control'));
							echo $this->Form->input('last_name', array('div' => 'form-group', 'label' => 'Apellidos', 'class' => 'form-control'));
							echo $this->Form->input('email', array('div' => 'form-group', 'label' => 'Correo Electrónico', 'class' => 'form-control'));
							echo $this->Form->input('password', array('div' => 'form-group', 'label' => 'Contraseña', 'class' => 'form-control'));
							echo $this->Form->input('re-password', array('div' => 'form-group', 'label' => 'Confirmar Contraseña', 'class' => 'form-control'));
							echo $this->Form->input('phone', array('div' => 'form-group', 'label' => 'Teléfono', 'class' => 'form-control'));
							echo $this->Form->input('address', array('div' => 'form-group', 'label' => 'Dirección', 'class' => 'form-control'));
							echo $this->Form->input('country_id', array('div' => 'form-group', 'label' => 'País', 'class' => 'form-control', 'empty' => '-- Seleccione País --'));
							echo $this->Form->input('state_id', array('div' => 'form-group', 'label' => 'Estado/Región', 'class' => 'form-control', 'empty' => '-- Seleccione Estado/Región --'));
							echo $this->Form->input('city_id', array('div' => 'form-group', 'label' => 'Ciudad', 'class' => 'form-control', 'empty' => '-- Seleccione Ciudad --'));
						?>
						<div class="form-group checkbox">
							<label>
						<?php
							echo $this->Form->checkbox('active', array('value' => true, 'checked'));
						?>
							Activo?
							</label>
						</div>
						<?= $this->Form->button('Guardar', array('class' => 'btn btn-primary')); ?>
                        <?= $this->Html->link(__('Cancelar'), array('action' => 'index'), array('class' => 'btn btn-warning')) ?>
					<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>