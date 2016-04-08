<?php if (!$this->input->is_ajax_request()): include_once(dirname(__FILE__) . '/../header.php'); ?>

<div id="main-container">

    <div class="widget-box">
        <div class="widget-header widget-header-blue widget-header-flat">
            <h4 class="widget-title lighter"><?= ucfirst($titulo) ?><span class="line"></span></h4>
        </div>
        <div class="widget-body">

            <div class="widget-main">
<?php endif; ?>
            <?= $c->_call_pre_form($this->model, $data); ?>
            <?php
            if (validation_errors())
                print box_alert(validation_errors());
            if ($ok)
                print box_success('Dados salvos com sucesso!');
            ?>

                <form action="<?= current_url(); ?>" method="post" class="form-horizontal no-margin form-border" enctype="multipart/form-data">                
            		<? $c->_call_filter_pre_form($data); ?>
                    <?php print call_user_func_array(array($this->model, 'form'), $data);?>
                    <?php $c->_call_in_form()?>
                    <div class="widget-toolbox padding-8 clearfix">
                        <div class="col-sm-offset-2">
                            <button type="submit" class="btn btn-primary btn-sm submit">Salvar</button>
                        </div>
                    </div>
                </form>
                <?php if (isset($data[0]['values']['estado'])): ?>
                    <input type="hidden" id="estado_val" value="<?= $data[0]['values']['estado']; ?>" />
                    <input type="hidden" id="cidade_val" value="<?= $data[0]['values']['cidade']; ?>" />
                <?php endif; ?>
<?php if(!$this->input->is_ajax_request()): ?>
            </div>
            <?= $c->_call_pos_form() ?>
        </div>
    </div>
</div>

<?php include_once(dirname(__FILE__) . '/../footer.php'); endif;?>
