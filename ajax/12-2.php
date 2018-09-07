<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*print_r($_FILES);
print_r($_POST);
*/

echo move_uploaded_file($_FILES['pic']['tmp_name'], './xx.mp4') ? 'ok' : 'fail';

?>