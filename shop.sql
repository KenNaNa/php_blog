CREATE TABLE goods (
 goods_id int(10) unsigned NOT NULL AUTO_INCREMENT,
 goods_sn char(15) NOT NULL DEFAULT '' ,
 cat_id smallint(6) NOT NULL DEFAULT 0,
 brand_id smallint(6) NOT NULL DEFAULT 0,
 goods_name varchar(60) NOT NULL DEFAULT '' ,
 shop_price decimal(9, 2) NOT NULL DEFAULT 0.00,
 market_price decimal(9, 2) NOT NULL DEFAULT 0.0,
 goods_number smallint(6) NOT NULL DEFAULT 11,
 click_count mediumint(9) NOT NULL DEFAULT 0,
 goods_weight decimal(6, 3) NOT NULL DEFAULT 0.000,
 goods_brief varchar(100) NOT NULL DEFAULT '' ,
 goods_desc text NOT NULL,
 thumb_img varchar(100) NOT NULL DEFAULT '' ,
 goods_img varchar(100) NOT NULL DEFAULT '' ,
 ori_img varchar(100) NOT NULL DEFAULT '' ,
 is_on_sale tinyint(4) NOT NULL DEFAULT 1,
 is_delete tinyint(4) NOT NULL DEFAULT 0,
 is_best tinyint(4) NOT NULL DEFAULT 0,
 is_new tinyint(4) NOT NULL DEFAULT 0,
 is_hot tinyint(4) NOT NULL DEFAULT 0,
 add_time int(10) unsigned NOT NULL DEFAULT 0,
 last_update int(10) unsigned NOT NULL DEFAULT 0,
PRIMARY KEY ( goods_id ) ,
UNIQUE KEY goods_sn ( goods_sn )
) ENGINE=MyISAM CHARSET=utf8;

CREATE TABLE cat (
 cat_id int(11) NOT NULL AUTO_INCREMENT,
 cat_name varchar(20) NOT NULL DEFAULT '' ,
 intro varchar(100) NOT NULL DEFAULT '' ,
 parent_id int(11) NOT NULL DEFAULT 0,
 PRIMARY KEY ( cat_id )
) ENGINE=MyISAM CHARSET=utf8;