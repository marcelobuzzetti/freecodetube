<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

/** @var \common\models\Video $latestVideo */
/** @var integer $numberOfView */
/** @var integer $numberOfSubscribers */
/** @var \common\models\Subscriber[] $subscribers */

$this->title = 'Youtube Clone';
?>
<div class="site-index d-flex flex-wrap">
    <div class="card m-2" style="width: 14rem;">
        <?php if($latestVideo): ?>
            <div class="ratio ratio-16x9 mb-3">
                <video src="<?php echo $latestVideo->getVideoLink() ?>" title="YouTube video" allowfullscreen poster="<?php echo $latestVideo->getThumbnailLink() ?>"></video>
            </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $latestVideo->title ?></h5>
            <p class="card-text">
                Likes: <?php echo $latestVideo->getLikes()->count() ?><br>
                Views: <?php echo $latestVideo->getViews()->count() ?>
                </p>
            <a href="<?php echo Url::to(['/video/update', 'video_id' => $latestVideo->video_id]) ?>" class="btn btn-primary">Edit</a>
        </div>
        <?php else: ?>
            <div class="card-body">
                You dont have uploaded videos yet
            </div>
        <?php endif ?>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title">Total Views</h5>
            <p class="card-text" style="font-size: 48px;">
                <?php echo $numberOfView ?>    
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title">Total Subscribers</h5>
            <p class="card-text" style="font-size: 48px;">
                <?php echo $numberOfSubscribers ?>    
            </p>
        </div>
    </div>
    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title">Latest Subscribers</h5>
            <p class="card-text">
                <?php foreach ($subscribers as $subscriber): ?>  
                    <?php echo $subscriber->user->username ?>
                <?php endforeach; ?>  
            </p>
        </div>
    </div>
</div>