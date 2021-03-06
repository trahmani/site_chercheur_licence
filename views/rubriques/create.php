
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rubrique */


$this->title = 'Create Rubrique';
$this->params['breadcrumbs'][] = ['label' => 'Rubriques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubrique-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelR' => $modelR,
        'modelM' => $modelM,
    ]) ?>

</div>
