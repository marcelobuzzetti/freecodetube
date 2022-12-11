<?php

use yii\helpers\Url;

/**
 * @var \common\models\User $channel
 */

?>

<a class="btn btn-danger" href="<?php echo Url::to(['channel/subscribe', 'username' => $channel->username]) ?>" data-method="post" data-pjax="1">
    Subscribe <i class="far fa-bell"></i>
</a> 9