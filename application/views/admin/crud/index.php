<?php if (!$this->input->is_ajax_request()) include_once(dirname(__FILE__) . '/../header.php'); ?>

<div class="page-header">
    <?php if (isset($acoes_controller)): ?>
        <?php foreach ($acoes_controller as $acao_extra): ?>
            <a href="<?= site_url($acao_extra['url']); ?>" class="btn <?= $acao_extra['class']; ?> btn-sm"><?= $acao_extra['title']; ?></a>
        <?php endforeach; ?>
    <?php endif; ?>

    <h1><?= ucfirst($titulo) ?>
    <?php if (in_array('C', $crud)): ?>
        <a href="<?= $url ?>/novo" class="btn btn-primary btn-sm">Cadastrar Novo</a>
    <?php endif ?>
    </h1>


</div>
<div class="row">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            <?php if ($this->campos_busca): ?>
                    <form method="post" class="form-inline filtro" action="<?php echo $url; ?>/listar">
                        <fieldset>
                        	<div class="containner-moblie-seach visible-xs ">
                        		<p>
	                        		<button class="btn btn-info" type="button">
		                        		<span class=" ace-icon fa fa-search"></span>                        	
	                        		</button>
                        		</p>
                        	</div>
                        	<div class="hidden-xs">
	                            <?php foreach ($camposBusca as $name): ?>
	                                <?php if ($this->model->fields[$name]['type'] == 'select'): ?>
		                                <select name="<?php echo $name ?>" class="form-control input-sm">
		                                    <?php foreach ($this->model->fields[$name]['values'] as $key => $val): ?>
		                                    	<option value="<?php echo $key ?>" <?php echo ((isset($this->model->fields[$name]['value']) and $this->model->fields[$name]['value'] == $key) ? 'selected' : '' ) ?>><?php echo $val ?></option>
		                                	<?php endforeach; ?>
		                                </select>
	                                <?php else: ?>
		                            	<input name="<?php echo $name ?>" type="<?php echo $this->model->fields[$name]['type'] ?>" value="<?php echo (isset($this->model->fields[$name]['value']) ? $this->model->fields[$name]['value'] : '') ?>" placeholder="<?php echo strip_tags($this->model->fields[$name]['label']) ?>" class="form-control input-sm" />
	                                <?php endif; ?>
	                            <?php endforeach; ?>
		                        <input type="submit" value="Procurar" class="btn btn-xs btn-success" />
                        	</div>
                        </fieldset>
                    </form>
            <?php endif; ?>

        </div>

        <div class="panel-body">
            <?php $c->_call_pre_table(); ?>

            <?php if (!$itens): ?>
                <div class="alert alert-danger">Nenhum registro encontrado</div>
            <?php endif; ?>
                <div class=" table-responsive-custom">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <?php foreach ($campos as $campo): ?>
                                    <th class="<?= url_title($campo); ?>" ><?= strip_tags($model->fields[$campo]['label'], '<label><input><div>') ?></th>
                                <?php endforeach; ?>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($itens as $row): ?>
                                <tr>
                                    <?php foreach ($campos as $campo): ?>
                                        <td class="<?= url_title($campo); ?>"> <span class="visible-xs"><?= strip_tags($model->fields[$campo]['label']) ?></span> <?= $row->{$campo} ?></td>
                                    <?php endforeach ?>
                                    <td class="acoes">
                                        <?php if (in_array('P', $crud)): ?>
                                            <a class="btn btn-xs btn-info btn btn-info" href="<?= $url ?>/visualizar/<?= $row->{$model->id_col} ?>" title="Visulizar este registro">Ver</a>
                                        <?php endif; ?>
                                        <?php if (in_array('U', $crud)): ?>
                                            <a class="btn btn-xs btn-info btn btn-warning" href="<?= $url ?>/editar/<?= $row->{$model->id_col} ?>" title="Editar este registro">Editar</a>
                                        <?php endif; ?>
                                        <?php if (in_array('D', $crud)): ?>
                                            <a class="btn btn-xs btn btn-danger deletar" href="<?= $url ?>/deletar/<?= $row->{$model->id_col} ?>" title="Deletar este registro">Deletar</a>
                                        <?php endif ?>

                                        <?php foreach ($acoes_extras as $acao_extra): ?>
                                            <a href="<?= site_url($acao_extra['url'] . "/" . $row->{$model->id_col}); ?>" title="<?= strip_tags($acao_extra['title']); ?>" class="btn btn-xs <?= $acao_extra['class']; ?>"><?= $acao_extra['title']; ?></a>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <?= $c->_call_pos_table() ?>
            <?= $paginacao ?>
        </div>
    </div>
</div>

<?php if (!$this->input->is_ajax_request()) include_once(dirname(__FILE__) . '/../footer.php'); ?>
