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
  <a href="/threads/{{$thread->getId()}}">
    <h1>title: {{ $thread->getTitle() }}</h1>
  </a>
  <p>{{ $thread->getShortBody(2) }}</p>
@endforeach
<a href="/threads/create">記事投稿</a>
</body>
</html>
