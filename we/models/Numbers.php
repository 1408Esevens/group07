<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "numbers".
 *
 * @property string $number_id
 * @property string $number_name
 * @property integer $user_id
 * @property integer $we_appid
 * @property string $we_url
 * @property string $we_token
 * @property integer $we_num
 * @property string $we_type
 * @property string $we_appsecret
 * @property string $we_yuan
 * @property string $we_sert
 */
class Numbers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'numbers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'we_appid', 'we_num'], 'integer'],
            [['number_name', 'we_url', 'we_token', 'we_type', 'we_appsecret', 'we_yuan', 'we_sert'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'number_id' => 'Number ID',
            'number_name' => 'Number Name',
            'user_id' => 'User ID',
            'we_appid' => 'We Appid',
            'we_url' => 'We Url',
            'we_token' => 'We Token',
            'we_num' => 'We Num',
            'we_type' => 'We Type',
            'we_appsecret' => 'We Appsecret',
            'we_yuan' => 'We Yuan',
            'we_sert' => 'We Sert',
        ];
    }
}
