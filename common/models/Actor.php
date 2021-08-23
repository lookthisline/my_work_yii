<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int         $id
 * @property string|null $name
 * @property string|null $update_time
 */
// class Actor extends \yii\db\ActiveRecord
class Actor extends \yii\base\Model
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'actor';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['id'], 'required'],
			[['id'], 'integer'],
			[['update_time'], 'safe'],
			[['name'], 'string', 'max' => 45],
			[['id'], 'unique'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id'          => 'ID',
			'name'        => 'Name',
			'update_time' => 'Update Time',
		];
	}
}
