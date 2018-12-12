<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestField $testField
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Test Fields'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testFields form large-9 medium-8 columns content">
    <?= $this->Form->create($testField) ?>
    <fieldset>
        <legend><?= __('Add Test Field') ?></legend>
        <?php
            echo $this->Form->control('test_varchar');
            echo $this->Form->control('test_text');
            echo $this->Form->control('test_datetime');
            echo $this->Form->control('test_bool');
            echo $this->Form->control('test_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
