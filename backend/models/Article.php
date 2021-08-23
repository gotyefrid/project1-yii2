<?php

namespace backend\models;

use Yii;
use Imagine\Image\Box;
use yii\base\Exception;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use Imagine\Imagick\Imagine;
use common\models\Article as ArticleBase;
use yii\helpers\VarDumper;

class Article extends ArticleBase
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function beforeSave($insert)
    {
        $file = UploadedFile::getInstance($this, 'file');

        if ($file) {

            $this->deleteCurrentImage();

            $dir = 'upload/images/' . date("Y-m-d") . "/";
            FileHelper::createDirectory($dir);
            $file_name = "PreviewArtID_"
                . $this->id
                . "_"
                . uniqid()
                . '.'
                . $file->extension;
            $imgPreview = $dir . $file_name;

            if ($file->saveAs($imgPreview)) {
                $this->imgPreview = $imgPreview;
            } else {
                throw new Exception('Картинка не была загружена');
            }

            $fullPathToImg = Yii::getAlias('@backend/web/') . $imgPreview;
            $this->resizeImg($fullPathToImg);
        }

        return parent::beforeSave($insert);
    }

    private function deleteCurrentImage()
    {
        $imgPath = Yii::getAlias('@backend/web/') . $this->imgPreview;
        if (file_exists($imgPath)) {
            unlink($imgPath);
        }
    }

    /**
     * Resize uploaded image
     * @param string $path Full path to image.
     */
    private function resizeImg($path)
    {
        $imagine = new Imagine();
        $image = $imagine->open($path);
        $image->resize(new Box(600, 450))
              ->save($path);
    }
}
