<?php

    function create_keywords(){
        GLOBAL $db;	
        //
        $drop_tb = "DROP TABLE keywords";
        $db->Query($drop_tb);
        //
        $Create_Document = "CREATE TABLE keywords (
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
         FOREIGN KEY (ID_key) REFERENCES keywords (ID_key)
        )";
        
        $db->Query($Create_Document ); 
    };

    function insert_doc_key(){
        GLOBAL $db;
        
        $query = 'SELECT * FROM document ';      

        $result = $db->Query($query);
        while($row = $result->fetch()) { 
            $ID_Document=$row["ID_Document"];
            $comment=$row["Comment_Document"];
            $last_id_doc = $ID_Document;

            $result2 = array_unique(explode(" ",$comment));
           
            foreach($result2 as $c){
        
                $sql="INSERT  INTO keywords(Keyword) VALUES ('$c') ";    
                
                $db->Query($sql );
                $stmt = $db->query("SELECT LAST_INSERT_ID()");
                $last_id_key = $stmt->fetchColumn();
                //
                $sql_doc_key="INSERT  INTO doc_key(ID_Document,ID_key) VALUES ('$last_id_doc','$last_id_key')";
                $db->Query($sql_doc_key ); 

                // echo $last_id_key."---".$c;

            }

        }  
        
    };
  


   
        
?>