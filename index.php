<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./s.css">
    <title>買い物アプリ</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label>値段
            <div class="price">
                <input type="number" name="1" placeholder="単位はなしで"><br>
                <input type="number" name="2"><br>
                <input type="number" name="3"><br>
                <input type="number" name="4"><br>
                <input type="number" name="5"><br>
            </div>
        </label>
        <label>ポイント割合
            <div class="point"><input type="number" name="point" placeholder="小数点で"></div>
        </label>
        <input type="submit" value="記録" class="submit">
    </form>
    <a href="index.html">トップページに戻る</a>
</body>
</html>
