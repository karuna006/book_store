<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Author Controller
 *
 * @property \App\Model\Table\AuthorTable $Author
 *
 * @method \App\Model\Entity\Author[] paginate($object = null, array $settings = [])
 */
class AuthorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $author = $this->paginate($this->Author->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => []
        ]));

        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }

    /**
     * View method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => []
        ]);

        $this->set('author', $author);
        $this->set('_serialize', ['author']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $author = $this->Author->newEntity();
        if ($this->request->is('post')) {
            $author = $this->Author->patchEntity($author, $this->request->getData());
            if ($this->Author->save($author)) {
                $this->Flash->success(__('The author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The author could not be saved. Please, try again.'));
        }
        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $author = $this->Author->patchEntity($author, $this->request->getData());
            if ($this->Author->save($author)) {
                $this->Flash->success(__('The author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The author could not be saved. Please, try again.'));
        }
        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $author = $this->Author->get($id);
        if ($this->Author->delete($author)) {
            $this->Flash->success(__('The author has been deleted.'));
        } else {
            $this->Flash->error(__('The author could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function softdelete($id = null)
    {
        $this->request->allowMethod(['post', 'softdelete']);
        $raw_data['status'] = 0;
        $author = $this->Author->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $author = $this->Author->patchEntity($author,$raw_data);
            if ($this->Author->save($author)) {
                $this->Flash->success(__('The author has been deleted.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The author could not be deleted. Please, try again.'));
        }
        $this->set(compact('author'));
        $this->set('_serialize', ['author']);
    }
}
