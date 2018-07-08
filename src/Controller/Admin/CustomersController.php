<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class CustomersController extends AppController
{
    public function index()
    {
        $customers = $this->paginate($this->Customers);
        $this->set(compact('customers'));
    }
    
    public function add()
    {
        $customer = $this->Customers->newEntity();
        if($this->request->is('post')){
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            if($this->Customers->save($customer)){
                $this->Flash->success(__('顧客を新規登録しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('顧客の新規登録に失敗しました'));
        }
        $this->set(compact('customer'));
    }
    
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => []
        ]);
        if($this->request->is(['patch' , 'post', 'put'])){
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            if($this->Customers->save($customer)){
                $this->Flash->success(__('顧客を更新しました'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('顧客の更新に失敗しました'));
        }
        $this->set(compact('customer'));
    }
}