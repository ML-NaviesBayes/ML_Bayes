<?php
include('model/database.php');
include('model/crawl.php');
include('model/document.php');
include('model/handle.php');
include('model/keyword.php');
include('model/keyword2.php');

//goi ham 

create_table_crawl();
create_document();
insert_document();
create_keywords();
insert_keyword();


//insert_keyword2();

// $a='hoang an com an';
// // $b='hoang y com'
//a();
//print_r (explode(' ', a()));
// foreach($b as $c){
//     echo $c; 
// }


 //$r= reg('Dịch trên note 8 tệ. Nhiều câu không đúng nghĩa, thành kí tự. Và không nhiều ngôn ngữ như giới thiệu');
// $a='hoàng ăn cơm';
// echo mb_strtolower($r);
//echo $r;


// $mang="hoang an t";
// $string_stopword_last= array("/ ang /","/an /","/nhỏ người /");
// echo preg_replace($string_stopword_last,' ', $mang); 



// $a=" đẹp,mượt,   Máy rất đẹp,mượt mà,chụp hình rất đẹp,nhưng pin hơi mau hết!nói chung rất ok                        ";
// //echo $a;
// echo reg($a);
// $regex = '/[^(aăâbcdđeêgẲẨẺỂỈỎỔỞỦỬỶÃẴẪẼỄĨÕỖỠŨỮỸẠẶẬẸỆỊỌỘỢỤỰỴ09_)+\s]/';
//echo mb_ereg_replace("/[^(aăâbcdđeêghiklmnoôơpqrstuưvxyàằầèềìòồờùừỳáắấéếíóốớúứýảẳẩẻểỉỏổởủửỷãẵẫẽễĩõỗỡũữỹạặậẹệịọộợụựỵAĂÂBCDĐEÊGHIKLMNOÔƠPQRSTUƯVXYÀẰẦÈỀÌÒỒỜÙỪỲÁẮẤÉẾÍÓỐỚÚỨÝẢẲẨẺỂỈỎỔỞỦỬỶÃẴẪẼỄĨÕỖỠŨỮỸẠẶẬẸỆỊỌỘỢỤỰỴ09_)+\s]/","","hoang @@ an com");

///////////////////
//test keyword2

//create_keywords2();
// create_doc_key();

//insert_keyword2();


?>