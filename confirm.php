<html>

<head>
    <meta charset="utf-8">
    <title>入力欄の作成
    </title>
</head>

<body>
    <h2> 投稿内容の確認 </h2>
    <form method="post" action="">
        <b> ニックネーム: </b> <br>
        <?php echo $_POST["nickname"]; ?>
        <br>
        <b>投稿内容:</b>
        <br>
        <?php echo $_POST["comment"]; ?>
        <br>
        <br>
        <div class="button">
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">送信</button>
        </div>

    </form>
</body>

</html>
