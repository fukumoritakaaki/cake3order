<h1 class="page-header">顧客一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col">アクション</th>
    </tr>
<?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $this->Number->format($customer->id) ?></td>
        <td><?= h($customer->name) ?></td>
        <td><?= h($customer->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($customer->created->format("Y年m月d日H時i分")) ?></td>
        <td><?= $this->Html->link("編集",["action" => "edit", $customer->id]) ?></td>
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