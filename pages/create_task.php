<?php
// require_once ("{$_SERVER['DOCUMENT_ROOT']}/web1_g1_test/database/models/TaskModel.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}/database/models/TaskModel.php");
// get data from form
//echo "hola";    
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
echo $date;
if (!empty($task) || !empty($description) || !empty($date)) {
    // database connection
    $taskModel = new TaskModel();
    $taskModel->insert($task, $description, $date);
    $pageToRedirect = "/pages/list_tasks.php";
    header("Location: {$pageToRedirect}");
    exit;
} else {
    echo "Todos los campos deben estar llenos";
}
