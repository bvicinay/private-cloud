<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Private Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <img id="logo" src="B_transparent_vector_square.svg" alt="Borja Vicinay">
    <h1>Private Cloud</h1>
    <h2>All Files</h2>
    <table id="files">
        <tr id="table-header">
            <th>Name</th>
            <th>Modified</th>
            <th>Size (bytes)</th>
            <th> </th>
        </tr>

    <?php
        $path = 'files';
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file === "." || $file === "..") {
                continue;
            }

            echo "<tr>";
            if (is_dir($path.'/'.$file)) {
                echo "<td class='folder'>".(string)$file."</td>";
            } else {
                echo "<td>".(string)$file."</td>";
            }
            echo "<td>".(string)date("M d Y H:i:s.",filemtime($path.'/'.$file))."</td>";
            echo "<td>".(string)filesize($path.'/'.$file)."</td>";
            
            echo "<td><img class='share-btn' src='share-symbol.svg'></td>";
            echo "</tr>";
        }
    ?>

    </table>

    <div id="btn-tray">
        <button>Upload File</button>
    </div>

    <div id="copy-clipboard">
        <input type="text" id="clip">
    </div>
    
</body>
</html>


