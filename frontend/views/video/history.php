<?php
/** @var $dataProvider \yii\data\ActiveDataProvider */

use yii\widgets\ListView;
$this->title = 'Youtube Clone';
?>
<h1>My History</h1>
<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'layout' => "<div class='d-flex flex-wrap'>{items}</div>{pager}",
    'itemOptions' => [
        'tag' => false,
    ]
])
?>