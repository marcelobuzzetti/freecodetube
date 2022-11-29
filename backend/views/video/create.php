<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Video $model */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <?= $this->render('_form', [
                'model' => $model,
            ]) ?> -->

    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload-icon">
            <i class="fas fa-upload"></i>
        </div>
        <br>
        <p class="m-0">Arraste e solte os arquivos de vídeo para fazer o envio</p>
        <p class="text-muted">Seus vídeos ficarão privados até que você os publique.</p>

        <?php \yii\bootstrap5\ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ]
        ]) ?>

        <button class="btn btn-primary btn-file">
            Selecione o arquivo
            <input type="file" name="video" id="videoFile">
        </button>

        <?php \yii\bootstrap5\ActiveForm::end() ?>
    </div>
</div>