<?php
/**
 * 4、如何解决或降低缓存服务的单点故障导致数据库的流量井喷
 * 采用缓存代理服务器
 * 采用 Magent 缓存代理，防止单点现象，缓存代理也可以做备份，通过客户端连接到缓存代理服务器，缓存代理服务器连接缓存服务器
 * 缓存代理服务器可以连接多台Memcached机器可以将每台Memcached机器进行数据同步。这样的架构比较完善了，如果其中一台缓存代理服务器down机
 * 系统依然可以继续工作，如果其中一台Memcached机器down掉，数据不会丢失并且可以保证数据的完整性，以上描述的系统架构如图所示：
 *
 * redis一主多从http://blog.csdn.net/u011262847/article/details/78858570
 * 高可用redis集群 http://blog.csdn.net/u013063153/article/details/71191138
 * Created by PhpStorm.
 * User: csmall
 * Date: 2018-03-14
 * Time: 9:51
 */