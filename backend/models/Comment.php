<?php

namespace backend\models;

use common\models\Comment as CommentBase;

class Comment extends CommentBase
{
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
