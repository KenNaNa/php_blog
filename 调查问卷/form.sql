-- 创建数据表
-- 根据表单数据创建
create table form (
	id int primary key not null auto_increment,
	sex varchar(4) not null,
	num varchar(20) not null,
	username varchar(20) not null,
	phone varchar(11) not null,
	english varchar(10) not null,
	chinese varchar(10) not null,
	cantonese varchar(10) not null,
	computer varchar(10) not null,
	height varchar(10) not null,
	hobby varchar(100) not null,
	aim varchar(100) not null,
	place varchar(100) not null,
	work varchar(100) not null,
	pay varchar(100) not null
);