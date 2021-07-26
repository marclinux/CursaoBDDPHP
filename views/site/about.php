<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Esta es la pagina de acerca de. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
