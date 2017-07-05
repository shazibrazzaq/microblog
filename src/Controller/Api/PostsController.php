<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;


class PostsController extends AppController
{

    public function index() 
    {
        $this->Crud->on('beforePaginate', function(\Cake\Event\Event $event) {
            $event->subject->query = $event->subject->query
                ->find('search', $this->request->query);
        });
        return $this->Crud->execute();
        
    }
    public function add() 
    {
        $this->Crud->on('beforeSave', function(\Cake\Event\Event $event) {
            // find user ids of the users with usernames
            $userIds = [];
            if (!empty($this->request->data['users'])) {
                foreach($this->request->data['users'] as $username) {
                    $user = $this->Posts->Users->findByUsername($username)->select(['Users.id'])->first();
                    $userIds[] = ($user !== null) ? $user->id : 0;
                }
                $this->request->data['users'] = $userIds;
            }
        
        });

        return $this->Crud->execute();
        
    }
    
}
