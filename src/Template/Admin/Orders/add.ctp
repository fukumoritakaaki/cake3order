<h1 class="page-header">顧客新規追加</h1>
<?php
echo $this->Form->create($order);
echo $this->Form->input('name');
echo $this->Form->button('登録');
echo $this->Form->end();
?>