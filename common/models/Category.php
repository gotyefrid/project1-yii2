<?php

namespace common\models;


/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $language
 * @property int $parent_id
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['language', 'title'], 'required'],
            [['parent_id'], 'integer'],
            [['language'], 'string', 'max' => 32],
            [['title'], 'string', 'max' => 2552],
            [['description', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'language' => 'Язык',
            'parent_id' => 'Вложена в',
            'title' => 'Название',
            'description' => 'Описание',
            'keywords' => 'Ключевики',
        ];
    }
    public function getArticle()
    {
      return $this->hasMany(Article::class, ['category_id' => 'id']);
    }
    public function getCategory()
    {
      return $this->hasOne(Category::class, ['id' => 'parent_id']);
    }
}
