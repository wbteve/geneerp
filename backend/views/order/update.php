<?php

$this->title = '编辑订单';
$this->params['breadcrumbs'][] = ['label' => '订单列表', 'url' => ['index']];
echo $this->render('_form', ['model' => $model]);
