<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peticione $peticione
 */
?>
<div class="row" style="margin-left: 10%;">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Peticione'), ['action' => 'edit', $peticione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Peticione'), ['action' => 'delete', $peticione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peticione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Peticiones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Peticione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peticiones view content">
            <h3><?= h($peticione->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($peticione->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($peticione->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $peticione->has('categoria') ? $this->Html->link($peticione->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $peticione->categoria->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $peticione->has('user') ? $this->Html->link($peticione->user->name, ['controller' => 'Users', 'action' => 'view', $peticione->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <!-- <td><?= h($peticione->photo) ?></td> -->
                    <td><?= $this->Html->image('/webroot/files/PeticioneS/photo/'.$peticione->photo, ['alt' => 'CakePHP']);?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($peticione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firmantes') ?></th>
                    <td><?= $this->Number->format($peticione->firmantes) ?> <?= $this->Html->link(__('Firmar'), ['action' => 'firmar', $peticione->id]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($peticione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($peticione->updated) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($peticione->descripcion)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Destinatario') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($peticione->destinatario)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
