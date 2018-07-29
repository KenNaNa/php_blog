check.php 定义两个函数用来获取文件扩展名
和生成随机文件名

upload.php
用来判断用户上传的文件，
把图片上传到服务器上
首先使用$_FILES预定义变量，以获取用户提交的图片文件信息，
其次使用 is_uploaded_file()函数判断图片文件是否是通过HTTP传输的
最后使用move_uploaded_file()函数，保存图片文件到服务器


