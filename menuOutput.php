<?php
    function MenuOutput($array, $direction = "h", $parentpage = ""){

        $result = "<div class='universal-menu-$direction'>";

        if (!empty($parentpage)){
            $parentpage = "&parentpage=".$parentpage;
        }

        foreach($array as $key => $elem){
            $result .= "<div class='menu-point'><p><a href='?page=".$key.$parentpage."'>".$elem["page"]."</a></p></div>";
        }

        $result .= "</div>";

        return $result;
    }
