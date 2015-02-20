<?php

class MediascoresController extends AppController
{
    public $helpers = array(
        'Form' => array(
              'className' => 'BootstrapForm'
        )
    );

    public $components = array(
        'Session',
        'Auth',
    );

    public function index ($id = null)
    {
        if ( $id == null )
        {
            $id = $this->Auth->user('id');
        }
        $this->set('list',$this->Mediascore->find('all',array
        (
            'conditions' => array
            (
                'user_id' => $id
            ),
            'order' => 'id DESC',
            'recursive' => -1
        )));
    }

    public function add ()
    {
        if ( $this->request->is('post') )
        {
            $this->request->data['Mediascore']['user_id'] = $this->Auth->user('id');
            if ($this->Mediascore->save($this->request->data)) 
            {
                return $this->redirect( array('controller' =>  'mediascores', 'action' => 'index') );
            }
        }
    }

    public function search ()
    {
        if ( $this->request->is('post') )
        {
            $needle = $this->request->data['Mediascore']['needle'];
            $this->set('list',$this->Mediascore->find('all',array
            (
                'conditions' => array
                (
                    'OR' => array
                    (
                        'Mediascore.name_de LIKE' => "%$needle%",
                        'Mediascore.name_en LIKE' => "%$needle%"
                    )
                )
            )));
        }
    }
}
?>
