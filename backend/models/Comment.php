<?php

namespace backend\models;

use Yii;
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
            [['text'], 'string'],
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
        if($file = UploadedFile::getInstance($this, 'file')){
            $dir = 'upload/images/'. date("Y-m-d") . "/";
            if (!is_dir($dir)){
                mkdir($dir); //ЕЩЕ НАДО ДОБАВИТЬ ПРАВА НА ЗАПИСЬ!
            }   
            $file_name = uniqid() . "_" . $file->baseName . '.' . $file->extension;
            $this->img = $dir . $file_name;
            $file->saveAs($this->img);
        }
        return parent::beforeSave($insert);
    }
}
