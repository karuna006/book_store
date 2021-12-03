<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Login Controller
 *
 * @property \App\Model\Table\LoginTable $Login
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {        
        $this->viewBuilder()->autoLayout(false);          
        // $login = $this->paginate($this->Login);

        $this->set(compact('login'));
    }

    public function login()
    {
        // $this->viewBuilder()->enableAutoLayout(false);
        $this->viewBuilder()->autoLayout(false);
        $this ->render('index');

        if($this->request->is('post'))
        {
            $login = $this->Auth->identify();
            if($login)
            {
                $this->Auth->setUser($login);
                return $this->redirect(['controller'=>'Books']);
            }
            $this->Flash->error('Sorry we can`t find your account');
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
