<?php
return array(
	'APP_DEBUG' => true,
'DB_TYPE'=> 'mysqli',
// 注意DSN的配置针对不同的数据库有所区别 请参考PHP手册PDO类库部分
'DB_DSN'=>"DRIVER=Microsoft Access Driver (*.mdb);DBQ=".getcwd()."\\Database\\wos.mdb",
'DB_PARAMS' => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
'DB_USER'=>'Admin',
'DB_PWD'=>'',
'DB_PREFIX'=>'',
);
