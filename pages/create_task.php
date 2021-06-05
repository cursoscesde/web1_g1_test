<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/database//models/TaskModel.php";
// get data from form
echo require_once "{$_SERVER['DOCUMENT_ROOT']}/database/DBConnection.php";
$task = $_POST['task'];
$description = $_POST['description'];
$date = $_POST['date'];
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
