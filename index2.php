<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./s.css">
    <title>ポイントアプリ</title>
</head>
<body>
    <table>
    <tr>
        <th>値段</th>
        <th>ポイント</th>
    </tr>
    <tr>
        <th>
            <?php
                $inputs = [];
                $numInputs = 5; // 入力の数
                for ($i = 1; $i <= $numInputs; $i++) {
                    $inputName = (string)$i;
                    if (isset($_POST[$inputName])) {
                        $inputs[$i] = $_POST[$inputName];
                    } else {
                        $inputs[$i] = 0;
                    }
                };

                $sum = array_sum($inputs);

                print $sum;
            ?>
        </th>
        <th>
            <?php
                function point($sum){
                    if(isset($_POST['point'])){
                        $point = $_POST['point'];
                        $points = $sum * $point;
                        return round($points);
                    }else{
                        $point = '';
                    }
                }
                print point($sum);
            ?>
        </th>
    </tr>
    </table>
    <a href="index.html">トップページに戻る</a>
</body>
</html>
