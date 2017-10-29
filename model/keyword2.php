<?php

    function create_keywords2(){
        GLOBAL $db;
        //
        $drop_tb = "DROP TABLE keywords2";
        $db->Query($drop_tb);	
        //
        $Create_Document = "CREATE TABLE keywords2 (
        ID_key INT(4)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
        Keyword VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
        UNIQUE (Keyword)
        )";
        
        $db->Query($Create_Document ); 
    };
    function create_doc_key(){
        GLOBAL $db;	
        //
        $Create_Document = "CREATE TABLE doc_key (
         ID_Document int(4) UNSIGNED,
         ID_key int(4) UNSIGNED,
         frequency int(3),
         PRIMARY KEY (ID_Document,ID_key),
         FOREIGN KEY (ID_Document) REFERENCES Document (ID_Document),
         FOREIGN KEY (ID_key) REFERENCES keywords2 (ID_key)
        )";
        
        $db->Query($Create_Document ); 
    };

    // function insert_keyword2(){
    //     GLOBAL $db;        
    //     $query = 'SELECT * FROM document ';
    //     $result_doc = $db->Query($query);
    //     while($row = $result_doc->fetch()) { 
            
    //         $comment=$row["Comment_Document"];

    //         // $last_id_key = $db->lastInsertId();
    //         // echo $last_id_key;

    //         $result2 = array_unique(explode(" ",$comment));
    //         print_r($result2);
    //         foreach($result2 as $c){
    //             echo $c."<br>";
    //             $sql="INSERT  INTO keywords(Keyword) VALUES ('$c')";
    //             $db->Query($sql ); 
    //         }

    //     }  
    // }
    // function insert_keyword2(){
    //     GLOBAL $db;
       
    //     $a='hoàng ăn cơm chưa ăn uuuu';
    //     $c='hoàng ăn cơm chưa ăn uuuu eee';
    //     $b=array_unique(explode(" ",$c));
    //     foreach($b as $c){
            
    //         $sql="INSERT IGNORE INTO keywords2  (Keyword) VALUES ('$c')";
    //         $last_id_key = $db->lastInsertId();
    //         echo $last_id;
    //         $db->Query($sql ); 
    //     }
    // };

      
        //$result = $db->Query($a);

        // INSERT INTO document (ID_Crawl,Comment_Document) VALUES (1,'sang');
        // SET @ID_Document = LAST_INSERT_ID();
        
        // INSERT IGNORE INTO keywords2 (Keyword) VALUES ('b');
        // SET @ID_key = LAST_INSERT_ID();
        // INSERT INTO doc_key (ID_Document,ID_key) VALUES(@ID_Document, @ID_key);
        
        // INSERT IGNORE INTO keywords2 (Keyword) VALUES ('c');
        // SET @ID_key = LAST_INSERT_ID();
        // INSERT INTO doc_key (ID_Document,ID_key) VALUES(@ID_Document, @ID_key);
        
        // INSERT IGNORE INTO keywords2 (Keyword) VALUES ('c');
        // SET @ID_key = LAST_INSERT_ID();
        // INSERT INTO doc_key (ID_Document,ID_key) VALUES(@ID_Document, @ID_key);

 
        
       
    

   
        
?>