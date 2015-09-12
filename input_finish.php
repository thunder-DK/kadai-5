<!DOCTYPE>
<html lang="ja">
    <head>
        <title>回答ありがとうございました！</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style-1.css">
    </head>
    <body>
        <div id="container">
            <h3>アンケートにお答えいただきありがとうございました！</h3>
            
            <?php
                if (isset($_GET['submit-p'])) {
                    session_start();
                    
                    $cName = $_SESSION["name"];
                    $cEmail = $_SESSION["email"];
                    $cAge = $_SESSION["age"];
                    $cSex = $_SESSION["sex"];
                    $cHobby = $_SESSION["hobby"];
                    $cArea = $_SESSION["tarea"]; 
                    
                    $cchobby = implode("/", $cHobby);
                    
                    $array_personal = array($cName, $cEmail, $cAge, $cSex, $cchobby, $cArea);
                    
                    //header('Content-Type: application/octet-stream');
                    // header('Content-Disposition: attachment; filename=data.csv');

                    $fp = fopen("data/Questionnaire.csv","a");
                    
                    //ロック
                    flock($fp,LOCK_EX);

                    if($fp){
                        $line = fputcsv($fp, $array_personal)."\n";
                        mb_convert_variables("UTF-8", "SJIS", $line);
                    }

                    //ロック解除
                    flock($fp,LOCK_UN);

                    //閉じる
                    fclose($fp);
                
                    // exit;
                    
                }elseif (isset($_GET['return-p']) ){
                    exit;
                }
            ?>
            
            <div id="confirm-button">
                <form action="index.php" method="get">
                    <input type="submit" value="確認" name="f-confirm">
                </form>
            </div>
        </div>
    </body>
</html>