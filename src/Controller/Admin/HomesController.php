<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class HomesController extends AppController
{
    public function index()
    {
        $homeMenus = [];
        $homeMenus["受注一覧"] = ["controller" => "Orders" , "action" => "index"];
        $homeMenus["受注新規一覧"] = ["controller" => "Orders" , "action" => "add"];
        $homeMenus["商品一覧"] = ["controller" => "Products" , "action" => "index"];
        $homeMenus["受注新規一覧"] = ["controller" => "Products" , "action" => "add"];
        $homeMenus["受注新規一覧"] = ["controller" => "Customers" , "action" => "index"];
        $homeMenus["顧客新規登録"] = ["controller" => "Cudtomers" , "action" => "add"];
        $this->set(compact("homeMenus"));
    }
}

