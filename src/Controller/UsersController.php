<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->autoLayout(false);
        // $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        if(!empty($this->request->session()->read('Auth.User')))
        {
            return $this->redirect(['controller' => 'books', 'action' => 'index']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }
    
    public function login()
    {
        // $this->viewBuilder()->enableAutoLayout(false);
        $this->viewBuilder()->autoLayout(false);
        $this ->render('index');

        if($this->request->is('post'))
        {
            $users = $this->Auth->identify();
            if($users)
            {
                $this->Auth->setUser($users);
                return $this->redirect(['controller'=>'Books','action'=>'index']);
            }
            $this->Flash->error('Sorry we can`t find your account');
        }
    }

    public function logout()
    {
        $this->Flash->success('you have Logged out');
        return $this->redirect($this->Auth->logout());
    }
}
