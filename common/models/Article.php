<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string|null $time
 * @property int $category_id
 * @property string $langArticle
 * @property string $title
 * @property string $fullTitle
 * @property string $author
 * @property string $content
 * @property string|null $description
 * @property string|null $keywords
 * @property string $imgPreview
 * @property string|null $top
 */
class Article extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['time'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['time'], 'safe'],
            [['category_id', 'langArticle', 'title'], 'required'],
            [['category_id'], 'integer'],
            [['fullTitle', 'content'], 'string'],
            [['langArticle', 'author'], 'string', 'max' => 32],
            [['title', 'description', 'keywords', 'imgPreview', 'top'], 'string', 'max' => 255],
            [['file'], 'image', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Дата добавления',
            'category_id' => 'Категория',
            'langArticle' => 'Язык',
            'title' => 'Заголовок 1',
            'fullTitle' => 'Заголовок 2',
            'author' => 'Автор',
            'content' => 'Содержимое',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'imgPreview' => 'Картинка превью',
            'file' => 'Картинка превью', 
            'top' => 'Позиция на главной',
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['article_id' => 'id']);
    }
    public function beforeSave($insert)
    {
        if($file = UploadedFile::getInstance($this, 'file')){
            $dir = 'upload/images/'. date("Y-m-d") . "/";
            if (!is_dir($dir)){
                mkdir($dir); //ЕЩЕ НАДО ДОБАВИТЬ ПРАВА НА ЗАПИСЬ!
            }   
            $file_name = uniqid() . "_" . $file->baseName . '.' . $file->extension;
            $this->imgPreview = $dir . $file_name;
            $file->saveAs($this->imgPreview);
        }
        return parent::beforeSave($insert);
    }
}