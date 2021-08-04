<?php

namespace app\models;

use Yii;

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
class Article extends \yii\db\ActiveRecord
{
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
            [['category_id', 'langArticle', 'title', 'fullTitle', 'author', 'content'], 'required'],
            [['category_id'], 'integer'],
            [['fullTitle', 'content'], 'string'],
            [['langArticle', 'author'], 'string', 'max' => 32],
            [['title', 'description', 'keywords', 'imgPreview', 'top'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'category_id' => 'Category ID',
            'langArticle' => 'Lang Article',
            'title' => 'Title',
            'fullTitle' => 'Full Title',
            'author' => 'Author',
            'content' => 'Content',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'imgPreview' => 'Img Preview',
            'top' => 'Top',
        ];
    }
}
