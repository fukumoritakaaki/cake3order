<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class OrdersController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $orders = $this->paginate($this->Orders);
        $this->set(compact('orders'));
    }
    
    public function add()
    {
        
    }
    
}