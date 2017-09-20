<?php

namespace backend\models;

use Yii;


class User extends \yii\mongodb\ActiveRecord
{

    public static function collectionName()
    {
        return ['Hotel', 'user'];
    }

    public function attributes()
    {
        return [
            '_id',
            'LastName',
            'FirstName',
        	"identity",
        	"phone" ,
        	"address" ,
        	"email",
        	"username" ,
        	"password",
        	"type",
   
        ];
    }


    public function rules()
    {
        return [
            [['_id','LastName','FirstName',"identity","phone" ,"address" ,"email","username" ,"password","type"], 'safe']
        ];
    }

    
}
