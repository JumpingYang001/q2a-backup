<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-admin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for admin center

        ---------------------
         Translator: Jumping Yang
         Site: https://github.com/JumpingYang001/q2a-backup
         Created: 2013-08-06
        ---------------------

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'backup_send_upload_file' => '上传文件',
		'backup_delete_files' => '删除所有文件',
		'backup_success1' => '您没有权限创建备份文件夹:',
		'backup_success2' => '<br/> 请手动创建它和对它设置权限！',
		'backup_fail' => '欢迎使用question2answer的备份还原工具！',
		'backup_compress_enable' => '压缩备份',
		'backup_only_qa_tables_enable1' => '备份仅以`',
		'backup_only_qa_tables_enable2' => '` 为前缀的Q2A数据表. <br />如果取消选中此选项，将备份整个数据库。 <br />(可用于在一个数据库中的多个Q2A实例).',
		'backup_import_label1' => '<span style="color:#f99; font-size:20px; text-align:center;">警告！请小心使用。失去所有数据的风险。<br />'.
							   '<span style="font-size:15px;">（在还原时，我们总是建议 <a href="',
		'backup_import_label2' => 'README.md" target="backup_readme">以一种安全的方式还原</a>).<br />如有问题，请参阅<a href="',
		'backup_import_label3' => 'README.md" target="backup_readme">故障排除</a> 部分.</span></span>',
		'backup_backup_done' => '数据库备份完成.',
		'backup_import_done' => '数据库导入完成',
		'backup_do_backup' => '备份数据库',
		'backup_do_import' => '导入选中的备份文件',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
