<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('siape', ['placeholder'=>'siape']);
            echo $this->Form->control('nome', ['placeholder'=>'nome']);
            echo $this->Form->control('email', ['placeholder'=>'email']);
            echo $this->Form->control('username', ['placeholder'=>'username']);
            echo $this->Form->control('password', ['placeholder'=>'password']);
            echo $this->Form->control('plano', ['placeholder'=>'plano']);
            // echo $this->Form->control('role', ['placeholder'=>'role']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
