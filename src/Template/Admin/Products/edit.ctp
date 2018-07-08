<h1 class="page-header">商品編集</h1>
<?php
echo $this->Form->create($product);
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->button("登録");
echo $this->Form->end();
?>