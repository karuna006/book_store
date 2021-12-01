<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publisher Controller
 *
 * @property \App\Model\Table\PublisherTable $Publisher
 *
 * @method \App\Model\Entity\Publisher[] paginate($object = null, array $settings = [])
 */
class PublisherController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $publisher = $this->paginate($this->Publisher);

        $publisher = $this->paginate($this->Publisher->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => []
        ]));

        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * View method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => []
        ]);

        $this->set('publisher', $publisher);
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publisher = $this->Publisher->newEntity();
        if ($this->request->is('post')) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->getData());
            if ($this->Publisher->save($publisher)) {
                $this->Flash->success(__('The publisher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publisher could not be saved. Please, try again.'));
        }
        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->getData());
            if ($this->Publisher->save($publisher)) {
                $this->Flash->success(__('The publisher has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publisher could not be saved. Please, try again.'));
        }
        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publisher = $this->Publisher->get($id);
        if ($this->Publisher->delete($publisher)) {
            $this->Flash->success(__('The publisher has been deleted.'));
        } else {
            $this->Flash->error(__('The publisher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

     public function softdelete($id = null)
    {
        $this->request->allowMethod(['post', 'softdelete']);
        $raw_data['status'] = 0;
        $publisher = $this->Publisher->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publisher = $this->Publisher->patchEntity($publisher,$raw_data);
            if ($this->Publisher->save($publisher)) {
                $this->Flash->success(__('The publisher has been deleted.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publisher could not be deleted. Please, try again.'));
        }
        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }
}
