<!DOCTYPE HTML>
<heml lange="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <from action="/posts{{ $post->id }}" method="Post">
                @csrf
                @method('PUT')
                <div class='content_title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title}}">
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class='content_body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body}}">
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="保存">
            </from>
        </div>
    </body>
</heml>