<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MediascoresTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsTo('Users');
    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('rate', 'Please give a rate!')
        ;
    }

}
?>
