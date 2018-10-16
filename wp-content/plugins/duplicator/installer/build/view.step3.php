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
<script type="text/javascript">		
	/** **********************************************
	* METHOD: Posts to page to remove install files */	
	Duplicator.removeInstallerFiles = function(package_name) {
		var msg = "Delete all installer files now? \n\nThis will remove the page you are now viewing.\nThe page will stay active until you navigate away.";
		if (confirm(msg)) {
			var nurl = '<?php echo rtrim($_POST['url_new'], "/"); ?>/wp-admin/admin.php?page=duplicator-tools&tab=cleanup&action=installer&package=' + package_name;
			window.open(nurl, "_blank");
		}
	};
</script>


<!-- =========================================
VIEW: STEP 3- INPUT -->
<form id='dup-step3-input-form' method="post" class="content-form" style="line-height:20px">
	<input type="hidden" name="url_new" id="url_new" value="<?php echo rtrim($_POST['url_new'], "/"); ?>" />	
	<div class="dup-logfile-link"><a href="installer-log.txt" target="_blank">installer-log.txt</a></div>
	<h3>步骤3: 测试站点</h3>
	<hr size="1" /><br />
	
	<div class="title-header">
		<div class="dup-step3-final-title">重要的最后一步!</div>
	</div>
		
	<table class="dup-step3-final-step">
		<tr>
			<td>1. <a href="javascript:void(0)" onclick="$('#dup-step3-install-report').toggle(400)">安装报告</a>
			</td>
			<td>
				<i id="dup-step3-install-report-count">
					<b>错误:</b>
					<span data-bind="with: status.step1">部署 (<span data-bind="text: query_errs"></span>)</span> &nbsp;
					<span data-bind="with: status.step2">更新 (<span data-bind="text: err_all"></span>)</span> &nbsp; &nbsp;
					<span data-bind="with: status.step2" style="color:#888"><b>警告:</b> (<span data-bind="text: warn_all"></span>)</span>
				</i>
			</td>
		</tr>	
		<tr>
			<td style="width:170px">
				2. <a href='<?php echo rtrim($_POST['url_new'], "/"); ?>/wp-admin/options-permalink.php' target='_blank'> 保存固定链接</a> 
			</td>
			<td><i>更新.htaccess中URL重写规则  (需要登录)</i></td>
		</tr>	
		<tr>
			<td>3. <a href='<?php echo $_POST['url_new']; ?>' target='_blank'>测试站点</a></td>
			<td><i>查看是否所有页面，链接图像和插件有效</i></td>
		</tr>		
		<tr>
			<td>4. <a href="javascript:void(0)" onclick="Duplicator.removeInstallerFiles('<?php echo $_POST['package_name'] ?>')">文件清除</a></td>
			<td><i>移除所有安装的文件 (需要登录)</i></td>
		</tr>	
	</table><br/>
	
	<div class="dup-step3-go-back">
		<i style='font-size:11px'>要重安装 <a href="javascript:history.go(-2)">回到步骤1</a>.</i><br/>
		<i style="font-size:11px;">这个.htaccess文件被重置.  重新保存插件.</i>
	</div>


	<!-- ========================
	INSTALL REPORT -->
	<div id="dup-step3-install-report" style='display:none'>
		<table class='dup-step3-report-results' style="width:100%">
			<tr><th colspan="4">数据结果</th></tr>
			<tr style="font-weight:bold">
				<td style="width:150px"></td>
				<td>表</td>
				<td>行</td>
				<td>单元</td>
			</tr>
			<tr data-bind="with: status.step1">
				<td>已创建</td>
				<td><span data-bind="text: table_count"></span></td>
				<td><span data-bind="text: table_rows"></span></td>
				<td>n/a</td>
			</tr>	
			<tr data-bind="with: status.step2">
				<td>已扫描</td>
				<td><span data-bind="text: scan_tables"></span></td>        
				<td><span data-bind="text: scan_rows"></span></td>
				<td><span data-bind="text: scan_cells"></span></td>
			</tr>
			<tr data-bind="with: status.step2">
				<td>已更新</td>
				<td><span data-bind="text: updt_tables"></span></td>        
				<td><span data-bind="text: updt_rows"></span></td>
				<td><span data-bind="text: updt_cells"></span></td>
			</tr>
		</table>
		
		<table class='dup-step3-report-errs' style="width:100%; border-top:none">
			<tr><th colspan="4">错误 &amp; 警告 <br/> <i style="font-size:10px; font-weight:normal">(单击下面链接查看详情)</i></th></tr>
			<tr>
				<td data-bind="with: status.step1">
					<a href="javascript:void(0);" onclick="$('#dup-step3-errs-create').toggle(400)">步骤1: 部署错误 (<span data-bind="text: query_errs"></span>)</a><br/>
				</td>
				<td data-bind="with: status.step2">
					<a href="javascript:void(0);" onclick="$('#dup-step3-errs-upd').toggle(400)">步骤2: 更新错误 (<span data-bind="text: err_all"></span>)</a>
				</td>
				<td data-bind="with: status.step2">
					<a href="#dup-step2-errs-warn-anchor" onclick="$('#dup-step3-warnlist').toggle(400)">一般警告 (<span data-bind="text: warn_all"></span>)</a>
				</td>
			</tr>
			<tr><td colspan="4"></td></tr>
		</table>
		
		
		<div id="dup-step3-errs-create" class="dup-step3-err-msg">
		
			<b data-bind="with: status.step1">步骤1: 部署错误 (<span data-bind="text: query_errs"></span>)</b><br/>
			<div class="info">部署时发生了查询错误查看 <a href="installer-log.txt" target="_blank">install-log.txt</a> file.  
			To view the error result look under the section titled 'DATABASE RESULTS'.  If errors are present they will be marked with '**ERROR**'. <br/><br/>  For errors titled
			'Query size limit' you will need to manually post the values or update your mysql server with the max_allowed_packet setting to handle larger payloads.
			If your on a hosted server you will need to contact the server admin, for more details see: https://dev.mysql.com/doc/refman/5.5/en/packet-too-large.html. <br/><br/>
			</div>
			
		</div>
		

		<div id="dup-step3-errs-upd" class="dup-step3-err-msg">
		
			<!-- MYSQL QUERY ERRORS -->
			<b data-bind="with: status.step2">步骤2: 更新错误 (<span data-bind="text: errsql_sum"></span>) </b><br/>
			<div class="info">显示不能执行查询的错误.</div>
			<div class="content">
				<div data-bind="foreach: status.step2.errsql"><div data-bind="text: $data"></div></div>
				<div data-bind="visible: status.step2.errsql.length == 0">没有MySQL查询错误</div>
			</div>
			
			<!-- TABLE KEY ERRORS -->
			<b data-bind="with: status.step2">表键错误 (<span data-bind="text: errkey_sum"></span>)</b><br/>
			<div class="info">
				一个表来有效地运行更新引擎主键是需要的。下面列出的表和列，将需要手动更新。使用下面的查询来查找数据。<br/>
				<i>SELECT @row := @row + 1 as row, t.* FROM some_table t, (SELECT @row := 0) r</i>
			</div>
			<div class="content">
				<div data-bind="foreach: status.step2.errkey"><div data-bind="text: $data"></div></div>
				<div data-bind="visible: status.step2.errkey.length == 0">No missing primary key errors</div>
			</div>
			
			<!-- SERIALIZE ERRORS -->
			<b data-bind="with: status.step2">序列化错误  (<span data-bind="text: errser_sum"></span>)</b><br/>
			<div class="info">
				使用下面SQL显示数据可能没有在序列化过程中正确地更新数据。
			</div>
			<div class="content">
				<div data-bind="foreach: status.step2.errser"><div data-bind="text: $data"></div></div>
				<div data-bind="visible: status.step2.errser.length == 0">没有系列错误</div>
			</div>			
			
		</div>
		
		
		<!-- WARNINGS-->
		<div id="dup-step3-warnlist" class="dup-step3-err-msg">
			<a href="#" id="dup-step2-errs-warn-anchor"></a>
			<b>一般警告</b><br/>
			<div class="info">
				下面是警告列表，可能需要修复以完成您的设置。详情警告看 <a href="http://codex.wordpress.org/" target="_blank">wordpress codex.</a>.
			</div>
			<div class="content">
				<div data-bind="foreach: status.step2.warnlist">
					 <div data-bind="text: $data"></div>
				</div>
				<div data-bind="visible: status.step2.warnlist.length == 0">
					没有警告
				</div>
			</div>
		</div><br/>
		
		
	</div><br/><br/>
		
	<div class='dup-step3-connect'>
		<a href="installer.php?help=1#troubleshoot" target="_blank">Troubleshoot</a> | 
		<a href='http://support.lifeinthegrid.com/knowledgebase.php' target='_blank'>FAQs</a> | 
		<a href='http://lifeinthegrid.com/duplicator' target='_blank'>Support</a> | 
		<a href='http://lifeinthegrid.com/partner/' target='_blank'>Donate</a>
	</div><br/>
</form>

<script type="text/javascript">
	MyViewModel = function() { 
		this.status = <?php echo urldecode($_POST['json']); ?>;
		var errorCount =  this.status.step2.err_all || 0;
		(errorCount >= 1 )
			? $('#dup-step3-install-report-count').css('color', '#BE2323')
			: $('#dup-step3-install-report-count').css('color', '#197713')
	};
	ko.applyBindings(new MyViewModel());
</script>
 
 