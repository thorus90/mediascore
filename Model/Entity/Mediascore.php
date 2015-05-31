<?php
/*
namespace Model\Entity;

use App\Model\AppModel;

class Mediascore extends AppModel
{
    public function beforeSave($options = array())
    {
        if ( $this->data['Mediascore']['done_until'] == '' )
        {
            $this->data['Mediascore']['done_until'] = "0";
        }
        $this->data['Mediascore']['inserted_by'] = Session::read("Auth.User.id");
        $this->data['Mediascore']['inserted_date'] = DboSource::expression('NOW()');
        $this->data['Mediascore']['user_id'] = 6;
        parent::beforeSave($options = array());
        return true;
    }

}
*/
?>
