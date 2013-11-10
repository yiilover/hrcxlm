<?php
class IndexAction extends CommonAction {
	// 采集规则列表
	public function index() {
		$ecrule = D('Ecrule');
		import("@.ORG.Page");
		$rows = C('page_rows');
		$ec_sid = $this -> _get('ec_sid');
		if ($ec_sid) {
			$sql_where = " ec_sid='$ec_sid' ";
		} 
		$count = $ecrule -> where($sql_where) -> count(); //计算总数
		$p = new Page($count, $rows);
		$list = $ecrule -> limit($p -> firstRow . ',' . $p -> listRows) -> where($sql_where) -> order('ec_id desc') -> select();
		$p -> setConfig('header', '条采集规则');
		$p -> setConfig('prev', "<");
		$p -> setConfig('next', '>');
		$p -> setConfig('first', '<<');
		$p -> setConfig('last', '>>');
		$page = $p -> show(); //分页的导航条的输出变量
		$this -> assign("page", $page);

		$this -> assign('Marray', C('Marray'));
		$show_ec_sort = SelectSort('ecsort', 'ec_sid,cs_name', 'ec_sid', $ec_sid, __APP__ . 'Index/index');
		$this -> assign('show_ec_sort', $show_ec_sort);
		$this -> assign('list', $list);
		$this -> display();
	} 
	// 规则编辑主模板
	public function ecrule() {
		$ec_id = $this -> _request('ec_id');
		if (!$ec_id) {
			$this -> assign('rule_save', C('rule_save'));
			$this -> assign('rule_seo', C('rule_seo'));
		} 
		$ecrule = D('Ecrule');
		$vo = $ecrule -> getByec_id($ec_id); 
		// 显示规则分类
		$show_ec_sort = SelectSort('ecsort', 'ec_sid,cs_name', 'ec_sid', $vo['ec_sid']);
		$this -> assign('show_ec_sort', $show_ec_sort); 
		// 显示入库栏目分类
		$show_cms_module = SelectCmsMode("'cms_module'  onChange=\"choose_appsort(this.options[this.selectedIndex].value,'" . $vo['cms_sfid'] . "');choose_autofields_fresh()\"", $vo['cms_module']);
		$this -> assign('show_cms_module', $show_cms_module); 
		// 显示智能规则库分类
		$show_rd_rulebase = SelectSort('ecrulebase', 'rb_id,rb_name', 'rd_rulebase', $vo['rd_rulebase']);
		$this -> assign('show_rd_rulebase', $show_rd_rulebase); 
		// 选择入库城市
		$show_city = SelectCity('city', "'cms_scityid'  onChange=\"choose_zone(this.options[this.selectedIndex].value,'{$vo['cms_scityid']}')\"", $vo['cms_scityid']);
		$this -> assign('show_city', $show_city);

		$this -> assign('rc_ruleDB', $vo['rc_ruleDB']);
		$this -> assign('vo', $vo);
		$this -> display(); 
		// B('ShowPageTrace');
	} 
	// 保存规则
	public function SaveRule() {
		$ec_id = $this -> _request('ec_id');
		$ecrule = D('Ecrule');
		if ($data = $ecrule -> create()) {
			_cleanBlank($data['rt_titlerule']);
			array_walk($data['rc_ruleDB'], '_cleanBlank');
			if ($ec_id) {
				$result = $ecrule -> save($data);
			} else {
				$data['posttime'] = time();
				$result = $ecrule -> add($data);
				if (false !== $result) $this -> ajaxReturn($result, '操作成功,3s后自动返回...', 1);
			} 
			if (false !== $result) {
				$this -> success('操作成功,3s后自动返回...');
			} else {
				$this -> error($ecrule -> getError());
			} 
		} else {
			$this -> error($ecrule -> getError());
		} 
	} 
	// 快速复制一条规则
	public function CopyRule() {
		$ec_id = $this -> _request('ec_id');
		if (!empty($ec_id)) {
			$ecrule = D('Ecrule');
			$vo = $ecrule -> getByec_id($ec_id);
			$vo['ec_id'] = '';
			$vo['ec_name'] .= ' 复件';
			$result = $ecrule -> add($vo);
			if (false !== $result) {
				$this -> success('规则复制成功,2s后自动刷新列表...');
			} else {
				$this -> error($ecrule -> getError());
			} 
		} else {
			$this -> error($ecrule -> getError());
		} 
	} 
	// 导出规则
	public function ShareRule() {
		$ec_id = $this -> _request('ec_id');
		$ecrule = D('Ecrule');
		$vo = $ecrule -> getByec_id($ec_id);
		$vo['ec_id'] = '';
		$vo['lastctime'] = '';
		$vo['lastsnum'] = '';
		$vo['lastfnum'] = '';
		$sharerule = serialize($vo);
		_ecruleEn($sharerule);
		$savetxt = $this -> _request('savetxt');
		if ($savetxt) {
			$filename = $vo['ec_name'] . ".txt";
			$encoded_filename = urlencode($filename);
			$encoded_filename = str_replace("+", "%20", $encoded_filename);
			header("Content-Type: application/octet-stream");
			if (preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
				header('Content-Disposition:  attachment; filename="' . $encoded_filename . '"');
			} elseif (preg_match("/Firefox/", $_SERVER['HTTP_USER_AGENT'])) {
				header('Content-Disposition: attachment; filename*="utf8' . $filename . '"');
			} else {
				header('Content-Disposition: attachment; filename="' . $filename . '"');
			} 
			echo $sharerule;
			exit;
		} 
		$this -> assign('ec_id', $ec_id);
		$this -> assign('sharerule', $sharerule);
		$this -> display();
	} 
	// 导入规则
	public function ImportRule() {
		$Insert = $this -> _request('Insert');
		if (!$Insert) {
			$this -> display();
			exit;
		} 
		$sharerule = $this -> _request('sharerule');
		if (!$sharerule) {
			$this -> error('请输入要导入的规则!');
		} 
		_ecruleDe($sharerule);
		$sharerule = unserialize($sharerule);
		$ecrule = D('Ecrule');
		$ecrule -> create($sharerule);
		$result = $ecrule -> add();
		if (false !== $result) {
			$this -> success('导入成功,2s后自动转入规则列表...');
		} else {
			$this -> error($ecrule -> getError());
		} 
	} 
	// 删除数据
	public function DeleteRule() {
		$ec_id = $this -> _request('ec_id');
		if (!empty($ec_id)) {
			$ecrule = D('Ecrule');
			$result = $ecrule -> delete($ec_id);
			if (false !== $result) {
				$this -> ajaxReturn($ec_id, '删除成功!', 1);
			} else {
				$this -> error($ecrule -> getError());
			} 
		} else {
			$this -> error($ecrule -> getError());
		} 
	} 
	// 批量删除数据
	public function DeleteRuleList() {
		$data = $_POST;
		foreach($data['ec_iddb'] AS $ec_id => $value) {
			if (!empty($ec_id)) {
				$ecrule = D('Ecrule');
				$result = $ecrule -> delete($ec_id);
				if (false == $result) break;
			} 
		} 
		if (false !== $result) {
			$this -> ajaxReturn($ec_id, '批量删除成功!', 1);
		} else {
			$this -> error($ecrule -> getError());
		} 
	} 
	// 通用参数配置
	public function cconfig() {
		$save = $this -> _request('save');
		if (!$save) {
			$this -> assign('rule_save', C('rule_save'));
			$this -> assign('rule_seo', C('rule_seo'));
			$this -> display();
			exit;
		} 
		$data = $_POST;
		$writefile = "<?php \r\n";
		$writefile .= "return array( \r\n";
		$writefile .= " 'rule_save' => array(  \r\n";
		foreach($data AS $key => $vo) {
			if (stristr($key, 'rs_')) {
				$writefile .= " '$key' => '$vo', \r\n";
			} 
		} 
		$writefile .= " ), \r\n";
		$writefile .= " 'rule_seo' => array(  \r\n";
		foreach($data AS $key => $vo) {
			if (stristr($key, 'rseo_')) {
				$writefile .= " '$key' => '$vo', \r\n";
			} 
		} 
		$writefile .= " ), \r\n";
		foreach($data AS $key => $vo) {
			if (!stristr($key, 'rseo_') && !stristr($key, 'rs_') && !stristr($key, '__hash__')) {
				$writefile .= " '$key' => '$vo', \r\n";
			} 
		} 
		$writefile .= " ); \r\n";
		$writefile .= " ?>";
		$result = LLWriteFile(CONF_PATH . '/cconfig.php', $writefile);
		if (false !== $result) {
			$this -> success('操作成功,3s后自动返回...');
		} else {
			$this -> error('写入失败');
		} 
	} 
	// 规则分类管理
	public function ecsort() {
		$ec_sid = $this -> _request('ec_sid');
		$EditSort = $this -> _request('EditSort');
		$DeleteSort = $this -> _request('DeleteSort');
		$EditSortList = $this -> _request('EditSortList');
		$DeleteSortList = $this -> _request('DeleteSortList');
		if ($EditSort) {
			$ecsort = M('ecsort');
			$data['ec_sid'] = $ec_sid;
			$data['cs_name'] = $this -> _request('cs_name');
			$data['cs_list'] = $this -> _request('cs_list');
			$sortData = $ecsort -> create($data);
			if (!$ec_sid) {
				$result = $ecsort -> add($sortData);
			} else {
				$result = $ecsort -> save($sortData);
			} 
			if (false !== $result) $this -> ajaxReturn($result, '操作成功,3s后自动返回...', 1);
		} 
		if ($ec_sid && $DeleteSort) {
			$ecsort = D('Ecsort');
			$result = $ecsort -> delete($ec_sid);
			if (false !== $result) $this -> ajaxReturn($ec_sid, '删除成功!', 1);
		} 
		if ($EditSortList) {
			$data = $_POST;
			if (!$data['ec_siddb']) $this -> error('至少选择一个操作对象!');
			foreach($data['ec_siddb'] AS $key => $value) {
				unset($tempData);
				$tempData['ec_sid'] = $key;
				$tempData['cs_name'] = $data['cs_name'][$key];
				$tempData['cs_list'] = $data['cs_list'][$key];
				$ecsort = M('ecsort');
				$sortData = $ecsort -> create($tempData);
				$result = $ecsort -> save($sortData);
			} 
			$this -> ajaxReturn($result, '操作成功,3s后自动返回...', 1);
		} 
		if ($DeleteSortList) {
			$data = $_POST;
			if (!$data['ec_siddb']) $this -> error('至少选择一个操作对象!');
			foreach($data['ec_siddb'] AS $key => $value) {
				$ecsort = M('ecsort');
				$result = $ecsort -> delete($key);
				if (false == $result) break;
			} 
			if (false !== $result) {
				$this -> ajaxReturn($key, '批量删除成功!', 1);
			} else {
				$this -> error('操作失败!');
			} 
		} 
		$ecsort = M('ecsort');
		import("@.ORG.Page"); //导入分页类
		$rows = C('page_rows');
		$ec_sid = $this -> _get('ec_sid');
		$count = $ecsort -> count(); //计算总数
		$p = new Page($count, $rows);
		$list = $ecsort -> limit($p -> firstRow . ',' . $p -> listRows) -> where($sql_where) -> order('cs_list,ec_sid') -> select();
		$p -> setConfig('header', '条采集规则');
		$p -> setConfig('prev', "<");
		$p -> setConfig('next', '>');
		$p -> setConfig('first', '<<');
		$p -> setConfig('last', '>>');
		$page = $p -> show(); //分页的导航条的输出变量
		$this -> assign("page", $page);
		$this -> assign('list', $list);
		$this -> display();
	} 
	// 采集日志管理
	public function eclog() {
		$truncateeclog = $this -> _request('truncateeclog');
		if ($truncateeclog) {
			$eclog = M();
			$result = $eclog -> execute('TRUNCATE TABLE ' . C('DB_PREFIX') . 'eclog');
			if (false !== $result) {
				$this -> success('操作成功!');
			} else {
				$this -> error('操作失败!');
			} 
		} 

		$ec_id = $this -> _request('ec_id');
		$taskid = $this -> _request('taskid');
		$eclog = D('Eclog');
		import("@.ORG.Page"); //导入分页类
		$rows = C('page_rows');
		$sql_where = ' 1 ';
		if ($ec_id) $sql_where .= " AND ec_id='$ec_id' ";
		if ($taskid) $sql_where .= " AND taskid='$taskid' ";
		$count = $eclog -> where($sql_where) -> count(); //计算总数
		$p = new Page($count, $rows);
		$list = $eclog -> limit($p -> firstRow . ',' . $p -> listRows) -> where($sql_where) -> order('taskid desc,ec_id desc') -> select();
		$p -> setConfig('header', '条日志');
		$p -> setConfig('prev', "<");
		$p -> setConfig('next', '>');
		$p -> setConfig('first', '<<');
		$p -> setConfig('last', '>>');
		$page = $p -> show(); //分页的导航条的输出变量
		$this -> assign("page", $page);

		$tasklist = $eclog -> Distinct(true) -> field('taskid') -> select();
		unset($show);
		foreach($tasklist AS $key => $vo) {
			$temtaskid = $vo['taskid'];
			$ckk = $taskid == $temtaskid?" selected ":" ";
			$show .= "<option value='$temtaskid' $ckk>$temtaskid</option>";
		} 
		$show_taskid = "<select name='taskid' onchange=\"window.location.href='__URL__/eclog/ec_id/$ec_id/taskid/'+this.options[this.selectedIndex].value\"><option value=''>请选择任务编号</option>$show</select>";
		$this -> assign('show_taskid', $show_taskid);

		$ec_idlist = $eclog -> Distinct(true) -> field('ec_id') -> select();
		unset($show);
		foreach($ec_idlist AS $key => $vo) {
			$temec_id = $vo['ec_id'];
			$ckk = $ec_id == $temec_id?" selected ":" ";
			$show .= "<option value='$temec_id' $ckk>$temec_id</option>";
		} 
		$show_ec_id = "<select name='ec_id' onchange=\"window.location.href='__URL__/eclog/taskid/$taskid/ec_id/'+this.options[this.selectedIndex].value\"><option value=''>请选择规则编号</option>$show</select>";
		$this -> assign('show_ec_id', $show_ec_id);

		$this -> assign('list', $list);
		$this -> display();
	} 
	// 定时任务管理
	public function autotask() {
		$at_id = $this -> _request('at_id');
		$edit = $this -> _request('edit');
		$autotask = D('Autotask');
		$list = $autotask -> select();
		$this -> assign('list', $list);
		if ($edit && $at_id) {
			$autotask = D('Autotask');
			$taskdata = $autotask -> getByat_id($at_id);
			$this -> assign("taskdata", $taskdata);
			$this -> assign("action", '修改');
		} 
		$this -> display();
	} 
	// 定时任务数据保存
	public function savetask() {
		$autotask = D('Autotask');
		$at_id = $this -> _request('at_id');
		$EditTask = $this -> _request('EditTask');
		$OpenTask = $this -> _request('OpenTask');
		$ColseTask = $this -> _request('ColseTask');
		$DeleteTask = $this -> _request('DeleteTask');
		if ($EditTask) {
			$autotask = D('Autotask');
			$data = $_POST;
			for($i = 0;$i < 24;$i++) {
				unset($$t);
				$t = 'h' . $i;
				if (isset($$t)) {
					$data[$$t] = $data[$$t];
				}else{
					$data[$$t] = '';
				}
			} 
			if ($data = $autotask -> create($data)) {
				if ($at_id) {
					$result = $autotask -> save($data);
				} else {
					$result = $autotask -> add($data);
				} 
			} else {
				$this -> error($autotask -> getError());
			} 
		} 
		if ($OpenTask && $at_id) {
			$savedata['at_id'] = $at_id;
			$savedata['ifclose'] = 0;
			$result = $autotask -> save($savedata);
		} 
		if ($ColseTask && $at_id) {
			$savedata['at_id'] = $at_id;
			$savedata['ifclose'] = 1;
			$result = $autotask -> save($savedata);
		} 
		if ($DeleteTask && $at_id) {
			$result = $autotask -> delete($at_id);
		} 
		if (false !== $result) {
			$this -> success('操作成功,3s后自动返回...');
		} else {
			$this -> error('操作失败');
		} 
	} 
	// 清空缓存
	public function CleanCache() {
		$result = LLDelDir(RUNTIME_PATH);
		if (false !== $result) {
			$this -> success('清空缓存成功,3秒后自动返回...!');
		} else {
			$this -> error('操作失败!');
		} 
	} 
	//在线帮助中心
	public function help() {
		$this -> display();
	}
	// 获取某个模块下的栏目分类
	public function choose_appsort() {
		$cms_module = $this -> _request('cms_module');
		$cms_sfid = $this -> _request('cms_sfid');
		$MTable = GetMpre($cms_module) . 'sort';
		$show = SelectCmsSort($MTable, 'cms_sfid', $cms_sfid);
		$this -> ajaxReturn($show);
	} 
	// 获取入库城市
	public function choose_zone() {
		$fid = $this -> _request('fid');
		$fup = $this -> _request('fup');
		$show = SelectZone('zone', "'cms_szoneid'  onChange=\"choose_street(this.options[this.selectedIndex].value,'{$fid}')\"", $fid, $fup);
		$this -> ajaxReturn($show);
	} 
	public function choose_street() {
		$fid = $this -> _request('fid');
		$fup = $this -> _request('fup');
		$show = SelectZone('street', 'cms_sstreetid', $fid, $fup);
		$this -> ajaxReturn($show);
	} 
	//根据模块自动显示字段下拉菜单
	public function choose_autofields() {
		$cms_module = $this -> _request('cms_module');
		$showid = $this -> _request('showid');
		$show = SelectModfield($cms_module, "'modfield$showid'  onChange='autofield(this.options[this.selectedIndex].value,$showid)'");
		$this -> ajaxReturn($show);
	} 
	public function __destruct() {
	} 
} 

?>