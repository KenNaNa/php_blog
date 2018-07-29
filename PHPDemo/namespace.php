<?php  
namespace MyProject;  
	// MyProject1 命名空间中的PHP代码  
 
// namespace MyProject2;  
// 	// MyProject2 命名空间中的PHP代码    
 
// 	// 另一种语法
// namespace MyProject3 {  
// 	 // MyProject3 命名空间中的PHP代码    
// }  
?>	

<?php  
// 	namespace MyProject1{

// 	};  
// // MyProject1 命名空间中的PHP代码  
 
// 	namespace MyProject2{
		
// 	};  
// MyProject2 命名空间中的PHP代码    
 
// 另一种语法
namespace MyProject3 {  
 // MyProject3 命名空间中的PHP代码    
}  
?>
<p>在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。</p>
<?php
	declare(encoding='UTF-8'); //定义多个命名空间和不包含在命名空间中的代码
	namespace MyProject {

		const CONNECT_OK = 1;
		class Connection { /* ... */ }
		function connect() { /* ... */  }
	}

	namespace { // 全局代码
		session_start();
		$a = MyProject\connect();
		echo MyProject\Connection::start();
	}
?>