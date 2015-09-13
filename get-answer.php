<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>回答結果確認</title>
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
            <h3>アンケート結果の一覧となります</h3>
            
            <?php
                // 読み込むファイル名の指定
                $file_name = "data/Questionnaire.csv";
                // ファイルポインタを開く
                $fp = fopen($file_name,'r');

                // データが無くなるまでファイル(CSV)を１行ずつ読み込む
                while($ret_csv = fgetcsv($fp,256)) {
                    
                    // 読み込んだ行(CSV)を表示する
                    for($i = 0; $i < count( $ret_csv ); ++$i ){
                      echo("[".$ret_csv[$i]."]");
                    }
                    
                    echo("<br />");
                }

                // 開いたファイルポインタを閉じる
                fclose( $fp );
            ?>
            
            <div id="confirm-button">
                <form action="index.php" method="get">
                    <input type="submit" value="元に戻る">
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>