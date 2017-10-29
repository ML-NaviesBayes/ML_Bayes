<?php

    function create_document(){
        GLOBAL $db;	
        //
        $Create_Document = "CREATE TABLE Document (
        ID_Document INT(4)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,   
        ID_Crawl INT(4) UNSIGNED NOT NULL,
        Comment_Document Text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
        Rate_Document Int(1) NOT NULL,
        FOREIGN KEY (ID_Crawl) REFERENCES Crawl(ID_Crawl)
        )";
        $db->Query($Create_Document ); 
    };

    function insert_document(){
        GLOBAL $db;	
        $sql = "SELECT ID_Crawl, Comment_Crawl,Rate_Crawl FROM Crawl";
        $result = $db->Query($sql);
        
        while($row = $result->fetch()) { 
                $id_crawl=$row['ID_Crawl'];
                $Star= $row["Rate_Crawl"];
                $comment=$row["Comment_Crawl"];
                $recomment=reg($comment);  
                $cut_space=trim($recomment);
                
                $recomment_stopword=cut_stopword($cut_space);
                $cut_space2= trim($recomment_stopword);
    
                $cut_stopword_sql = "INSERT INTO document (ID_Crawl,Comment_Document,Rate_Document)
                    VALUES ('$id_crawl','$cut_space2','$Star')";
                        
                    
                    
                $db->Query($cut_stopword_sql );    
            }          
    }

    function get_document() {
        global $db;
        $query = 'SELECT * FROM document
                  ORDER BY ID_Crawl';
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement;    
    }
        
?>