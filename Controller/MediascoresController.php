<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class MediascoresController extends AppController
{

    public $helpers = [
        'Html' => [
            'className' => 'Bootstrap3.BootstrapHtml'
        ],
        'Form' => [
            'className' => 'Bootstrap3.BootstrapForm'
        ],
        'Paginator' => [
            'className' => 'Bootstrap3.BootstrapPaginator'
        ],
        'Modal' => [
            'className' => 'Bootstrap3.BootstrapModal'
        ]
    ];

    public function initialize()
    {
        $this->loadComponent('Auth');
        $this->loadComponent('Flash');
    }

    public function index ($id = null)
    {
        if ( $id == null )
        {
            $id = $this->request->session()->read('Auth.User.id');
        }
        $list = $this->Mediascores->find()->order([ 'id DESC' ]);
        $this->set('list',$list->toArray());
    }

    public function add ()
    {
        $MediascoresTable = TableRegistry::get('Mediascores');
        $Mediascore = $MediascoresTable->newEntity();
        if ( $this->request->is('post') )
        {
            $this->request->data['user_id'] = $this->request->session()->read('Auth.User.id');
            $MediascoresTable->patchEntity($Mediascore,$this->request->data);
            if ($MediascoresTable->save($Mediascore)) 
            {
                return $this->redirect( array('controller' =>  'mediascores', 'action' => 'index') );
            }
        }
        $this->set('Mediascore', $Mediascore);
    }

    public function search ()
    {
        if ( $this->request->is('post') )
        {
            $needle = $this->request->data['needle'];
            $MediascoresTable = TableRegistry::get('Mediascores');
            $Mediascores = $MediascoresTable->find()
                ->where( [ 'name_de LIKE' => "%$needle%" ] )
                ->orWhere( [ 'name_en LIKE' => "%$needle%" ] );
            $this->set('list',$Mediascores->toArray() );
        }
    }
}
?>
