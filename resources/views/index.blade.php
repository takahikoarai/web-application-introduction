<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  <form action="/" method="POST">
    <input type="text" name="todo-add">
    <input type="submit" value="追加">
  </form>
  <form action="/" method="POST">
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <!-- ここに@foreach ($todos as $todo) -->
    </table>
  </form>
</body>
</html>