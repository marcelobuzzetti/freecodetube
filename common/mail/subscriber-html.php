<?php
/**
 * @var \common\models\User $channel
 * @var \common\models\User $user
 */

use common\helpers\Html;

?>

<p>Hello <?php echo $channel->username ?></p>
<p>User <?php echo Html::channelLink($user, true) ?> has subscribed to you</p>
<p>FreeCodeTube team</p>