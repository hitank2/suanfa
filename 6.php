<?php
/**
 * 设计一个数据库表，实现评论楼盖楼效果，并写出sql语句
 * a、写出建表语句
b、查询一个评论的所有子评论(一次返回所有数据，由客户端去组织数据)
c、写出每次新增和删除的sql语句(当新增数据时，如果是跟帖，则需要传递要跟帖的id，暂称为pid,如果pid对应的createTime小于这个楼层的修改时间，则证明需要另外再开辟一个楼层)
d、写出计算层级深度的sql语句

 * Created by PhpStorm.
 * User: csmall
 * Date: 2018-03-14
 * Time: 9:52
 */

/**
CREATE TABLE es_comment (
`id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
`article_id` int(22) NOT NULL COMMENT '评论文章id',
`build_level` SMALLINT(5) UNSIGNED NOT NULL COMMENT '楼层级别',
`member_id` int(22) NOT NULL COMMENT '发表评论人id',
`content` text NOT NULL COMMENT '评论内容',
`p_id` int(22) NOT NULL COMMENT '回复上级ID',
`is_del` tinyint(1) UNSIGNED NOT NULL COMMENT '回复上级ID',
`create_time` bigint(20) NOT NULL COMMENT '评论时间',
`update_time` bigint(20) NOT NULL COMMENT '评论时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE es_comment_floor (
`id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
`article_id` int(22) NOT NULL COMMENT '评论文章id',
`create_time` bigint(20) NOT NULL COMMENT '评论时间',
`update_time` bigint(20) NOT NULL COMMENT '评论时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE es_comment_floor_relation (
`id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
`floor_id` int(22) NOT NULL COMMENT '评论文章id',
`comment_id` int(22) NOT NULL COMMENT '评论文章id',
`create_time` bigint(20) NOT NULL COMMENT '评论时间',
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
 */