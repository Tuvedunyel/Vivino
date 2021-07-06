<?php 

require_once(dirname(__DIR__) . 'models/Wine.php');

$model = new Wines();

$sql = $model->list();

