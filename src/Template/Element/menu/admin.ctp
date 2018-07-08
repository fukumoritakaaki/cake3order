<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
      <div class="navbar-header">
      <?=$this->Html->link("受注くん",["controller" => "Homes" ]
              ,["class"=>"navbar-brand"]); ?>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
              <?=$this->Html->link("受注","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/admin/orders/index");?></li>
                  <li><?=$this->Html->link("新規追加","/admin/orders/add");?></li>
              </ul>
          </li>
          <li class="dropdown">
              <?=$this->Html->link("商品","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/admin/products/index");?></li>
                  <li><?=$this->Html->link("新規追加","admin/products/add");?></li>
              </ul>
           </li>
          <li class="dropdown">
              <?=$this->Html->link("顧客","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("一覧","/admin/customers/index");?></li>
                  <li><?=$this->Html->link("新規追加","/admin/customers/add");?></li>
              </ul>
           </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <p class="navbar-text">ようこそ、<?=$auth["email"]; ?></p>  
          <li class="dropdown">
              <?=$this->Html->link("管理","#",["data-toggle"=>"dropdown"]);?>
              <ul class="dropdown-menu">
                  <li><?=$this->Html->link("ユーザー一覧","/admin/users/index");?></li>
                  <li><?=$this->Html->link("ユーザー編集","/admin/users/edit");?></li>
                  <li><?=$this->Html->link("ログアウト","/admin/users/logout");?></li>
              </ul>
          </li>
        </ul>
      </div> 
  </div> 
</div>    
