<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>超级医生</title>
	<link rel="stylesheet" href="/Mobile/Public/Mobile/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Mobile/Public/Mobile/css/font-awesome.css">
	<script src="/Mobile/Public/Mobile/js/zepto.min.js"></script>
	<script src="/Mobile/Public/Mobile/js/zepto.min.js"></script>
	<link rel="stylesheet" href="/Mobile/Public/Mobile/css/swiper-4.3.3.min.css">
	<script src="/Mobile/Public/Mobile/js/swiper-4.3.3.min.js"></script>
	<style>
		/*共公头部结束*/
		html{
			font-size:62.5%;
			margin:0 0 0rem;
		}
		input[type=button],input[type=text],input[type=password]{
			-webkit-appearance:none;
			outline:none;
		}
		textarea {
			-webkit-appearance: none;
			outline:none;
		} 
		select{
			-webkit-appearance: none;
			outline:none;
		}
		.mobilePublicNav{
			width:102%;
			height:13rem;
			margin-left:-0.8rem;
			margin-top:-0.8rem;
			background:rgba(0,159,168,1);
			position:fixed;
			z-index:10;
		}
		.navDiv{
			height:13rem;
			line-height:13rem;
			font-size:6rem;
			margin-left:3%;
			margin-top: 0.5rem;
			float:left;
		}
		.cl{
			clear:both;
		}
		.oneNavDiv{
			width:20%;
			text-align:left;
		}
		.twoNavDiv{
			width:50%;
			text-align:center;
			color:white;
		}
		.threeNavDiv{
			text-align:right;
			width:20%;
		}
		/*公共底部开始*/
		.mobilePublicFot{
			width:100%;
			height:15rem;
			right:0rem;
			bottom:0rem;
			background:rgba(0,159,168,1);
			position:fixed;
			z-index:10;
		}
		.fotDiv{
			width:24.8%;
			height:15rem;
			color:white;
			float:left;
		}
		.fotDivFirst{
			height:7.5rem;
			width:24.8%;
		}
		.fotDivTwo{
			width:100%;
			height:7.5rem;
			line-height:7.5rem;
			font-size:4rem;
			text-align:center;
		}
		.firstImg{
			margin-top:3rem;
			margin-left:10rem;
		}
		.fotDivBorder{
			border-right:0.2rem solid #058C94;
		}
		/*左下角导航菜单*/
		.mobilePublicFotNav{
			width:104%;
			left:-1rem;
			top:-1rem;
			position:fixed;
			background:rgba(0,0,0,0.7);
			display:none;
			z-index:100;
		}
		.mobilePublicFotNavTwo{
			width:100%;
			height:auto;
			position:fixed;
			bottom:15rem;
			left:0rem;
		}
		.fotNavList{
			width:100%;
			height:10rem;
			line-height:10rem;
			background:#fff;
			border-bottom:0.2rem solid rgba(220,220,220,1);
			font-size:4rem;
			text-align:center;
			color:rgba(51,51,51,1);
		}
		a{
			text-decoration:none;
		}
	</style>
</head>
	<div class="mobilePublicNav">
		<div class="navDiv oneNavDiv" data-n="1"><img src="/Mobile/Public/Mobile/image/20180614logo.png"></div>
		<div class="navDiv twoNavDiv">400-052-0680</div>
		<div class="navDiv threeNavDiv"><img src="/Mobile/Public/Mobile/image/20180614search.png" style="margin-right:2rem;"></div>
		<div class="cl"></div>
	</div>
<!--标准mui.css-->
<link rel="stylesheet" href="/Mobile/Public/Mobile/css/mui.min.css">
<link href="/Mobile/Public/Mobile/css/mui.picker.css" rel="stylesheet" />
<link href="/Mobile/Public/Mobile/css/mui.poppicker.css" rel="stylesheet" />
	<style>
		/*主体部分开始*/
		.mainBox{
			width:102%;
			height:auto;
			margin-left:-0.8rem;
			background:#f0f0f0;
			position:absolute;
		}
		.BreadcrumbTrail{
			width:100%;
			height:7rem;
			background:#fff;
			margin-top:12rem;
		}
		.breadLeftImg{
			width:12%;
			float:left;
			height:7rem;
			line-height:7rem;
			font-size:3.5rem;
			color:#999;
			text-align:center;
			margin-left:2rem;
		}
		.breadLeftText{
			width:85%;
			height:7rem;
			line-height:7rem;
			float:left;
			font-size:3.5rem;
			color:#999;
			text-align:left;
			overflow: hidden;
			text-overflow:ellipsis;
			white-space: nowrap;
		}
		.questionListBox{
			width:100%;
			height:auto;
			margin-top:2rem;
			padding:2rem;
			background:#fff;
		}
		.questionListTitle{
			width:100%;
			height:auto;
		}
		.questionList{
			width:50%;
			border:0.2rem solid #009FA8;
			height:8rem;
			line-height:8rem;
			float:left;
			color:#009FA8;
			text-align:center;
			font-size:4rem;
		}
		.questionListBoxWait{
			width:100%;
			height:auto;
			margin-top:2rem;
			display:none;
		}
		.questionLists{
			width:100%;
			height:8rem;
			line-height:8rem;
		}
		.questionListsL{
			width:90%;
			height:5rem;
			line-height:5rem;
			float:left;
			color:#666;
			font-size:4rem;
			overflow: hidden;
			text-overflow:ellipsis;
			white-space: nowrap;
		}
		.questionListsR{
			width:10%;
			height:5rem;
			line-height:5rem;
			float:left;
			font-size:3rem;
			color:#666;
		}
		.questionListBoxNice{
			width:100%;
			height:auto;
			margin-top:2rem;
		}
		.questionListNices{
			width:100%;
			height:20rem;
			margin-top:2rem;
		}
		.questionListNiceU{
			width:100%;
			height:7rem;
			line-height:7rem;
			font-size:4rem;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 1;
			overflow: hidden;
		}
		.questionListNiceD{
			width:100%;
			height:13rem;
		}
		.questionListNiceDL{
			width:15%;
			height:13rem;
			line-height:13rem;
			text-align:left;
			float:left;
		}
		.questionListNiceDR{
			width:85%;
			height:13rem;
			line-height:6rem;
			font-size:3.5rem;
			color:#666;
			float:left;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			overflow: hidden;
		}
		.ScreeningConditions{
			width:100%;
			height:10rem;
		}
		.ScreeningConditionsList{
			width:auto;
			height:10rem;
			line-height:10rem;
			font-size:4rem;
			color:#666;
			background:#fff;
			padding-left:2rem;
			border-top:0.1rem solid #f0f0f0;
		}
	</style>
	<div class="mainBox">
		<div class="BreadcrumbTrail">
			<div class="breadLeftImg"><img src="/Mobile/Public/Mobile/image/20180627backtoindex.png"> 首页</div>
			<div class="breadLeftText"> > 互动问答 > 肿瘤类</div>
		</div>
		<div class="ScreeningConditions">
			<div id='showCityPicker' class="ScreeningConditionsList mui-btn mui-btn-block" >选择癌种 ></div>
		</div>
		<div class="questionListBox">
			<div class="questionListTitle">
				<div class="questionList" data-n="1" data-t="1">优质问答</div>
				<div class="questionList" data-n="2" data-t="2">待解决</div>
				<div class="cl"></div>
			</div>
			<div class="questionListBoxWait">
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
				<div class="questionLists">
					<div class="questionListsL">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListsR">6 回答</div>
				</div>
			</div>
			<div class="questionListBoxNice">
				<div class="questionListNices">
					<div class="questionListNiceU">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListNiceD">
						<div class="questionListNiceDL"><img src="/Mobile/Public/Mobile/image/20180626xinneike.png"></div>
						<div class="questionListNiceDR">很高兴为您解答，病因很多，目前不能确定决定的患病原因，就应该要面对现实，去专业的医</div>
					</div>
				</div>
				<div class="questionListNices">
					<div class="questionListNiceU">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListNiceD">
						<div class="questionListNiceDL"><img src="/Mobile/Public/Mobile/image/20180626xinneike.png"></div>
						<div class="questionListNiceDR">很高兴为您解答，病因很多，目前不能确定决定的患病原因，就应该要面对现实，去专业的医</div>
					</div>
				</div>
				<div class="questionListNices">
					<div class="questionListNiceU">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListNiceD">
						<div class="questionListNiceDL"><img src="/Mobile/Public/Mobile/image/20180626xinneike.png"></div>
						<div class="questionListNiceDR">很高兴为您解答，病因很多，目前不能确定决定的患病原因，就应该要面对现实，去专业的医</div>
					</div>
				</div>
				<div class="questionListNices">
					<div class="questionListNiceU">女性右腰部隐痛的原因是什么呢？</div>
					<div class="questionListNiceD">
						<div class="questionListNiceDL"><img src="/Mobile/Public/Mobile/image/20180626xinneike.png"></div>
						<div class="questionListNiceDR">很高兴为您解答，病因很多，目前不能确定决定的患病原因，就应该要面对现实，去专业的医</div>
					</div>
				</div>
			</div>
			<div style="width:100%;height:20rem;"></div>
		</div>
	</div>
	<script src="/Mobile/Public/Mobile/js/jquery.min.js"></script>
	<script src="/Mobile/Public/Mobile/js/mui.min.js"></script>
	<script src="/Mobile/Public/Mobile/js/mui.picker.js"></script>
	<script src="/Mobile/Public/Mobile/js/mui.poppicker.js"></script>
	<script>
		//动态改变导航栏信息
		$('.oneNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180627reback.png">');
		$('.oneNavDiv').data('n',2);
		$('.twoNavDiv').html('肿瘤类问答');
		//遍历切换问题
		$('.questionList').each(function(){
			var n = $(this).data('n');
			if(n == 1){
				$(this).css({'background':'#009FA8','color':'#fff'});
			}
		});
		//问答列表点击切换
		$('.questionList').on('click',function(){
			var n = $(this).data('n');
			var t = $(this).data('t');
			if(n == 2){
				$('.questionList').css({'background':'#fff','color':'#009FA8'});
				$('.questionList').data('n',2);
				$(this).css({'background':'#009FA8','color':'#fff'});
				$(this).data('n',1);
			}
			if(t==1){
				$('.questionListBoxWait').hide('fast');
				$('.questionListBoxNice').show('fast');
			}else if(t==2){
				$('.questionListBoxNice').hide('fast');
				$('.questionListBoxWait').show('fast');
			}
		});
		//筛选联动-级联示例
		var cityPicker = new mui.PopPicker({
			layer: 2
		});
		//定义疾病分类Json数组
		var diseaseArr = <?php echo ($diseaseArr); ?>;
		var diseaseJson = JSON.parse(diseaseArr);
		cityPicker.setData(diseaseJson);
		var showCityPickerButton = doc.getElementById('showCityPicker');
		var cityResult = doc.getElementById('cityResult');
		showCityPickerButton.addEventListener('tap', function(event) {
			cityPicker.show(function(items) {
				cityResult.innerText = "你选择的城市是:" + items[0].text + " " + items[1].text;
				//返回 false 可以阻止选择框的关闭
				//return false;
			});
		}, false);
		//-----------------------------------------
	</script> 
	<div class="mobilePublicFot">
		<div class="fotDiv fotDivBorder fotDivBorderNav" data-n="1">
			<div class="fotDivFirst"><img src="/Mobile/Public/Mobile/image/20180614daohang.png" class="firstImg"></div>
			<div class="fotDivTwo">导航</div>
		</div>
		<div class="fotDiv fotDivBorder">
			<div class="fotDivFirst"><img src="/Mobile/Public/Mobile/image/20180614dianhuazixun.png" class="firstImg"></div>
			<div class="fotDivTwo">电话咨询</div>
		</div>
		<div class="fotDiv fotDivBorder">
			<div class="fotDivFirst"><img src="/Mobile/Public/Mobile/image/20180614zaixianzixun.png" class="firstImg"></div>
			<div class="fotDivTwo">在线咨询</div>
		</div>
		<div class="fotDiv">
			<div class="fotDivFirst"><img src="/Mobile/Public/Mobile/image/20180614liuyan.png" class="firstImg"></div>
			<div class="fotDivTwo">立即留言</div>
		</div>
	</div>
	<div class="mobilePublicFotNav">
		<div class="mobilePublicFotNavTwo">
			<div class="fotNavList">首页</div>
			<div class="fotNavList">互动问答</div>
			<div class="fotNavList">前沿资讯</div>
			<div class="fotNavList">疾病知识</div>
			<div class="fotNavList">权威医院</div>
			<div class="fotNavList">超级专家</div>
		</div>
	</div>
	<script>
		var height = $(window).height()/12-2;
		$('.mobilePublicFotNav').css({'height':height+'rem','top':'12.2rem'});
		//点击展开导航
		$('.fotDivBorderNav').click(function(){
			var n = $(this).data('n');
			if(n==1){
				$('.mobilePublicFotNav').show('fast');
				$(this).css({'backgroundColor':'#008c95'});
				$(this).data('n',2);
			}else if(n==2){
				$(this).css({'backgroundColor':'#009FA8'});
				$('.mobilePublicFotNav').hide('fast');
				$(this).data('n',1);
			}
		});
		$('.mobilePublicFotNav').on("click",function(){
			$('.mobilePublicFotNav').hide('fast');
			$('.fotDivBorderNav').css({'backgroundColor':'#009FA8'});
			$('.fotDivBorderNav').data('n',1);
		});
		//定时刷新页面
		setInterval(function(){
			<!-- window.location.reload() -->
		},5000);
		$('.oneNavDiv').click(function(){
			var n = $(this).data('n');
			if(n==2){
				//返回上个页面
				window.location.href=document.referrer;
			}
		});
		//透明导航栏
		var publicN = $('.oneNavDiv').data('n');
		$(window).scroll(function(){
			var bodyScrollTop = $(window).scrollTop();
			if(bodyScrollTop > 100){
				$('.mobilePublicNav').css({'background':'#fff'});
				$('.twoNavDiv').css({'color':'#999'});
				<!-- alert(publicN); -->
				if(publicN == 2){
					$('.oneNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180627newreback.png">');
				}else{
					$('.oneNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180627newlogo.png">');
				}
				$('.threeNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180627newsearch.png" style="margin-right:2rem;">');
				$('.mobilePublicNav').css({'box-shadow':'0rem 0rem 4rem rgba(220,220,220,1)'});
			}else{
				$('.mobilePublicNav').css({'background':'#009FA8'});
				$('.twoNavDiv').css({'color':'#fff'});
				if(publicN == 2){
					$('.oneNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180627reback.png">');
				}else{
					$('.oneNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180614logo.png">');
				}
				$('.threeNavDiv').html('<img src="/Mobile/Public/Mobile/image/20180614search.png" style="margin-right:2rem;">');
				
			}
		});
	</script>
</html>