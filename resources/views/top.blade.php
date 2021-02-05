@php
// @var \Bbs\Domain\Thread[] $threads
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>掲示板トップ</title>
</head>
<body>
@foreach($threads as $thread)
  <h1>{{ $thread->getTitle() }}</h1>
  <p>{{ $thread->getBody() }}</p>
@endforeach
</body>
</html>
