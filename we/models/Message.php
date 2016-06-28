<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string $message_id
 * @property string $message_title
 * @property string $message_content
 * @property string $message_this
 * @property integer $number_id
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_id'], 'integer'],
            [['message_title', 'message_content', 'message_this'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => 'Message ID',
            'message_title' => 'Message Title',
            'message_content' => 'Message Content',
            'message_this' => 'Message This',
            'number_id' => 'Number ID',
        ];
    }
}
