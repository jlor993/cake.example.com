<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var \App\Model\Entity\Comment[]|\Cake\Collection\CollectionInterface $comments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h3><?= h($post->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($post->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($post->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($post->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Meta Keywords') ?></th>
                    <td><?= h($post->meta_keywords) ?></td>
                </tr>
                <tr>
                    <th><?= __('Meta Description') ?></th>
                    <td><?= h($post->meta_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $post->has('user') ? $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($post->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($post->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($post->body)); ?>
                </blockquote>
            </div>
            <table>
                <tr>
                    <th><?= __('Comments') ?></th>
                </tr>
                <tbody>
                    <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?= h($comment->id) ?></td>
                        <td><?= $comment->has('post') ? $this->Html->link($comment->post->title, ['controller' => 'Posts', 'action' => 'view', $comment->post->id]) : '' ?></td>
                        <td><?= h($comment->first_name) ?></td>
                        <td><?= h($comment->last_name) ?></td>
                        <td><?= h($comment->email) ?></td>
                        <td><?= h($comment->created) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $comment->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
