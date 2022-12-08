<?php

/** @var $model \common\models\Video */
?>

<div class="card m-3" style="width: 14rem;">
    <div class="ratio ratio-16x9">
        <video src="<?php echo $model->getVideoLink() ?>" title="YouTube video" allowfullscreen poster="<?php echo $model->getThumbnailLink() ?>"></video>
    </div>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?php echo $model->createdBy->username ?>
        </p>
        <p class="text-muted card-text m-0">
            140 views . <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>