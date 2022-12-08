<?php
/**
 * @var $model \common\models\Video
 */
use yii\helpers\Url;
?>
<a href="<?php echo Url::to(['/video/like', 'id' => $model->video_id]) ?>" class="btn btn-sm btn-outline-primary" data-method="post" data-pjax="1">
    <i class="fas fa-thumbs-up"></i> 9
</a>
<button class="btn btn-sm btn-outline-secondary">
    <i class="fas fa-thumbs-down"></i> 3
</button>