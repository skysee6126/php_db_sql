<body>
    <div class="tittle">
        <h2>Bookmark</h2>
        <p>以下のフォームに食料品を追加し、リストから管理して見てください。<br>
        各項目は必要な場合は修正はもちろん削除することもできます。<p>
    </div>
    <div class="content">
	<?php
	// データベースに接続する
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=recipe;charset=utf8", "root", "");
	// print_r($_POST);

	// 受け取ったidのレコードの削除
	if (isset($_POST["delete_id"])) {
		$delete_id = $_POST["delete_id"];
		$sql  = "DELETE FROM recipe WHERE id = :delete_id;";
		$stmt = $pdo->prepare($sql);
		$stmt -> bindValue(":delete_id", $delete_id, PDO::PARAM_INT);
		$stmt -> execute();
	}

	// 受け取ったデータを書き込む
	if (isset($_POST["text"]) && isset($_POST["image"])) {
		$test   = $_POST["text"];
        $image = $_POST["image"];
		$sql  = "INSERT INTO recipe (text, image) VALUES (:text, :image);";
		$stmt = $pdo->prepare($sql);
		$stmt -> bindValue(":text", $text, PDO::PARAM_STR);
		$stmt -> bindValue(":image", $image, PDO::PARAM_STR);
		$stmt -> execute();
	} ?>

    <div class="list">
    <div class="list__tittle">
        <h3>リスト</h3>
    </div>
	<div class="list__content">
        <?php
        // データベースからデータを取得する
        $sql = "SELECT * FROM recipe ORDER BY id;";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        ?>
        <table>
            <tr>
                <th>No.</th>
                <th>タイトル</th>
                <th>写真</th>
            </tr>
            <?php
            // 取得したデータを表示する
            while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["text"] ?></td>
                    <td><?= $row["image"] ?></td>
                            <input type="hidden" name="delete_id" value=<?= $row["id"] ?>>
                            <button type="submit">Delete</i></button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    </div>
</body>