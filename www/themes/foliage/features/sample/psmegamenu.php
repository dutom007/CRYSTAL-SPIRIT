<?php 
$query_tables = array();
$query_sql = array();
$query_tables['psmegamenu']['psmegamenu'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu` (
  `id_psmegamenu` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `is_group` tinyint(1) NOT NULL,
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `alignment` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `is_content` tinyint(1) NOT NULL,
  `show_title` tinyint(1) NOT NULL,
  `type_submenu` varchar(10) NOT NULL,
  `level_depth` smallint(6) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `submenu_content` text NOT NULL,
  `show_sub` tinyint(1) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(6) DEFAULT NULL,
  `position_type` varchar(25) DEFAULT NULL,
  `menu_class` varchar(25) DEFAULT NULL,
  `content` text,
  `icon_class` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `submenu_catids` text,
  `is_cattree` tinyint(1) DEFAULT \'1\',
  `date_add` datetime DEFAULT NULL,
  `date_upd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_psmegamenu`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_lang'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_lang` (
  `id_psmegamenu` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `description` text,
  `content_text` text,
  `submenu_content_text` text,
  PRIMARY KEY (`id_psmegamenu`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_shop'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_shop` (
  `id_psmegamenu` int(11) NOT NULL DEFAULT \'0\',
  `id_shop` int(11) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id_psmegamenu`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_widgets'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_widgets` (
  `id_widget` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `id_shop` int(11) NOT NULL,
  `key_widget` int(11) NOT NULL,
  PRIMARY KEY (`id_widget`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


/*DATA FOR TABLE psmegamenu*/
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'1\', \'\', \'0\', \'0\', \'\', \'\', \'\', \'\', \'\', \'3\', \'1\', \'category\', \'0\', \'1\', \'menu\', \'1\', \'1\', \'0\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2015-08-12 23:03:48\', \'2015-08-12 23:03:48\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'2\', \'\', \'1\', \'0\', \'\', \'300px\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'9\', \'2\', \'1\', \'0\', \'\', \'0\', \'index.php\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:26:01\', \'2017-04-27 04:07:50\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'3\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-fullwidth\', \'\', \'\', \'12\', \'1\', \'category\', \'0\', \'1\', \'3\', \'2\', \'1\', \'1\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:26:52\', \'2016-12-05 05:31:53\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'4\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-fullwidth\', \'\', \'\', \'13\', \'1\', \'category\', \'0\', \'1\', \'11\', \'2\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:27:44\', \'2016-12-05 05:32:14\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'5\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'3\', \'\', \'0\', \'sitemap\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:28:35\', \'2016-11-10 02:03:07\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'6\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'4\', \'\', \'0\', \'list&fc=module&module=psblog\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:29:20\', \'2016-12-05 05:26:39\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'7\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'5\', \'\', \'0\', \'contact\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-08-31 04:29:50\', \'2016-08-31 04:29:50\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'8\', \'\', \'5\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'3\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'0\', \'\', \'0\', \'#\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:22:56\', \'2016-12-15 23:10:21\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'9\', \'\', \'5\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'6\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:25:48\', \'2016-12-14 05:07:03\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'10\', \'\', \'9\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'7\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'0\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:26:17\', \'2016-12-15 21:13:48\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'11\', \'\', \'5\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'1\', \'\', \'0\', \'#\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:26:43\', \'2016-12-15 23:10:53\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'12\', \'\', \'5\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'4\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'3\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:27:09\', \'2016-12-15 02:30:21\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'13\', \'\', \'9\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'6\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'1\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-09-27 06:27:36\', \'2016-12-15 02:06:51\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'14\', \'\', \'11\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'1\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'0\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:25:07\', \'2016-11-28 02:25:07\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'16\', \'\', \'11\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'3\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'1\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:28:17\', \'2016-11-28 02:28:17\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'18\', \'\', \'11\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'4\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:29:59\', \'2016-11-28 02:29:59\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'19\', \'\', \'8\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'0\', \'\', \'0\', \'new-products\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:31:52\', \'2016-11-28 02:32:04\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'20\', \'\', \'8\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'1\', \'\', \'0\', \'best-sales\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:32:56\', \'2016-11-28 02:32:56\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'21\', \'\', \'8\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'4\', \'1\', \'2\', \'\', \'0\', \'prices-drop\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-11-28 02:34:01\', \'2016-11-28 02:34:01\')'; 
/*DATA FOR TABLE psmegamenu_lang*/
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'1\', \'_LANGUAGEID_\', \'Root\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'2\', \'_LANGUAGEID_\', \'Home\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'3\', \'_LANGUAGEID_\', \'Categories\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'4\', \'_LANGUAGEID_\', \'Feature\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'5\', \'_LANGUAGEID_\', \'Page\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'6\', \'_LANGUAGEID_\', \'Blog\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'7\', \'_LANGUAGEID_\', \'Contact Us\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'8\', \'_LANGUAGEID_\', \'Our offers\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'9\', \'_LANGUAGEID_\', \'Element\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'10\', \'_LANGUAGEID_\', \'Typo Bootrap\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'11\', \'_LANGUAGEID_\', \'CMS Page\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'12\', \'_LANGUAGEID_\', \'About Us\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'13\', \'_LANGUAGEID_\', \'Products Element\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'14\', \'_LANGUAGEID_\', \'Delivery \', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'16\', \'_LANGUAGEID_\', \'Terms and conditions of use \', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'18\', \'_LANGUAGEID_\', \'about us\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'19\', \'_LANGUAGEID_\', \'New products \', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'20\', \'_LANGUAGEID_\', \'Best sellers\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'21\', \'_LANGUAGEID_\', \'Price drop\', \'\', \'\', \'\', \'\')'; 
/*DATA FOR TABLE psmegamenu_shop*/
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'1\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'2\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'3\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'4\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'5\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'6\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'7\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'8\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'9\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'10\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'11\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'12\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'13\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'14\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'16\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'18\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'19\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'20\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'21\', \'_SHOPID_\')'; 
/*DATA FOR TABLE psmegamenu_widgets*/

 ?>