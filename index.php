<?php
// require_once('./core/Test.php');
// $configJson = file_get_contents('./config.json');
// $config = json_decode($configJson, true);

// $test = new \Core\SQLConnector();
// echo '$test value: ', $test->value;

echo '<pre>', var_dump($_POST), '</pre>';
if (!empty($_POST['new-task'])) {
  $newTask = $_POST['new-task'];

} else if (!empty($_POST['sort-by'])) {
  $sortBy = $_POST['sort-by'];

}

// if ()

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>hw-4-2</title>
</head>
<body style="margin: 0 auto; width: 960px;">

<h1>Список дел:</h1>
  
<div style="display: flex; justify-content: space-around;">
  <form method="POST">
    <input type="text" name="new-task" placeholder="Описание задачи">
    <input type="submit" placeholder="Добавить">
  </form>


  <form method="POST">
    <input type="text" name="new-task" placeholder="Описание задачи">
    <input type="submit" placeholder="Добавить">
  </form>
</div>

<table style="width: 100%">
  <thead style="background-color: #bfbfbf;">
    <tr>
      <td>Описание задачи</td>
      <td>Дата добпаления</td>
      <td>Статус</td>
      <td></td>
    </tr>
  </thead>

  <tbody>
    <?php foreach($taskData as $task): ?>
      <tr>
        <td><?php echo $task['title'];?></td>
        <td><?php echo $task['date'];?></td>
        <td><?php echo $task['status'];?></td>
        <td>
          <a href="?id=<?php $task['id']?>&action=change">Изменить</a> 
          <a href="?id=<?php $task['id']?>&action=done">Выполнить</a>
          <a href="?id=<?php $task['id']?>&action=delete">Удалить</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>