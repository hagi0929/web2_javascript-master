<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="colors.js"></script>
</head>
<body>
<?php
$path = './articles';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
$i = 0;
foreach ($files as $file) {
    $i++;
    echo "<a href='#' onclick='fetchAndDisplay(\"" . $path . "/" . $file . "\")'>" . $i . ".$file</a><br>";
}
?>
<script>
    fetch('list').then(function(response) {
            if (response.status == '404') {
                alert('File Not Found');
            } else {
                response.text().then(function (lst) {
                    for (let row of lst.split(',')) {
                        console.log(row)
                        document.getElementById('articulo').innerHTML = toString() + "<h1>"+row+"<h2>";
                    }
                })
            }

        })
</script>
<article id="articulo">

</article>
</body>
</html>