<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
  @foreach ($questions as $question)
  <h2>{{ $question->id}} 、この地名なんて読む？</h2>
      <img src="/img/{{$question->image}} "></img>
      <ul>
        @foreach ($question->choices as $choice)
        <li>
          {{$choice->name}}
        </li>
        @endforeach
      </ul>
  @endforeach
  <!-- // 最後は endforeach と；（セミコロン）で閉じる -->
  </div>
</body>
</html>