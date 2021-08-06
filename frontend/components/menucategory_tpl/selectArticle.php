<?php

use yii\helpers\Url;
?>
<option value="<?= $category['id'] ?>"
        <?php if($category['id'] == $this->model->category_id) echo 'selected'?>
>

    <?= " {$tab} {$category['title']} ".strtoupper($category['language']) ?>
</option>
<?php if (isset($category['childs'])) : ?>
    <?= $this->getMenuHtml($category['childs'], $tab . '▬') ?>
<?php endif; ?>