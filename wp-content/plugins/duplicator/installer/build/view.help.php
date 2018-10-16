<?php
	// Exit if accessed directly
	if (! defined('DUPLICATOR_INIT')) {
		$_baseURL =  strlen($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
		$_baseURL =  "http://" . $_baseURL;
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $_baseURL");
		exit; 
	}
?>
<!-- =========================================
HELP FORM -->
<div id="dup-main-help">
<div style="text-align:center">更多帮助请查看 <a href="http://lifeinthegrid.com/duplicator-docs" target="_blank">在线资源</a></div>

<h3>步骤 1 - 部署</h3>
<div id="dup-help-step1" class="dup-help-page">
	<!-- MYSQL SERVER -->
	<fieldset>
		<legend><b>MySQL服务器</b></legend>

		<b>操作:</b><br/>
		'新建'将尝试创建不存在的数据库，这个选项在许多主机上不工作。如果数据库不存在，您需要登录数据库控制面板并创建数据库。如果'链接并移除所有数据库'被勾选这将删除数据库中的所有表，因为Duplicator需要空数据库。请确定您在使用这个安装程序前备份了所有的数据库。更多详情请联系您的服务器管理员。
		<br/><br/>

		<b>主机:</b><br/>
		这个是您的数据库的服务器地址。一般填localhost, 然后有时是不一样的，具体联系数据库服务器管理员.
		<br/><br/>

		<b>用户:</b><br/>
		这个是MySQL数据库服务器名称. 这个帐户名称允许您访问数据库并可读取和访问数据.  <i style='font-size:11px'>这<b>无需</b>和您的WordPress 管理员帐户相同</i> 
		<br/><br/>

		<b>密码:</b><br/>
		这个是您的MySQL数据库密码.
		<br/><br/>

		<b>名称:</b><br/>
		这个是您的数据库名称.
		<br/><br/>
		
		<div class="help" style="border-top:1px solid silver">
			<b>一般数据库链接问题:</b><br/>
			- 注意 '用户名', '密码' &amp; 和 '数据库名' 大小写<br/>
			- 服务器上是否存在该用户 <br/>
			- 检查数据库用户是否有正确的权限 <br/>
			- 主机 'localhost' 并不一定全对 <br/>
			- 联系您的主机商获得正确参数 <br/>
			- 查看 '数据库设置帮助' 区了解更多详情<br/>
			- 访问在线资源 '一般FAQ页面' <br/>
		</div>


		</fieldset>				

	<!-- ADVANCED OPTS -->
	<fieldset>
		<legend><b>高级选项</b></legend>
		<b>手动解压压缩包:</b><br/>
		这个允许您手动解压您的zip压缩包，如果您的主机不支持ZipArchive在线解压，这个是有用的.
		<br/><br/>		

		<b>管理强制SSL:</b><br/>
		Wordpress管理关闭SSL支持. 这个在wp-config.php文件中设置FORCE_SSL_ADMIN为false，如果是true, 否则将创建没有设置的设置.
		<br/><br/>	

		<b>登录强制SSL:</b><br/>
		Wordpress登录关闭SSL支持. 这个在wp-config.php文件中设置FORCE_SSL_LOGIN为false，如果是true, 否则将创建没有设置的设置.
		<br/><br/>			

		<b>保留启用缓存:</b><br/>
		Wordpress关闭缓存支持. 这个在wp-config.php文件中设置WP_CACHE为false，如果是true, 否则将创建没有设置的设置.
		<br/><br/>	

		<b>保留首页幻灯片路径:</b><br/>
		这个在wp-config.php文件中设置WPCACHEHOME为false，如果是true, 否则没有什么改变.
		<br/><br/>	

		<b>修复非断行空格:</b><br/>
		这个操作移除utf8字节如'xC2' 'xA0'并使用一致的空格替代. 如果在您的文章中发现奇怪的问题使用这个选项
		<br/><br/>	

			<b>MySQL Charset &amp; MySQL Collation:</b><br/>
			When the database is populated from the SQL script it will use this value as part of its connection.  Only change this value if you know what your databases character set should be.
			<br/>				
		</fieldset>			
	</div>

<h3>Step 2 - 更新</h3>
<div id="dup-help-step2" class="dup-help-page">

		<!-- SETTINGS-->
		<fieldset>
			<legend><b>Settings</b></legend>
			<b>Old Settings:</b><br/>
			The URL and Path settings are the original values that the package was created with.  These values should not be changed.
			<br/><br/>

			<b>New Settings:</b><br/>
			These are the new values (URL, Path and Title) you can update for the new location at which your site will be installed at.
			<br/>		
		</fieldset>

		<!-- NEW ADMIN ACCOUNT-->
		<fieldset>
			<legend><b>New Admin Account</b></legend>
			<b>Username:</b><br/>
			The new username to create.  This will create a new WordPress administrator account.  Please note that usernames are not changeable from the within the UI.
			<br/><br/>

			<b>Password:</b><br/>
			The new password for the user. 
			<br/>		
		</fieldset>

	<!-- ADVANCED OPTS -->
	<fieldset>
		<legend><b>高级选项</b></legend>
		<b>Site URL:</b><br/>
		For details see WordPress <a href="http://codex.wordpress.org/Changing_The_Site_URL" target="_blank">Site URL</a> &amp; <a href="http://codex.wordpress.org/Giving_WordPress_Its_Own_Directory" target="_blank">Alternate Directory</a>.  If you're not sure about this value then leave it the same as the new settings URL.
		<br/><br/>

			<b>Scan Tables:</b><br/>
			Select the tables to be updated. This process will update all of the 'Old Settings' with the 'New Settings'. Hold down the 'ctrl key' to select/deselect multiple.
			<br/><br/>

			<b>Activate Plugins:</b><br/>
			These plug-ins are the plug-ins that were activated when the package was created and represent the plug-ins that will be activated after the install.
			<br/><br/>

			<b>Post GUID:</b><br/>
			If your moving a site keep this value checked. For more details see the <a href="http://codex.wordpress.org/Changing_The_Site_URL#Important_GUID_Note" target="_blank">notes on GUIDS</a>.	Changing values in the posts table GUID column can change RSS readers to evaluate that the posts are new and may show them in feeds again.		
			<br/><br/>	

			<b>Full Search:</b><br/>
			Full search forces a scan of every single cell in the database. If it is not checked then only text based columns are searched which makes the update process much faster.
			<br/>	
		</fieldset>

	</div>

	<h3>步骤 3 - 测试</h3>
	<div id="dup-help-step3" class="dup-help-page">
		<fieldset>
			<legend><b>Final Steps</b></legend>

			<b>Resave Permalinks</b><br/>
			Re-saving your perma-links will reconfigure your .htaccess file to match the correct path on your server.  This step requires logging back into the WordPress administrator.
			<br/><br/>

			<b>Delete Installer Files</b><br/>
			When you're completed with the installation please delete all installer files.  Leaving these files on your server can impose a security risk!
			<br/><br/>

			<b>Test Entire Site</b><br/>
			After the install is complete run through your entire site and test all pages and posts.
			<br/><br/>

			<b>View Install Report</b><br/>
			The install report is designed to give you a synopsis of the possible errors and warnings that may exist after the installation is completed.
			<br/>
		</fieldset>
	</div>

	
	<h3>Troubleshooting Tips</h3>
	<div id="troubleshoot" class="dup-help-page">
		<fieldset>
			<legend><b>Quick Overview</b></legend>

			<div style="padding: 0px 10px 10px 10px;">		
				<b>Common Quick Fix Issues:</b>
				<ul>
					<li>Use an <a href='http://lifeinthegrid.com/duplicator-hosts' target='_blank'>approved hosting provider</a></li>
					<li>Validate directory and file permissions (see below)</li>
					<li>Validate web server configuration file (see below)</li>
					<li>Clear your browsers cache</li>
					<li>Deactivate and reactivate all plugins</li>
					<li>Resave a plugins settings if it reports errors</li>
					<li>Make sure your root directory is empty</li>
				</ul>

				<b>Permissions:</b><br/> 
				Not all operating systems are alike.  Therefore, when you move a package (zip file) from one location to another the file and directory permissions may not always stick.  If this is the case then check your WordPress directories and make sure it's permissions are set to 755. For files make sure the permissions are set to 644 (this does not apply to windows servers).   Also pay attention to the owner/group attributes.  For a full overview of the correct file changes see the <a href='http://codex.wordpress.org/Hardening_WordPress#File_permissions' target='_blank'>WordPress permissions codex</a>
				<br/><br/>

				<b>Web server configuration files:</b><br/>
				For Apache web server the root .htaccess file was copied to .htaccess.orig. A new stripped down .htaccess file was created to help simplify access issues.  For IIS web server the web.config file was copied to web.config.orig, however no new web.config file was created.  If you have not altered this file manually then resaving your permalinks and resaving your plugins should resolve most all changes that were made to the root web configuration file.   If your still experiencing issues then open the .orig file and do a compare to see what changes need to be made. <br/><br/><b>Plugin Notes:</b><br/> It's impossible to know how all 3rd party plugins function.  The Duplicator attempts to fix the new install URL for settings stored in the WordPress options table.   Please validate that all plugins retained there settings after installing.   If you experience issues try to bulk deactivate all plugins then bulk reactivate them on your new duplicated site. If you run into issues were a plugin does not retain its data then try to resave the plugins settings.
				<br/><br/>

				 <b>Cache Systems:</b><br/>
				 Any type of cache system such as Super Cache, W3 Cache, etc. should be emptied before you create a package.  Another alternative is to include the cache directory in the directory exclusion path list found in the options dialog. Including a directory such as \pathtowordpress\wp-content\w3tc\ (the w3 Total Cache directory) will exclude this directory from being packaged. In is highly recommended to always perform a cache empty when you first fire up your new site even if you excluded your cache directory.
				 <br/><br/>

				 <b>Trying Again:</b><br/>
				 If you need to retry and reinstall this package you can easily run the process again by deleting all files except the installer.php and package file and then browse to the installer.php again.
				 <br/><br/>

				 <b>Additional Notes:</b><br/>
				 If you have made changes to your PHP files directly this might have an impact on your duplicated site.  Be sure all changes made will correspond to the sites new location. 
				 Only the package (zip file) and the installer.php file should be in the directory where you are installing the site.  Please read through our knowledge base before submitting any issues. 
				 If you have a large log file that needs evaluated please email the file, or attach it to a help ticket.
				 <br/><br/>

			</div>
		</fieldset>
	</div>

	<div style="text-align:center">For in-depth help please see the <a href="http://lifeinthegrid.com/duplicator-docs" target="_blank">online resources</a></div>

	<br/><br/>
</div>