<?php

namespace common\models;

use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

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
            [['file'], 'image', 'extensions' => 'png, jpg', 'maxSize' => 1024 * 1024],
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
            'file' => 'Картинка превью (будет изменён размер на 600x450)',
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
}
