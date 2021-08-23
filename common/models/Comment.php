<?php

namespace common\models;

use yii\web\UploadedFile;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $date
 * @property string $lang
 * @property string $name
 * @property string $text
 */
class Comment extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['article_id', 'name', 'text'], 'required'],
            [['text'], 'string', 'max' => 500],
            [['article_id'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата создания',
            'article_id' => 'ID статьи',
            'name' => 'Имя',
            'text' => 'Комментарий',
            'file' => 'Фото'
        ];
    }

    public function getArticle()
    {
        return $this->hasOne(Article::class, ['id' => 'article_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            
            if (empty($this->date)) {
                $this->date = date('Y-m-d H:i:s', time());
            }

            return true;
        } else
            return false;
    }
}
