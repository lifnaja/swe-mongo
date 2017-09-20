<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "lecturer".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $name
 * @property mixed $dob
 * @property mixed $gender
 * @property mixed $degree
 * @property mixed $address
 * @property mixed $email
 * @property mixed $phone_number
 */
class DetailBooking extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['Hotel', 'room'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'bookingID',
            'roomID',
            'startDate',
        	'endDate',
        	'status'	
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'bookingID','roomID','startDate','endDate','status'], 'safe']
        ];
    }

    
}
