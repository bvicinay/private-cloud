<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Private Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Private Cloud</h1>
    <table id="files">
        <tr>
            <th>Filename</th>
            <th>Size</th>
        </tr>

    <?php
        $files = scandir('.');
        foreach ($files as $file) {
            echo "<tr>";
            echo "<td>".(string)$file."</td>";
            echo "<td>".(string)filesize($file)."</td>";
            echo "</tr>";
        }
    ?>

    </table>
    
</body>
</html>


