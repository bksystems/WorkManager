<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestField[]|\Cake\Collection\CollectionInterface $testFields
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Test Field'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testFields index large-9 medium-8 columns content">
    <h3><?= __('Test Fields') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_varchar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_datetime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_bool') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testFields as $testField): ?>
            <tr>
                <td><?= $this->Number->format($testField->id) ?></td>
                <td><?= h($testField->test_varchar) ?></td>
                <td><?= h($testField->test_datetime) ?></td>
                <td><?= h($testField->test_bool) ?></td>
                <td><?= h($testField->test_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testField->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testField->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testField->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testField->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
