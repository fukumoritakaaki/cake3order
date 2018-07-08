<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;

class ProductsController extends AppController
{
    public function index()
    {
        $products = $this->paginate($this->Products);
        $this->set(compact('products'));
    }
    
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')){
            $product = $this->Products->patchEntity($product, $this->request->data);
            if($this->Products->save($product)){
                $this->Flash->success(__('商品を新規登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('商品の新規登録に失敗しました'));
        }
        $this->set(compact('product'));
    }
    
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' =>[]
        ]);
        if ($this->request->is(['patch', 'post', 'put'])){
            $product = $this->Products->patchEntity($product, $this->request->data);
            if($this->Products->save($product)){
                $this->Flash->success(__('商品の更新に登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('商品の更新に失敗しました'));
        }
        $this->set(compact('product'));
    }
}