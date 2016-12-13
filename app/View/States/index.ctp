<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Estados/Regiones'); ?></li>
	</ol>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel-body">
			<?= $this->Html->link(__('Nuevo'), array('action' => 'add'), array('class' => 'btn btn-primary')) ?>
		</div>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="states index">
					<div class="table-responsive"> 
						<table class="table table-hover" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
									<th><?php echo $this->Paginator->sort('name', 'Estado/Región'); ?></th>
									<th><?php echo $this->Paginator->sort('country_id', 'País'); ?></th>
									<th class="actions"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($states as $state): ?>
								<tr>
									<td><?php echo h($state['State']['id']); ?>&nbsp;</td>
									<td><?php echo h($state['State']['name']); ?>&nbsp;</td>
									<td>
										<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
									</td>
									<td class="actions">
										<?= $this->Html->link(__('<span class="glyphicon glyphicon-search" aria-hidden="true"></span>'), array('action' => 'view', $state['State']['id']), array('class' => 'btn btn-info', 'title' => 'Ver', 'escape' => false)) ?>
										<?= $this->Html->link(__('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'), array('action' => 'edit', $state['State']['id']), array('class' => 'btn btn-success', 'title' => 'Editar', 'escape' => false)) ?>
                                        <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'), array('action' => 'delete', $state['State']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $state['State']['name']), 'class' => 'btn btn-warning', 'title' => 'Eliminar', 'escape' => false)) ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<p class="text-paging">
						<?php echo $this->Paginator->counter(array('format' => __('Pag. {:page} de {:pages}, mostrando {:current} registros de un total de {:count}, empezando en el registro {:start}, finalizando en {:end}')));
						?>
					</p>
					<div class="paging">
						<?php
							echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
							echo $this->Paginator->numbers(array('separator' => ''));
							echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>