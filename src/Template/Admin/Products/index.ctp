<h1 class="page-header">商品一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('price') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col">アクション</th>
    </tr>
<?php foreach ($products as $product): ?>
    <tr>
        <td><?= $this->Number->format($product->id) ?></td>
        <td><?= h($product->name) ?></td>
        <td><?= h($product->price) ?></td>
        <td><?= h($product->modified->format("Y年m月d日H時i分")) ?></td>
        <td><?= h($product->created->format("Y年m月d日H時i分")) ?></td>
        <td><?= $this->Html->link("編集",["action" => "edit", $product->id]) ?></td>
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