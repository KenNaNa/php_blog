<?php
    $checkmail="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";//定义正则表达式
    if(isset($_POST['email']) && $_POST['email']!=""){			//判断文本框中是否有值
        $mail=$_POST['email'];  									//将传过来的值赋给变量$mail
        if(preg_match($checkmail,$mail)){						//用正则表达式函数进行判断
           echo "<script> //给出提示
				alert('电子邮箱格式正确');
				// location='./front.html';
           </script>";
        }else{
           echo "<script>
				alert('电子邮箱格式不正确');
				// location='./front.html';
           </script>";
        }
    }
?>
