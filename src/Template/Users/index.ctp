<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<?php echo $this->element('sidebar'); ?> 
<div class="users index large-9 medium-8 columns content">
    <h3>Users Management List</h3>
    <?= $this->Html->link(__('Add New User'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td class="actions">
                <?= $this->Html->link(
                    '<i class="fa fa-eye"></i>',
                    ['action' => 'view', $user->id],
                    ['escape' => false, 'title' => __('View')]) 
                ?>
                <?= $this->Html->link(
                    '<i class="fa fa-edit"></i>',
                    ['action' => 'edit', $user->id],
                    ['escape' => false, 'title' => __('Edit')]) 
                ?>
                <?= $this->Form->postLink(
                    '<i class="fa fa-remove"></i>',
                ['action'   => 'delete', $user->id ],
            [
                        'class'    => 'tip',
                        'escape'   => false,
                        'confirm'  => 'Are you sure ?'
                    ]);
                ?>
                    <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> -->
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> -->
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
