<?php 
	$getStates = Router::url(array('controller'=>'Users','action'=>'getStates'));
	$getCities = Router::url(array('controller'=>'Users','action'=>'getCities'));
?>
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
				<div class="col-md-12">
					<div class="users form">
					<?php echo $this->Form->create('User'); ?>
						<legend><?php echo __('Editar Usuario'); ?></legend>
						<div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('first_name', array('div' => 'form-group', 'label' => 'Nombres', 'class' => 'form-control'));
							echo $this->Form->input('last_name', array('div' => 'form-group', 'label' => 'Apellidos', 'class' => 'form-control'));
							echo $this->Form->input('email', array('div' => 'form-group', 'label' => 'Correo Electrónico', 'class' => 'form-control'));
							echo $this->Form->input('phone', array('div' => 'form-group', 'label' => 'Teléfono', 'class' => 'form-control'));
							echo $this->Form->input('address', array('div' => 'form-group', 'label' => 'Dirección', 'class' => 'form-control'));
							echo $this->Form->input('birthdate', array('div' => 'form-group', 'label' => 'Fecha de Nacimiento', 'class' => 'form-control', 'type'=>'text'));
						?>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
						<?php
							echo $this->Form->input('facebook', array('div' => 'form-group', 'label' => 'Facebook', 'class' => 'form-control'));
							echo $this->Form->input('twitter', array('div' => 'form-group', 'label' => 'Twitter', 'class' => 'form-control'));
							echo $this->Form->input('youtube', array('div' => 'form-group', 'label' => 'Youtube', 'class' => 'form-control'));
							echo $this->Form->input('country_id', array('div' => 'form-group', 'label' => 'País', 'class' => 'form-control', 'empty' => '-- Seleccione País --', 'onchange'=>"getStates('$getStates', '');"));
							echo $this->Form->input('state_id', array('div' => 'form-group', 'label' => 'Estado/Región', 'class' => 'form-control', 'empty' => '-- Seleccione Estado/Región --', 'onchange'=>"getCities('$getCities', '');"));
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
							</div>
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