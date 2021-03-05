@php
// @var \Bbs\ViewModel\TopViewModel $viewModel
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>掲示板トップ</title>
</head>
<body>
@foreach($viewModel->getThreads() as $thread)
  <a href="/threads/{{$thread->getId()}}">
    <h1>title: {{ $thread->getTitle() }}</h1>
  </a>
  <p>{{ $thread->getBody() }}</p>
@endforeach
<a href="/threads/create">記事投稿</a>
</body>
</html>
