<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Główna strona</title>
    <link rel="stylesheet" href="../index.css">
    <script src="../index.js"></script>
</head>
<body>
<button onclick="setLightMode()" class="change-mode-light">☼</button>
<button onclick="setDarkMode()" class="change-mode-dark">◑</button>
<nav style="height: 50px" class="main-nav">
    <ul>
        <li @class(['selected' => str_contains(url()->current(), 'index')])><a href="../index.html">Główna strona</a></li>
        <li @class(['selected' => str_contains(url()->current(), 'about')])><a href="../about.html">O projekcie</a></li>
    </ul>
</nav>
<button onclick="topFunction()" class="back-to-top" title="Wróć na początek">^</button>
<div class="main-container">
    <div class="comment-container">
        <form style="padding: 25px; width: 80%" action="comments" method="post">
            <label>
                <span>Komentarz:</span><br>
                <textarea style="width: 100%; margin-bottom: 10px" name="content" required maxlength="65536"></textarea>
            </label>
            <div style="display: flex">
                <label style="padding-top: 20px">
                    <span>Wyświetlana nazwa:</span><br>
                    <input name="name" type="text" placeholder="Anonimowo" maxlength="256" style="margin-bottom: 10px">
                </label>
                <input type="hidden" name="page" value="{{explode('/', \Illuminate\Support\Facades\Request::path())[0]}}">
                <div style="flex-grow: 1; display: flex; justify-content: flex-end">
                    <button type="submit" style="align-self: flex-end" class="add-comment-button">Dodaj</button>
                </div>
            </div>
            <div class="error-container">
            @if (isset($errors) && count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            </div>
        </form>
        <div>
        @foreach($comments as $comment)
            <div class="comment-item-container">
                <span>{{$comment->name ?: 'Anonim'}}</span>
                <p>{{$comment->content}}</p>
            </div>
        @endforeach
        </div>
    </div>
</div>
</body>
</html>
