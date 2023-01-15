<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  <form action="create" method="POST">
    @csrf
    <input type="text" name="todo">
    <input type="submit" value="追加">
  </form>
  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    {{-- @if (@isset($todo)) --}}
    @foreach ($todos as $todo)
    <tr>
      <td>{{$todo->updated_at}}</td>
      <form action="update" method="POST">
        @csrf
        <td><input type="text" name="todo" value="{{$todo->todo}}"></td>
        <td><input type="submit" value="更新"></td>
        <!-- idをコントローラーに渡せていない？ルーティングもおかしい -->
      </form>
      <form action="delete" method="POST">
        @csrf
        <td><input type="submit" value="削除"></td>
        <!-- idをコントローラーに渡せていない？ -->
      </form>
    </tr>
    {{-- @endif --}}
    @endforeach
  </table>
</body>
</html>