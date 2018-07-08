<h1 class="page-header">ユーザ一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
    </tr>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= h($user->email) ?></td>
        <td><?= h($user->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($user->created->format("Y年m月d日H時i分")) ?></td>
    </tr>
<?php endforeach; ?>
</table>
<div class="paginator">
    <ul class="pagination">
          <?=$this->Paginator->numbers([
             'before' => $this->Paginator->first("<<"),
             'after' => $this->Paginator->last(">>"),
          ]) ?>
    </ul>
</div>    