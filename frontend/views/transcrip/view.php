<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Transcript */

$this->title = $model->Transcript_Index;
$this->params['breadcrumbs'][] = ['label' => 'Transcripts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transcript-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Transcript_Index], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Transcript_Index], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Transcript_Index',
            'Student_Index',
            'Grade',
            'GPA',
            'Academic_Year',
        ],
    ]) ?>

</div>
