<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>结算工时</title>
		<link rel="stylesheet" type="text/css" href="/AM/Public/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/AM/Public/css/funcs.css">
		<link rel="stylesheet" type="text/css" href="/AM/Public/css/WorkHour.css">
		<script>
			var url = "/AM/index.php/Home/Scheduling";
		</script>
		<script type="text/javascript" src="/AM/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/AM/Public/js/funcs.js"></script>
		<script type="text/javascript" src="/AM/Public/js/WorkHour.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="navigationbar">
			    <ul class="nav nav-tabs">
			    <li role="presentation" id="sy"><a href="javascript:void(0)">首页</a></li>
			    <?php if(I('cookie.type') == 1): ?><li role="presentation" id="gr"><a href="javascript:void(0)">个人信息管理</a></li>
			        <li role="presentation" id="dj"><a href="javascript:void(0)">登记空闲时间</a></li>
			        <li role="presentation" id="sx"><a href="javascript:void(0)">上下班登记</a></li>
			    <?php else: ?>
			        <li role="presentation" id="gl"><a href="javascript:void(0)">管理助理</a></li>
			        <li role="presentation" class="active" id="js"><a href="javascript:void(0)">结算工时</a></li>
			        <li role="presentation" id="zl"><a href="javascript:void(0)">助理排班</a></li><?php endif; ?>
			    <li role="presentation"><a href="javascript:void(0)">查看排班表</a></li>
			    <li role="presentation"><a href="javascript:void(0)">退出</a></li>
			    </ul>
			</div>
				<div id="WorkHour">
					<form>
						<table class="table table-hover" >
							<thead>
								<tr>
									<th>学号</th>
									<th>姓名</th>
									<th>迟到早退次数</th>
									<th>未按时工作的工时</th>
									<th>正常出勤工时</th>
									<th>电话</th>
									<th>电子邮件</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						<div class="row-fluid">
							<p>每月27日后可进行该月的结算工时</p>
							<div class="span12">
								 <button class="btn btn-primary" id="Settlement" type="button">结算工时</button>
							</div>
						</div>
					</form>
				</div>

		</div>
		
	</body>
</html>