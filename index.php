<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>思い出</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>思い出</h1>
        <form action="write1.php" method="post" class="form">
            <div class="form-group">
                <label for="name">仮名</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="memo1">人生でそこそこ滑った瞬間</label>
                <textarea id="memo1" name="memo1" cols="40" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label for="memo2">わざわざ人に言うまでもない、少しだけ困っていること</label>
                <textarea id="memo2" name="memo2" cols="40" rows="10" required></textarea>
            </div>

            <button type="submit" class="btn">送信</button>
        </form>
    </div>
</body>
</html>