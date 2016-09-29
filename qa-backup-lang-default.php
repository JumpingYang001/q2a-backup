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
		'backup_send_upload_file' => 'Upload to server',
		'backup_delete_files' => 'Delete all files',
		'backup_success1' => 'You do not have permission to create backup folder:',
		'backup_success2' => '<br/> Please create and set it manually!',
		'backup_fail' => 'Welcome to use backup and restore tool for question2answer!',
		'backup_compress_enable' => 'Compress backups.',
		'backup_only_qa_tables_enable1' => 'Backup Q2A tables only - those with `',
		'backup_only_qa_tables_enable2' => '` prefix. <br />If you uncheck this option, you will backup whole batabase. <br />(Useful for more than one Q2A instance in one database).',
		'backup_import_label1' => '<span style="color:#f99; font-size:20px; text-align:center;">Caution! Use carefully. Risk of losing all your data.<br />'.
							   '<span style="font-size:15px;">(While restoring, it is always recommended to <a href="',
		'backup_import_label2' => 'README.rst" target="backup_readme">restore in a safe way</a>).<br />In case of problems, see <a href="',
		'backup_import_label3' => 'README.rst" target="backup_readme">TROUBLESHOOTING</a> section.</span></span>',
		'backup_backup_done' => 'Database Backup done.',
		'backup_import_done' => 'Database Import done',
		'backup_do_backup' => 'Do the backup !',
		'backup_do_import' => 'Import selected file !',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
