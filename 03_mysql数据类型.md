数据库数据类型

```
从速度方面考虑，要选择固定的列，可以使用CHAR类型
要节省空间，使用动态的列，可以使用varchar类型
要将列中的内容限制在一种选择可以使用enum类型
允许在一个列中有多余一个的条目，可以使用set类型
如果要搜索内容不区分大小写，可以使用text类型
如果要搜索的内容区分大小写，可以使用blob类型
```

```
创建数据表
设置默认引擎
create table db_booktype(
  id int(10) unsigned not null,
  typename varchar(30),
  days int(10) unsigned
)engine=MyISAM;
```

设置自增类型字段
```
create table tb_booktype(
  id int(10) auto_increament,-->设置自动自增字段
  typename varchar(30),
  days int(10) unsigned
  PRIMARY KEY(`id`) --->设置主键
);
```

设置字符集
```
create table tb_booktype(
  id int(10) auto_increament,-->设置自动自增字段
  typename varchar(30),
  days int(10) unsigned
  PRIMARY KEY(`id`) --->设置主键
)DEFAULT CHARSET = GBK;
```

复制表结构
```
create table tb_bookinfo like tb_booktype;
查看数据表结构
desc tb_bookinfo
desc tb_booktype

查询表的内容
select * from tb_booktype

如果在复制表结构的同时也想复制他的内容
create table tb_bookinfo as select * from tb_booktype
select * from tb_bookinfo

在复制表的同时，也复制表的数据，但是新复制出来的数据表并不包含原表中设置的主键，自动标号等内容
create table tb_bookinfo like tb_booktype ;
insert into tb_bookinfo select * from tb_booktype;

```
