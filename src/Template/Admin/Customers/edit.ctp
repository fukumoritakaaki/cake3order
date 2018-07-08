<h1 class="page-header">顧客編集</h1>
<?php
echo $this->Form->create($customer);
echo $this->Form->input('name');
echo $this->Form->button('登録');
echo $this->Form->end();
?>