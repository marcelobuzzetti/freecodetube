<?php

use yii\helpers\Html;
use \yii\helpers\Url;
use yii\widgets\Pjax;

/** @var \common\models\Video $model*/
/** @var \common\models\Video[] $similarVideos*/
?>
<div class="row">
  <div class="col-sm-8">
    <div class="ratio ratio-16x9">
      <video src="<?php echo $model->getVideoLink() ?>" title="" allowfullscreen poster="<?php echo $model->getThumbnailLink() ?>" controls></video>
    </div>
    <h6 class="mt-2"><?php echo $model->title ?></h6>
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <?php echo $model->getViews()->count() ?> views . <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
      </div>
      <div>
        <?php Pjax::begin() ?>
        <?php echo $this->render('_buttons', [
          'model' => $model
        ]) ?>
        <?php Pjax::end() ?>
      </div>
    </div>
    <div>
      <p><?php echo \common\helpers\Html::channelLink($model->createdBy) ?></p>
      <p><?php echo Html::encode($model->description) ?></p>
    </div>
  </div>
  <div class="col-sm-4">
    <?php foreach ($similarVideos as $similarVideo) : ?>
      <div class="d-flex align-items-center mb-3">
          <a href="<?php echo Url::to(['video/view', 'id' => $similarVideo->video_id ]) ?>">
            <div class="ratio ratio-16x9" style="width: 120px;">
              <video src="<?php echo $similarVideo->getVideoLink() ?>" title="" allowfullscreen poster="<?php echo $similarVideo->getThumbnailLink() ?>" ></video>
            </div>
          </a>
        <div class="flex-grow-1 ms-3">
          <h6 class="mt-0"><?php echo $similarVideo->title ?></h6>
          <div class="text-muted">
            <p class="m-0">
              <?php echo \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
            </p>
            <small>
              <?php echo $similarVideo->getViews()->count() ?> views . <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
            </small>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>