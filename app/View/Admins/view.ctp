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
				<div class="col-md-">
					<div class="admins view">
					<h3><?php echo h($admin['Admin']['email']); ?></h3>
						<dl>
							<dt class="th-class"><?php echo __('Correo Electrónico'); ?></dt>
							<dd>
								<?php echo h($admin['Admin']['email']); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Creado'); ?></dt>
							<dd>
								<?php echo h(date("d-m-Y h:i:s A", strtotime($admin['Admin']['created']))); ?>
								&nbsp;
							</dd>
							<dt class="th-class"><?php echo __('Modificado'); ?></dt>
							<dd>
								<?php echo h(date("d-m-Y h:i:s A", strtotime($admin['Admin']['modified']))); ?>
								&nbsp;
							</dd>
						</dl>
                        <?= $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $admin['Admin']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $admin['Admin']['email']), 'class' => 'btn btn-warning')) ?>
                        <?= $this->Html->link(__('Ir a Lista'), array('action' => 'index'), array('class' => 'btn btn-info')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>.
