<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technical Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Tamatem
            </a>
        </div>
    </nav>
    <div class="container">
        <?php
        $folderPath = '../public/assets/files/'; // Replace with the actual folder path

        // Check if the folder path exists and is a directory
        if (is_dir($folderPath)) {
            $files = scandir($folderPath); 
            ?>
            <ul class="list-group">
            <?php
            // Loop through the files and directories
            foreach ($files as $file) {
                $counter = 0;
                if (is_dir('../public/assets/files/' . $file)) {

                    $filesInFolder = scandir('../public/assets/files/' . $file);

                    // Loop through the files and directories
                    foreach ($filesInFolder as $fileInFolder) {
                        if($fileInFolder != '.' && $fileInFolder != '..'){
                            $counter++;
                        }

                    }
                }

                if($file != '.' && $file != '..'){
                ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $file;?>
                        <span class="badge bg-primary rounded-pill"><?php echo $counter;?></span>
                    </li>    
                <?php
                }
            }
            ?>
            </ul>
            <?php
        } else {
            echo "Invalid folder path." . PHP_EOL;
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>