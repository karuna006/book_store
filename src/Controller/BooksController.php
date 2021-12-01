<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 *
 * @method \App\Model\Entity\Book[] paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $books = $this->paginate($this->Books->find('all',[
                'conditions' => ['Books.status !=' => 0],
                'contain'    => ['author','publisher']
        ]));

        $this->set(compact('books'));
        $this->set('_serialize', ['books']);
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => []
        ]);

        $this->set('book', $book);
        $this->set('_serialize', ['book']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $book = $this->Books->newEntity();
        if ($this->request->is('post')) {

            // $book = $this->Books->patchEntity($book, $this->request->getData());
            $book['title'] = $this->request->data['title'];
            $book['author'] = $this->request->data['author'];
            $book['publisher'] = $this->request->data['publisher'];
            $book['edition'] = $this->request->data['edition'];

            $check = 0;
            $uploadPath = 'uploads/cover_pic/';
            $fileName = $this->request->data['cover_pic']['name'];
            $uploadFile = $uploadPath.$fileName;
            if(move_uploaded_file($this->request->data['cover_pic']['tmp_name'],$uploadFile))
            {
                $book['cover_pic'] = $fileName;
                $check += 1;
            }

            $uploadPath = 'uploads/files/';
            $fileName = $this->request->data['file']['name'];
            $uploadFile = $uploadPath.$fileName;
            if(move_uploaded_file($this->request->data['file']['tmp_name'],$uploadFile))
            {
                $book['file'] = $fileName;
                $check += 2;
            }

            if ($this->Books->save($book))
            {
                if($check == 3)
                {
                    $this->Flash->success(__('The book has been saved.'));                    
                }
                elseif($check == 2)
                {
                    $this->Flash->warning(__('The book has been saved, But File not has been saved'));
                }
                elseif($check == 1)
                {
                    $this->Flash->warning(__('The book has been saved, But Cover pic not has been saved'));
                }
                elseif($check == 0)
                {
                    $this->Flash->warning(__('The book has been saved, But files not has been saved'));
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        
        // Get list of author
        $this->loadModel("Author");
        $Author = $this->Author->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => [],
                'fields' => ['id','name']
        ]);

        $author_data = $Author->toArray();
        $author = [];
        if(!empty($author_data))
        {
            foreach($author_data as $key => $value)
            {
                $author[$value['id']] = $value['name'];
            }
        }
        $this->set('Author',$author);        

        // Get list of publisher
        $this->loadModel("publisher");
        $Publisher = $this->publisher->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => [],
                'fields' => ['id','name']            
        ]);

        $publisher_data = $Publisher->toArray();
        $publisher = [];
        if(!empty($publisher_data))
        {
            foreach($publisher_data as $key => $value)
            {
                $publisher[$value['id']] = $value['name'];
            }
        }
        $this->set('publisher',$publisher);

        // $this->set('publisher', $publisher->toArray());

        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // $book = $this->Books->patchEntity($book, $this->request->getData());

            $book['title'] = $this->request->data['title'];
            $book['author'] = $this->request->data['author'];
            $book['publisher'] = $this->request->data['publisher'];
            $book['edition'] = $this->request->data['edition'];

            $check = 0;
            $uploadPath = 'uploads/cover_pic/';
            $fileName = $this->request->data['cover_pic']['name'];
            $uploadFile = $uploadPath.$fileName;
            if(move_uploaded_file($this->request->data['cover_pic']['tmp_name'],$uploadFile))
            {
                $book['cover_pic'] = $fileName;
                $check += 1;
            }

            $uploadPath = 'uploads/files/';
            $fileName = $this->request->data['file']['name'];
            $uploadFile = $uploadPath.$fileName;
            if(move_uploaded_file($this->request->data['file']['tmp_name'],$uploadFile))
            {
                $book['file'] = $fileName;
                $check += 2;
            }

            if ($this->Books->save($book)) {
                if($check == 3)
                {
                    $this->Flash->success(__('The book has been saved.'));                    
                }
                elseif($check == 2)
                {
                    $this->Flash->warning(__('The book has been saved, But Cover pic not has been saved'));
                }
                elseif($check == 1)
                {
                    $this->Flash->warning(__('The book has been saved, But File not has been saved'));
                }
                elseif($check == 0)
                {
                    $this->Flash->warning(__('The book has been saved, But files not has been saved'));
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }

        // Get list of author
        $this->loadModel("Author");
        $Author = $this->Author->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => [],
                'fields' => ['id','name']
        ]);

        $author_data = $Author->toArray();
        $author = [];
        if(!empty($author_data))
        {
            foreach($author_data as $key => $value)
            {
                $author[$value['id']] = $value['name'];
            }
        }
        $this->set('Author',$author);        

        // Get list of publisher
        $this->loadModel("publisher");
        $Publisher = $this->publisher->find('all',[
                'conditions' => ['status !=' => 0],
                'contain'    => [],
                'fields' => ['id','name']            
        ]);

        $publisher_data = $Publisher->toArray();
        $publisher = [];
        if(!empty($publisher_data))
        {
            foreach($publisher_data as $key => $value)
            {
                $publisher[$value['id']] = $value['name'];
            }
        }
        $this->set('publisher',$publisher);

        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        if ($this->Books->delete($book)) {
            $this->Flash->success(__('The book has been deleted.'));
        } else {
            $this->Flash->error(__('The book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function softdelete($id = null)
    {
        $this->request->allowMethod(['post', 'softdelete']);
        $raw_data['status'] = 0;
        $book = $this->Books->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Books->patchEntity($book,$raw_data);
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        $this->set(compact('book'));
        $this->set('_serialize', ['book']);
    }
}
