<?php
use \yii\helpers\Url;
/** @var \common\models\Video $model*/
?>
<div class="row">
    <div class="col-sm-8">
    <div class="ratio ratio-16x9">
            <video src="<?php echo $model->getVideoLink() ?>" title="YouTube video" allowfullscreen poster="<?php echo $model->getThumbnailLink() ?>" controls autoplay></video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
              <?php echo $model->getViews()->count() ?> views . <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <a href="<?php echo Url::to(['/video/like', 'id' => $model->video_id]) ?>" class="btn btn-sm btn-outline-primary" data-method="post">
                    <i class="fas fa-thumbs-up"></i> 9
                </a>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-thumbs-down"></i> 3
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>