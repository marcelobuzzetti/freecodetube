<?php
use \yii\helpers\Url;
use yii\widgets\Pjax;

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
                <?php Pjax::begin() ?>
                  <?php echo $this->render('_buttons', [
                    'model' => $model
                  ]) ?> 
                <?php Pjax::end() ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>