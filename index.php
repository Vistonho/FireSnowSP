<!-- <pre> -->
<?php
    //var_dump($_SERVER);

    require 'array.php';
    require 'menuOutput.php';
    require 'blockOutput.php';

    if (!empty($_GET["page"]) || !empty($_GET["parentpage"])){
        $page_get = $_GET["page"];
        $parentpage_get = $_GET["parentpage"];
    }

    if (empty($_SERVER["QUERY_STRING"])){
        $header_check = true;
    }
    elseif(!isset($parentpage_get) && !array_key_exists($page_get, $a_menu)){
        $header_check = true;
    }
    elseif(isset($parentpage_get) && (!array_key_exists($parentpage_get, $a_menu) || !array_key_exists($page_get, $a_menu[$parentpage_get]["vertical_menu"]))){
        $header_check = true;
    }

    if ($header_check){
        header('Location: '.$_SERVER["SCRIPT_NAME"].'?page=main');
        exit;
    }

    // if (array_key_exists($page_get, $a_menu) && !empty($parentpage_get)){
    //     header('Location: '.$_SERVER["SCRIPT_NAME"].'?page='.$parentpage_get);
    //     exit;
    // }

    // if (array_key_exists($page_get, $a_menu)){
    //     $parentpage = "";
    // }
    // else{
        $parentpage = $parentpage_get;
    //}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сайт</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
</head>
<body>

    <div class="container">
        <header>
            <div class="row">
                <div class="logo col-sm-3">
                    <div id="block-1">
                        <h1>The X-Files</h1>
                    </div>
                </div>
                <div class="horizontal-menu col-sm-9">
                    <div id="block-2">
                        <?= MenuOutput($a_menu); ?>
                    </div>
                </div>
            </div>
        </header>

        <div class="content row">
            <div class="vertical-menu col-sm-3">
                <div id="block-3">
                    <?php

                        if (array_key_exists($page_get, $a_menu)){
                            $parentpage = $page_get;
                        }

                        echo MenuOutput($a_menu[$parentpage]["vertical_menu"], "v", $parentpage);

                    ?>
                </div>
            </div>
            <div class="main-block col-sm-9">
                <div id="block-4">
                    <?php

                        // if (array_key_exists($page_get, $a_menu)){
                        //     echo BlockOutput($a_menu, $page_get);
                        // }
                        // else{
                        //     echo BlockOutput($a_menu, $parentpage);
                        // }

                        echo BlockOutput($a_menu, $parentpage);

                    ?>
                </div>
            </div>
        </div>

    </div>

    <script type="js/jquery.min.js"></script>

</body>
</html>