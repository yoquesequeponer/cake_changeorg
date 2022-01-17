<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione[]|\Cake\Collection\CollectionInterface $peticiones
 */
?>
<div class="peticiones index content">
    <?= $this->Html->link(__('New Peticione'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Peticiones') ?></h3>
    <div class="table-responsive" style="margin-left: 10%;">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('firmantes') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('categorias_id') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peticiones as $peticione): ?>
                <tr>
                    <td><?= $this->Number->format($peticione->id) ?></td>
                    <td><?= h($peticione->titulo) ?></td>
                    <td><?= $this->Number->format($peticione->firmantes) ?> </td>
                    <td><?= h($peticione->estado) ?></td>
                    <td><?= $peticione->has('categoria') ? $this->Html->link($peticione->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $peticione->categoria->id]) : '' ?></td>
                    <td><?= $peticione->has('user') ? $this->Html->link($peticione->user->name, ['controller' => 'Users', 'action' => 'view', $peticione->user->id]) : '' ?></td>
                    <td><?= h($peticione->created) ?></td>
                    <td><?= h($peticione->updated) ?></td>
                    <td><?= $this->Html->image('/webroot/files/PeticioneS/photo/'.$peticione->photo, ['alt' => 'CakePHP']);?></td>                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $peticione->id]) ?>
                        <?= $this->Html->link(__('Firmar'), ['action' => 'firmar', $peticione->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peticione->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peticione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peticione->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
