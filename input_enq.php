<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>アンケートに答えましょう！</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style-1.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="container">
            <h1>アンケートフォーム</h1>
            
            <form action="confirm_enq.php" method="get">
                <table>
                    <tr>
                        <td><label>氏名：</label></td>
                        <td><input type="text" name="name" id="name" size="80" autofocus required></td>
                    </tr>
                    <tr>
                        <td><label>E-mail：</label></td>
                        <td><input type="email" name="email" id="email" size="80" required></td>
                    </tr>
                    <tr>
                        <td><label>年齢：</label></td>
                        <td><input type="text" name="age" id="age" required></td>
                    </tr>
                    <tr>
                        <td><label>性別：</label></td>
                        <td><input type="radio" name="sex" id="sex" value="男性" checked> 男性<br>
                        <input type="radio" name="sex" id="sex" value="女性"> 女性</td>
                    </tr>
                    <tr>
                        <td><label>趣味：</label></td>
                        <td><input type="checkbox" name="hobby-array[]" id="hobby" value="スポーツ" checked> スポーツ<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="読書"> 読書<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="音楽鑑賞"> 音楽鑑賞<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="旅行"> 旅行<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="カラオケ"> カラオケ<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="映画鑑賞"> 映画鑑賞<br>
                            <input type="checkbox" name="hobby-array[]" id="hobby" value="その他"> その他<br>
                        </td>
                    </tr>
                    <tr>
                        <td><label>本サイトについてのご意見：</label></td>
                        <td><textarea name="tarea" id="tarea" cols="80" rows="4">自由にお書き下さい</textarea></td>
                    </tr>
                </table>
                
                
                <input type="submit" value="送信" id="submit2">
            </form>
            
            <form action="index.php" method="get">
                <input type="submit" value="もとの画面に戻る">
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>