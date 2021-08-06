<?php

use yii\helpers\Url;
?>
<option value="<?= $category['id'] ?>"
        <?php if($category['id'] == $this->model->parent_id) echo 'selected'?>
        <?php if($category['id'] == $this->model->id) echo 'disabled'?>
>

    <?= " {$tab} {$category['title']} ".strtoupper($category['language']) ?>
</option>
<?php if (isset($category['childs'])) : ?>
    <?= $this->getMenuHtml($category['childs'], $tab . '▬') ?>
<?php endif; ?>