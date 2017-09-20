<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "room".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property String $roomID
 * @property mixed $type
 * @property mixed $price

 */
class Booking extends \yii\mongodb\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function collectionName()
	{
		return ['Hotel', 'booking'];
	}

	/**
	 * @inheritdoc
	 */
	public function attributes()
	{
		return [
				'_id',
				'bookingID',
				'bookingDate',
				'userID',
				'nameWhoBook'
				
		];
	}

	/**
	 * @inheritdoc
	 */
	//public function rules()
	//{
		//return [
			//	[['name','gender','degree','phone_number'], 'safe']
//		];
	//}
}