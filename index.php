<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['value'];
    $output = $_POST['output'];
    $result = explode(" ", $input);
    $index = findMin($result);
}
function findMin($arr) {
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find min</title>
</head>
<body>
    <h2>Find min</h2>
<form method="post">
    <input type="text" name="value" placeholder="Nhap tung phan tu">
    <input type="submit" id="input" value="Nhap">
    <input type="submit" id="output" value="Tim">
    <p>Vi tri phan tu nho nhat la: <?= $index; ?></p>
</form>
</body>
</html>
