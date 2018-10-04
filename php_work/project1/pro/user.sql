-- 创建user数据表

create table user(
	id int primary key auto_increment not null, # 将id作为主键 自动增加
	name varchar(20) not null, # name 字段 类型为 varchar
	email varchar(100) not null # Email 字段 类型为 varchar
)charset=utf8;