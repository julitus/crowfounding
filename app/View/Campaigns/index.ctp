<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active"><?php echo __('Paises'); ?></li>
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
				<div class="campaigns index">
					<div class="table-responsive"> 
						<table class="table table-hover" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
									<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
									<th><?php echo $this->Paginator->sort('money_goal', 'Monto Objetivo'); ?></th>
									<th><?php echo $this->Paginator->sort('money_now', 'Monto Recaudado'); ?></th>
									<th><?php echo $this->Paginator->sort('status', 'Estado'); ?></th>
									<th><?php echo $this->Paginator->sort('begin_date', 'Inicio'); ?></th>
									<th><?php echo $this->Paginator->sort('end_date', 'Fin'); ?></th>
									<th><?php echo $this->Paginator->sort('country_id', 'País'); ?></th>
									<th><?php echo $this->Paginator->sort('category_id', 'Categoria'); ?></th>
									<th class="actions"><?php echo __('Acciones'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($campaigns as $campaign): ?>
								<tr>
									<td><?php echo h($campaign['Campaign']['id']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['name']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['money_goal']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['money_now']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['status']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['begin_date']); ?>&nbsp;</td>
									<td><?php echo h($campaign['Campaign']['end_date']); ?>&nbsp;</td>
									<td>
										<?php echo $this->Html->link($campaign['Country']['name'], array('controller' => 'countries', 'action' => 'view', $campaign['Country']['id'])); ?>
									</td>
									<td>
										<?php echo $this->Html->link($campaign['Category']['name'], array('controller' => 'categories', 'action' => 'view', $campaign['Category']['id'])); ?>
									</td>
									<td class="actions">
										<?= $this->Html->link(__('<span class="glyphicon glyphicon-search" aria-hidden="true"></span>'), array('action' => 'view', $campaign['Campaign']['id']), array('class' => 'btn btn-info', 'title' => 'Ver', 'escape' => false)) ?>
										<?= $this->Html->link(__('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>'), array('action' => 'edit', $campaign['Campaign']['id']), array('class' => 'btn btn-success', 'title' => 'Editar', 'escape' => false)) ?>
                                        <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'), array('action' => 'delete', $campaign['Campaign']['id']), array('confirm' => __('¿Estas seguro que quieres eliminar el registro # %s?', $campaign['Campaign']['name']), 'class' => 'btn btn-warning', 'title' => 'Eliminar', 'escape' => false)) ?>
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