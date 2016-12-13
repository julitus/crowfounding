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
					<div class="users view">
					<h3><?php echo h($user['User']['email']); ?></h3>
						<dl>
							<dt class="th-class"><?php echo __('Nombres'); ?></dt>
							<dd>
								<?php echo h($user['User']['first_name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Apellidos'); ?></dt>
							<dd>
								<?php echo h($user['User']['last_name']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Correo Electrónico'); ?></dt>
							<dd>
								<?php echo h($user['User']['email']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Teléfono'); ?></dt>
							<dd>
								<?php echo h($user['User']['phone']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Dirección'); ?></dt>
							<dd>
								<?php echo h($user['User']['address']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Fecha de Nacimiento'); ?></dt>
							<dd>
								<?php echo h($user['User']['birthdate']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Imágen'); ?></dt>
							<dd>
								<?php echo h($user['User']['file']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Facebook'); ?></dt>
							<dd>
								<?php echo h($user['User']['facebook']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Twitter'); ?></dt>
							<dd>
								<?php echo h($user['User']['twitter']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Youtube'); ?></dt>
							<dd>
								<?php echo h($user['User']['youtube']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('País'); ?></dt>
							<dd>
								<?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Estado/Región'); ?></dt>
							<dd>
								<?php echo $this->Html->link($user['State']['name'], array('controller' => 'states', 'action' => 'view', $user['State']['id'])); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Ciudad'); ?></dt>
							<dd>
								<?php echo $this->Html->link($user['City']['name'], array('controller' => 'cities', 'action' => 'view', $user['City']['id'])); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Activo'); ?></dt>
							<dd>
								<?php echo h($user['User']['active']) ? 'Si' : 'No'; ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Creado'); ?></dt>
							<dd>
								<?php echo h($user['User']['created']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Modificado'); ?></dt>
							<dd>
								<?php echo h($user['User']['modified']); ?>
								&nbsp;
							</dd>
						</dl>
						<?= $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-success')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $user['User']['email']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
