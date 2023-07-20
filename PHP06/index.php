<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background: #e9ecef;
            font-family: 'Noto Sans JP', sans-serif;
            color: #333;
        }

        .navbar {
            background: #007bff;
        }

        .navbar-brand {
            color: #fff;
        }

        .jumbotron {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #007bff;
        }

        input[type="submit"] {
            background: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-control {
            border: 2px solid #007bff;
            border-radius: 0;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">  <!-- navbar-defaultからnavbar-darkに変更して、テキストを白色にする。また、navbar-expand-lgを追加してレスポンシブ対応 -->
            <a class="navbar-brand" href="select.php">データ一覧</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">  <!-- ml-autoを追加して右寄せにする -->
                    <li class="nav-item"><a class="nav-link" href="login.php">ログイン</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">ログアウト</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="container mt-5">
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>フリーアンケート</legend>
                    <label>名前：<input class="form-control" type="text" name="name"></label><br>
                    <label>Email：<input class="form-control" type="text" name="email"></label><br>
                    <label>年齢：<input class="form-control" type="text" name="age"></label><br>
                    <label>住所：<input class="form-control" type="text" name="address"></label><br>
                    <label>趣味：<input class="form-control" type="text" name="hobby"></label><br>
                    <label><textArea class="form-control" name="naiyou" rows="4" cols="40"></textArea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
    </div>
    <!-- Main[End] -->
</body>

</html>
