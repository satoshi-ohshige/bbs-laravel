<!DOCTYPE html>
<html>
  <head>
    <title>投稿</title>
  </head>
  <body>
    <h1>ここは投稿ページです</h1>
    <form action="/threads/create" method="post">
      @csrf
      <label>
        タイトル：<input type="text" name="title">
      </label>
      <label>
        本文：<input type="text" name="body">
      </label>
      <button type="submit" >投稿</button>
    </form>
  </body>
</html>
