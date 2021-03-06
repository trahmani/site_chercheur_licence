<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publication-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publication', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'reference:ntext',
            'auteurs:ntext',
            'titre:ntext',
            'date',
            // 'journal:ntext',
            // 'volume:ntext',
            // 'number:ntext',
            // 'pages:ntext',
            // 'note:ntext',
            // 'abstract:ntext',
            // 'keywords:ntext',
            // 'series:ntext',
            // 'localite:ntext',
            // 'publisher:ntext',
            // 'editor:ntext',
            // 'pdf:ntext',
            // 'date_display:ntext',
            // 'categorie_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<form enctype="multipart/form-data" action="/site-enseignant-chercheur/web/index.php?r=publication/bibtex" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<input type="hidden" name="_csrf" value="VWkweGZyVDkhHFoUKTQWThwjCSEyJmcNIQEHLxwdYBQQWEoRXzoWVQ==">
<p>Uploader un BibTeX : <input type="file" name="uploadbibtex" /></p>
<p><input type="submit" value="Envoyer le fichier"></p>
</form>


</div>
