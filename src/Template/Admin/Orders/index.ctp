<h1 class="page-header">受注一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col">顧客名</th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col">アクション</th>
    </tr>
<?php foreach ($orders as $order): ?>
    <tr>
        <td><?= $this->Number->format($order->id) ?></td>
        <td><?= h($order->name) ?></td>
        <td><?= h($order->customer->name) ?></td>
        <td><?= h($order->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($order->created->format("Y年m月d日H時i分")) ?></td>
        <td><?= $this->Html->link("表示",["action" => "view", $order->id]) ?></td>
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