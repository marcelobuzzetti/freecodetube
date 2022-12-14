<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-light bg-light shadow-sm',
    ],
]);
$menuItems = [
    /*   ['label' => 'Create', 'url' => ['/site/index']], */];
/* if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} */
?>
<form action="<?php echo Url::to(['/video/search'])?>" class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" name="keyword" value="<?php echo Yii::$app->request->get('keyword') ?>">
    <button class="btn btn-outline-success">Search</button>
</form>
<?php
echo Nav::widget([
    'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
    'items' => $menuItems,
]);
if (Yii::$app->user->isGuest) {
    echo Html::tag('div', Html::a('Signup', ['/site/signup'], ['class' => ['nav-link  me-2']]), ['class' => ['d-flex']]);
    echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['nav-link']]), ['class' => ['d-flex']]);
} else {
    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout text-decoration-none']
        )
        . Html::endForm();
}
NavBar::end();
