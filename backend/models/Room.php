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
class Room extends \yii\mongodb\ActiveRecord
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
				'roomID',
				'type',
				'price',
				
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