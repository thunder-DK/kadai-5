<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アンケート結果</title>
        <link rel="stylesheet" href="css/style-1.css">
    </head>
    <body>
        <div id="container">
            <h2>アンケートにお答えいただき、ありがとうございました。</h2>
            <p align="center">記載内容に誤りがないかご確認ください。</p>
            
            <dl>
                <dt>氏名：</dt>
                <dd><?php print $_GET["name"]; ?></dd>
                <dt>Email：</dt>
                <dd><?php print $_GET["email"]; ?></dd>
                <dt>年齢：</dt>
                <dd><?php print $_GET["age"]; ?></dd>
                <dt>性別：</dt>
                <dd><?php print $_GET["sex"]; ?></dd>
                <dt>趣味：</dt>
                <dd>
                    <?php
                        $arr_hobby = $_GET["hobby-array"];
                        for($i=0; $i<sizeof($arr_hobby); $i++){
                            print "${arr_hobby[$i]}"."/";
                        }
                    ?>
                </dd>
                <dt>何かあれば：</dt>
                <dd><?php print $_GET["tarea"]; ?></dd>
            </dl>
            
            <?php
                session_start();
                $_SESSION["name"] = $_GET["name"];
                $_SESSION["email"] = $_GET["email"];
                $_SESSION["age"] = $_GET["age"];
                $_SESSION["sex"] = $_GET["sex"];
                $_SESSION["hobby"] = $_GET["hobby-array"];
                $_SESSION["tarea"] = $_GET["tarea"];
            
            ?>
            <div id="confirm-button">
                <form action="input_finish.php" method="get">
                    <input type="submit" value="確認" name="submit-p">
                    <input type="submit" value="元の画面に戻る" name="return-p">
                </form>
            </div>
        </div>
    </body>
</html>