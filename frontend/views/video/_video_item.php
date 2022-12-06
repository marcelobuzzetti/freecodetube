<?php

/** @var $model \common\models\Video */
?>

<div class="card" style="width: 18rem;">
    <div class="ratio ratio-16x9 mb-3">
        <video src="<?php echo $model->getVideoLink() ?>" title="YouTube video" allowfullscreen poster="<?php echo $model->getThumbnailLink() ?>"></video>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $model->title ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>