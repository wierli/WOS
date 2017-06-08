# WOS(wierli operating system)<br>

源码说明<br>
1.源码遵循APACHE开源协议.开源代码用于学习交流之用,请不要将其应用于商务.<br>
2.本系统基于PHP语言开发,运用了THINKPHP、AMAZEUI框架及ODBC驱动连接的ACCESS小型数据库.<br>
3.编写此源码的目的是将VRP中的3D模型联网,通过远程网页进行控制.<br>
4.核心代码在 /Application/Home/Controller/IndexController.class.php 中<br>
 
实现思路<br>
1.通过网页操作修改access数据库中的数据,配合VRP中的定时器检测数据库中数据的变化进行相应的操作.<br>
<br>
VRP脚本源码<br>
<br>
#初始化函数 <br>
//===========================代码开始===========================//<br>
连接数据库, 0, E:\phpStudy\WWW\wos\Database\wos.mdb, Admin, <br>
定义变量, DOOR_STATE, 0<br>
设置定时器, time, 1, 10, time_fuc<br>
//===========================代码结束===========================//<br>
<br>
#定时器的自定义函数 time_fuc<br>
//===========================代码开始===========================//<br>
获取字段值(通过字段值), system, name, door, state, 0<br>
变量赋值, DOOR_STATE, <last_output><br>
<br>
#比较变量值(大于), DOOR_STATE, 0<br>
切换相机(通过名称), men, 0<br>
设置字段值(通过字段值), system, name, door, state, 0<br>
#结束<br>
//===========================代码结束===========================//<br>
<br>
VRP源码由于文件过大将打包上传至百度云<br>
<br>
下载地址:
