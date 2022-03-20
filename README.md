
## Wooyun Study Site Deploy Project
### Description of the project
乌云漏洞库和乌云知识库适合于白帽子入门新手、网络安全爱好者、以及从事开发、运维相关工作的人员进行学习了解。

本项目将互联网(Github)中乌云漏洞库和乌云知识库项目进行整合，以虚拟机的形式快速部署，从而快速的得到一个学习环境。

**项目亮点**
- (0) 利用虚拟机模板快速部署漏洞学习环境
- (1) 针对于学习过的`漏洞类型`或者`知识库文章`进行相应记录, 防止重复查看。
- (2) 将乌云漏洞库中漏洞详情包含的图片地址，更改为本地相对路径访问，加快访问速度以及防止解析失败或无法正常显示图片。
- (3) 将乌云知识库(Wooyun Drops)文章中包含的图片地址，更改为本地相对路径访问，加快访问速度以及防止解析失败而无法正常显示图片。

<br/>

**项目使用**
```bash
# 环境说明
windows 7 Vmware 虚拟机
WampServer - 启动 Apache 服务
MySQL-XAMPP Control Panel - 启动 MySQL 数据库

# PHP 连接数据库的php文件路径
C:\wampweb\www\bugs\conn.php

# MySQL 数据库连接信息
"localhost","root","weiyigeek"

# 命令行连接mysql服务端
C:\xamppweb\mysql\bin\mysql.exe -uroot -pweiyigeek

# 查看记录了解到曾经学习看过的漏洞以及知识库文章
MariaDB [(none)]> select * from wooyun.record;
+----+---------------------+---------------------+
| id | wybug_id            | rtime               |
+----+---------------------+---------------------+
|  1 | wooyun-2016-0230305 | 2020-09-03 15:04:02 |
|  3 | wooyun-2015-0119852 | 2021-06-17 10:56:32 |
|  4 | wooyun-2015-0160174 | 2021-06-17 11:10:23 |
|  5 | wooyun-2016-0209291 | 2021-06-17 15:34:43 |
|  6 | wooyun-2016-0209509 | 2021-06-17 15:36:56 |
+----+---------------------+---------------------+
7 rows in set (0.000 sec)

MariaDB [(none)]> select * from wooyun.recordbook;
+----+---------+---------------------+
| id | page_id | rtime               |
+----+---------+---------------------+
|  1 | 1203    | 2021-06-17 15:37:02 |
|  2 | 1269    | 2022-02-17 23:21:49 |
+----+---------+---------------------+
2 rows in set (0.002 sec)

# 清空漏洞查看记录
truncate table wooyun.record;

# 清空知识库查看记录
truncate table wooyun.recordbook;

# 乌云漏洞详情中的静态图片访问域名自定义 (已去除域名方式访问，采用相对路径)
update wooyun.bugs set wybug_detail=replace(wybug_detail,'study.weiyigeek.top','你的域名');
update wooyun.bugs set wybug_detail=replace(wybug_detail,'http://study.weiyigeek.top','');
```

<br/>

## 项目数据来源
- Wooyun 知识库文章 && 知识库图片 - https://github.com/SuperKieran/WooyunDrops
- 本人主页 [https://weiyigeek.top](https://weiyigeek.top) && 作者博客 [https://blog.weiyigeek.top](https://blog.weiyigeek.top) 