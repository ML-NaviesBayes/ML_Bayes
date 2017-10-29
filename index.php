<?php
include('model/database.php');
include('model/crawl.php');
include('model/document.php');
include('model/handle.php');


create_table_crawl();
create_document();
insert_document();
crawl_data();

// $a='hoang                  an   com           chưa                        ';
// //print_r (explode(" ",$a));
// echo trim($a);

?>