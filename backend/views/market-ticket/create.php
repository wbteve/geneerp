<?php

$this->title = '新增代金券';
$this->params['breadcrumbs'][] = ['label' => '代金券列表', 'url' => ['index']];
echo $this->render('_form', ['model' => $model]);
