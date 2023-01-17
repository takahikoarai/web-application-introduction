<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body>
  <div class="body__inner">
    <h1>Todo List</h1>
    <form action="create" method="POST" class="todo-add">
      @csrf
      <input type="text" name="todo" class="todo-add__input">
      <input type="submit" value="追加" class="todo-add__btn btn">
    </form>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($todos as $todo)
      <tr class="todo-row">
        <td class="todo-date">{{$todo->updated_at}}</td>
        <form action="update" method="POST">
          @csrf
          <td><input type="text" name="todo" value="{{$todo->todo}}" class="todo-name"></td>
          <td>
            <input type="hidden" name="id" value="{{$todo->id}}">
            <input type="submit" value="更新" class="todo-update__btn btn">
          </td>
        </form>
        <form action="delete" method="POST">
          @csrf
          <td>
            <input type="hidden" name="id" value="{{$todo->id}}">
            <input type="submit" value="削除" class="todo-delete__btn btn">
          </td>
        </form>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>