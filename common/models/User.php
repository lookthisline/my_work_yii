<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "my_user".
 *
 * @property int $id
 * @property string $avatar 头像
 * @property string $nickname 用户名
 * @property string $passwd 密码
 * @property string $name 姓名
 * @property string $phone 电话
 * @property string $position 职务
 * @property string $email 邮箱 最长 254
 * @property int $account_status 审核状态(-1 待审核，1 正常用户)
 * @property int $user_level 用户等级(1 超管,2 普管,3 用户)
 * @property int $create_time 创建时间
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['avatar', 'nickname', 'passwd', 'name', 'email'], 'required'],
            [['avatar', 'email'], 'string'],
            [['account_status', 'user_level', 'create_time'], 'integer'],
            [['nickname', 'name'], 'string', 'max' => 16],
            [['passwd'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 11],
            [['position'], 'string', 'max' => 20],
            [['nickname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar' => 'Avatar',
            'nickname' => 'Nickname',
            'passwd' => 'Passwd',
            'name' => 'Name',
            'phone' => 'Phone',
            'position' => 'Position',
            'email' => 'Email',
            'account_status' => 'Account Status',
            'user_level' => 'User Level',
            'create_time' => 'Create Time',
        ];
    }
}
