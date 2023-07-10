<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slack Notification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/slack.css') }}">
</head>

<body>
<form action="{{ url('slack') }}" method='POST'>
    @csrf
    <div class="form-group">
        <p>名前</p>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">

        <p>メッセージ</p>
        <input type="textarea" name="message" value="{{ old('message') }}" class="form-control message">

        <p><input type="submit" value="送信" class="btn"></p>
    </div>
</form>

@if (Session::has('success'))
<div class="session">
    <p class="bg-warning text-center">{{ Session::get('success')}}</p>
</div>
@endif

</body>
</html>
