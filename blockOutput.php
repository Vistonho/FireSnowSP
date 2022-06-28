<?php
    function BlockOutput($array, $way){

        if (!empty($_GET["page"]) || !empty($_GET["parentpage"])){
            $page = $_GET["page"];
            $parentpage = $_GET["parentpage"];
        }

        $result = "";
        // Если есть передаваемый параметр есть в ключах элементов главного массива
        // if (array_key_exists($_GET["page"], $array)){
        //     $result = "html/".$array[$_GET["page"]]["file"];
        // }
        // // Если нет, тогда находим этот ключ в массиве vertical_menu каждого элемента
        // else{
        //     // foreach ($array as $key => $value){
        //     //     if (array_key_exists($_GET["page"], $array[$key]["vertical_menu"])){
        //     //         if (!isset($array[$key]["vertical_menu"][$_GET["page"]]["file"]) || empty($array[$key]["vertical_menu"][$_GET["page"]]["file"])){
        //     //             echo "Страница находится в разработке!";
        //     //             exit;
        //     //         }
        //     //         else{
        //     //             $result = "html/".$array[$key]["vertical_menu"][$_GET["page"]]["file"];
        //     //         }
        //     //         break;
        //     //     }
        //     // }
        //     if (array_key_exists($_GET["page"], $array[$way]["vertical_menu"])){
        //         if (!isset($array[$way]["vertical_menu"][$_GET["page"]]["file"]) || empty($array[$way]["vertical_menu"][$_GET["page"]]["file"])){
        //             echo "Страница находится в разработке!";
        //             exit;
        //         }
        //         else{
        //             $result = "html/".$array[$way]["vertical_menu"][$_GET["page"]]["file"];
        //         }
        //     }
        // }
        if (array_key_exists($page, $array)){
            $result = "html/".$array[$page]["file"];
        }
        else{
            
            if (!file_exists("html/".$array[$parentpage]["vertical_menu"][$page]["file"]) || !isset($array[$parentpage]["vertical_menu"][$_GET["page"]]["file"]) || empty($array[$parentpage]["vertical_menu"][$_GET["page"]]["file"])){
                echo "Страница находится в разработке!";
                exit;
            }
            else{
                $result = "html/".$array[$parentpage]["vertical_menu"][$page]["file"];
            }
        }

        return file_get_contents($result);

    }
