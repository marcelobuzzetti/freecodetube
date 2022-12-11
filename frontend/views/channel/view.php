<?php

/**
 * @var \common\models\User $channel
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

use yii\data\ActiveDataProvider;

use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;

?>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><?php echo $channel->username ?></h1>
        <hr>
        <?php Pjax::begin() ?>
            <?php echo $this->render('_subscribe',[
                'channel' => $channel
            ]) ?>
        <?php Pjax::end() ?>
    </div>
</div>

<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => "<div class='d-flex flex-wrap'>{items}</div>{pager}",
    'itemOptions' => [
        'tag' => false,
    ]
])
?>