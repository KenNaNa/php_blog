<?php  
	class customException extends Exception{
		public function showError(){
			$error = '错误的行号 '.$this->getLine().' in '.$this->getFile().':'."<br/>".
					 $this->getMessage().'</b> 不是一个合法的 E-Mail 地址';

			return $error;

		}
	}

	$email = "someone@example...com";

	try{
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
			throw new customException($email);
		}
		// 检测 "example" 是否在邮箱地址中
		if(strpos($email, "example") !== FALSE){
			throw new Exception("$email 是 example 邮箱");
		}
	}catch(customException $e){
		echo $e->showError();
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>