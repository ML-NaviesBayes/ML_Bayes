<?php

    function create_keywords(){
        GLOBAL $db;	
        //
        $Create_Document = "CREATE TABLE keywords (
        ID_key INT(4)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
        Keyword VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
        UNIQUE (Keyword)
        )";
        
        $db->Query($Create_Document ); 
    };

    function insert_keyword(){
        GLOBAL $db;

        $query = 'SELECT * FROM document ';      

        $result = $db->Query($query);
        while($row = $result->fetch()) { 
            
            $comment=$row["Comment_Document"];
            $result2 = array_unique(explode(" ",$comment));
            print_r($result2);
            foreach($result2 as $c){
                echo $c."<br>";
                $sql="INSERT  INTO keywords(Keyword) VALUES ('$c')";
                $db->Query($sql ); 
            }

        }  
    }
    // function insert_keyword2(){
    //     GLOBAL $db;
       
    //     $a='hoàng ăn cơm chưa ăn uuuu';
    //     $c='hoàng ăn cơm chưa ăn uuuu eee';
    //     $b=array_unique(explode(" ",$c));
    //     foreach($b as $c){
            
    //         $sql="INSERT IGNORE INTO keywords(Keyword) VALUES ('$c')";
    //         $db->Query($sql ); 
    //     }
      
    //     //$result = $db->Query($a);
       

    // }  
        
       
    

   
        
?>