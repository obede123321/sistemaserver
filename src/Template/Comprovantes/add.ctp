<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Comprovantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comprovantes form large-9 medium-8 columns content">
 <!-- <?php echo "teste -> ".$teste;?> -->
    <?= $this->Form->create($comprovante, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Comprovante') ?></legend>
        <?php
            echo $this->Form->control('vencimento');
            echo $this->Form->control('pagamento');
            echo $this->Form->control('aproved');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('recibo_id', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Upload_file'), ['type'=>'submit', 'class'=>'form-controlbnt bnt-default']);?>
    <?= $this->Form->end() ?>
</div>
