<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\wamp\www\jlcrm\web/../application/index\view\index\index.html";i:1501584335;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>健丽医美信息管理系统</title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/>
<!-- bootstrap - css -->
<link href="BJUI/themes/css/bootstrap.css" rel="stylesheet">
<!-- core - css -->
<link href="BJUI/themes/css/style.css" rel="stylesheet">
<link href="BJUI/themes/blue/core.css" id="bjui-link-theme" rel="stylesheet">
<!-- plug - css -->
<link href="BJUI/plugins/kindeditor_4.1.10/themes/default/default.css" rel="stylesheet">
<link href="BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="BJUI/plugins/niceValidator/jquery.validator.css" rel="stylesheet">
<link href="BJUI/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet">
<link href="BJUI/themes/css/FA/css/font-awesome.min.css" rel="stylesheet">
<!--[if lte IE 7]>
<link href="BJUI/themes/css/ie7.css" rel="stylesheet">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lte IE 9]>
    <script src="BJUI/other/html5shiv.min.js"></script>
    <script src="BJUI/other/respond.min.js"></script>
<![endif]-->
<!-- jquery -->
<script src="BJUI/js/jquery-1.7.2.min.js"></script>
<script src="BJUI/js/jquery.cookie.js"></script>
<!--[if lte IE 9]>
<script src="BJUI/other/jquery.iframe-transport.js"></script>    
<![endif]-->
<!-- BJUI.all 分模块压缩版 -->
<script src="BJUI/js/bjui-all.js"></script>
<!-- 以下是B-JUI的分模块未压缩版，建议开发调试阶段使用下面的版本 -->
<!--
<script src="BJUI/js/bjui-core.js"></script>
<script src="BJUI/js/bjui-regional.zh-CN.js"></script>
<script src="BJUI/js/bjui-frag.js"></script>
<script src="BJUI/js/bjui-extends.js"></script>
<script src="BJUI/js/bjui-basedrag.js"></script>
<script src="BJUI/js/bjui-slidebar.js"></script>
<script src="BJUI/js/bjui-contextmenu.js"></script>
<script src="BJUI/js/bjui-navtab.js"></script>
<script src="BJUI/js/bjui-dialog.js"></script>
<script src="BJUI/js/bjui-taskbar.js"></script>
<script src="BJUI/js/bjui-ajax.js"></script>
<script src="BJUI/js/bjui-alertmsg.js"></script>
<script src="BJUI/js/bjui-pagination.js"></script>
<script src="BJUI/js/bjui-util.date.js"></script>
<script src="BJUI/js/bjui-datepicker.js"></script>
<script src="BJUI/js/bjui-ajaxtab.js"></script>
<script src="BJUI/js/bjui-datagrid.js"></script>
<script src="BJUI/js/bjui-tablefixed.js"></script>
<script src="BJUI/js/bjui-tabledit.js"></script>
<script src="BJUI/js/bjui-spinner.js"></script>
<script src="BJUI/js/bjui-lookup.js"></script>
<script src="BJUI/js/bjui-tags.js"></script>
<script src="BJUI/js/bjui-upload.js"></script>
<script src="BJUI/js/bjui-theme.js"></script>
<script src="BJUI/js/bjui-initui.js"></script>
<script src="BJUI/js/bjui-plugins.js"></script>
-->
<!-- plugins -->
<!-- swfupload for uploadify && kindeditor -->
<script src="BJUI/plugins/swfupload/swfupload.js"></script>
<!-- kindeditor -->
<script src="BJUI/plugins/kindeditor_4.1.10/kindeditor-all.min.js"></script>
<script src="BJUI/plugins/kindeditor_4.1.10/lang/zh_CN.js"></script>
<!-- colorpicker -->
<script src="BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- ztree -->
<script src="BJUI/plugins/ztree/jquery.ztree.all-3.5.js"></script>
<!-- nice validate -->
<script src="BJUI/plugins/niceValidator/jquery.validator.js"></script>
<script src="BJUI/plugins/niceValidator/jquery.validator.themes.js"></script>
<!-- bootstrap plugins -->
<script src="BJUI/plugins/bootstrap.min.js"></script>
<script src="BJUI/plugins/bootstrapSelect/bootstrap-select.min.js"></script>
<script src="BJUI/plugins/bootstrapSelect/defaults-zh_CN.min.js"></script>
<!-- icheck -->
<script src="BJUI/plugins/icheck/icheck.min.js"></script>
<!-- dragsort -->
<script src="BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js"></script>
<!-- HighCharts -->
<script src="BJUI/plugins/highcharts/highcharts.js"></script>
<script src="BJUI/plugins/highcharts/highcharts-3d.js"></script>
<script src="BJUI/plugins/highcharts/themes/gray.js"></script>
<!-- ECharts -->
<script src="BJUI/plugins/echarts/echarts.js"></script>
<!-- other plugins -->
<script src="BJUI/plugins/other/jquery.autosize.js"></script>
<link href="BJUI/plugins/uploadify/css/uploadify.css" rel="stylesheet">
<script src="BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js"></script>
<script src="BJUI/plugins/download/jquery.fileDownload.js"></script>
<!-- init -->
<script type="text/javascript">
$(function() {
    BJUI.init({
        JSPATH       : 'BJUI/',         //[可选]框架路径
        PLUGINPATH   : 'BJUI/plugins/', //[可选]插件路径
        loginInfo    : {url:'login_timeout.html', title:'登录', width:400, height:200}, // 会话超时后弹出登录对话框
        statusCode   : {ok:200, error:300, timeout:301}, //[可选]
        ajaxTimeout  : 50000, //[可选]全局Ajax请求超时时间(毫秒)
        pageInfo     : {total:'total', pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
        alertMsg     : {displayPosition:'topcenter', displayMode:'slide', alertTimeout:3000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
        keys         : {statusCode:'statusCode', message:'message'}, //[可选]
        ui           : {
                         windowWidth      : 0, //框架显示宽度，0=100%宽，> 600为则居中显示
                         showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
                         clientPaging     : true, //[可选]是否在客户端响应分页及排序参数
                         overwriteHomeTab : false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
                       },
        debug        : true,    // [可选]调试模式 [true|false，默认false]
        theme        : 'sky' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
    })
    
    // main - menu
    $('#bjui-accordionmenu')
        .collapse()
        .on('hidden.bs.collapse', function(e) {
            $(this).find('> .panel > .panel-heading').each(function() {
                var $heading = $(this), $a = $heading.find('> h4 > a')
                
                if ($a.hasClass('collapsed')) $heading.removeClass('active')
            })
        })
        .on('shown.bs.collapse', function (e) {
            $(this).find('> .panel > .panel-heading').each(function() {
                var $heading = $(this), $a = $heading.find('> h4 > a')
                
                if (!$a.hasClass('collapsed')) $heading.addClass('active')
            })
        })
        
    $(document).on('click', 'ul.menu-items li > a', function(e) {
        var $a = $(this), $li = $a.parent(), options = $a.data('options').toObj(), $children = $li.find('> .menu-items-children')
        var onClose = function() {
            $li.removeClass('active')
        }
        var onSwitch = function() {
            $('#bjui-accordionmenu').find('ul.menu-items li').removeClass('switch')
            $li.addClass('switch')
        }
        
        $li.addClass('active')
        if (options) {
            options.url      = $a.attr('href')
            options.onClose  = onClose
            options.onSwitch = onSwitch
            if (!options.title) options.title = $a.text()
            
            if (!options.target)
                $a.navtab(options)
            else
                $a.dialog(options)
        }
        if ($children.length) {
            $li.toggleClass('open')
        }
        
        e.preventDefault()
    })
    
    //时钟
    var today = new Date(), time = today.getTime()
    $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
    setInterval(function() {
        today = new Date(today.setSeconds(today.getSeconds() + 1))
        $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
    }, 1000)
})

//菜单-事件
function MainMenuClick(event, treeId, treeNode) {
    event.preventDefault()
    
    if (treeNode.isParent) {
        var zTree = $.fn.zTree.getZTreeObj(treeId)
        
        zTree.expandNode(treeNode, !treeNode.open, false, true, true)
        return
    }
    
    if (treeNode.target && treeNode.target == 'dialog')
        $(event.target).dialog({id:treeNode.tabid, url:treeNode.url, title:treeNode.name})
    else
        $(event.target).navtab({id:treeNode.tabid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
}
</script>
<!-- for doc begin -->
<link type="text/css" rel="stylesheet" href="/js/syntaxhighlighter-2.1.382/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="/js/syntaxhighlighter-2.1.382/styles/shThemeEclipse.css"/>
<script type="text/javascript" src="/js/syntaxhighlighter-2.1.382/scripts/brush.js"></script>
<link href="doc/doc.css" rel="stylesheet">
<script type="text/javascript">
$(function(){
    SyntaxHighlighter.config.clipboardSwf = '/js/syntaxhighlighter-2.1.382/scripts/clipboard.swf'
    $(document).on(BJUI.eventType.initUI, function(e) {
        SyntaxHighlighter.highlight();
    })
})
</script>
<!-- for doc end -->
<!-- 自定义css -->
<link href="/BJUI/themes/css/custom.css" rel="stylesheet">
<!-- 自定义css -->
<!--自定义js-->
<script type="text/javascript" src="/js/custom.js"></script>
<!--自定义js-->
</head>
<body>
    <!--[if lte IE 7]>
        <div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
    <![endif]-->
    <div id="bjui-window">
    <header id="bjui-header">
        <div class="bjui-navbar-header">
            <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse" data-target="#bjui-navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="bjui-navbar-logo" href="#">健丽医美信息管理系统</a>
        </div>
        <nav id="bjui-navbar-collapse">
            <ul class="bjui-navbar-right">
                <li class="datetime"><div><span id="bjui-date"></span> <span id="bjui-clock"></span></div></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> dr.gan(JL000012) <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="changepwd.html" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登陆</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> 健丽集团（100） <i class="fa fa-exchange"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 广州健丽（200）</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 香港 健丽（300）</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 香港 健丽（300）</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 香港 健丽（300）</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 香港 健丽（300）</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="bjui-hnav">
            <button type="button" class="btn-default bjui-hnav-more-left" title="导航菜单左移"><i class="fa fa-angle-double-left"></i></button>
            <div id="bjui-hnav-navbar-box">
            	<!-- 导航结束 -->
            	<ul id="bjui-hnav-navbar">
				    <!--导航整理-->
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('63F4D399D6E940D1B353A60900E92A8A');">
				            <i class="fa fa-google"></i>营销中心</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="基础数据" data-faicon="">
				                <li>
				                    <a href="/Sales/SalesIfAccount/Index" data-options="{id:'SalesIfAccountIndex', faicon:'fa-'}">账号数据</a></li>
				                <li>
				                    <a href="/Sales/SalesPlateform/Index" data-options="{id:'SalesPlateformIndex', faicon:'fa-'}">平台基础数据</a></li>
				                <li>
				                    <a href="/Sales/SalesAccountInfo/Index" data-options="{id:'SalesAccountInfoIndex', faicon:'fa-'}">账户</a></li>
				                <li>
				                    <a href="/Sales/SalesCampaignInfo/Index" data-options="{id:'SalesCampaignInfoIndex', faicon:'fa-'}">计划</a></li>
				                <li>
				                    <a href="/Sales/SalesAdGroup/Index" data-options="{id:'SalesAdGroupIndex', faicon:'fa-'}">单元</a></li>
				                <li>
				                    <a href="/Sales/SalesCreativeInfo/Index" data-options="{id:'SalesCreativeInfoIndex', faicon:'fa-'}">创意</a></li>
				                <li>
				                    <a href="/Sales/SalesKeywordInfo/Index" data-options="{id:'SalesKeywordInfoIndex', faicon:'fa-'}">关键词</a></li>
				                <li>
				                    <a href="/Sales/BDLog/Index/" data-options="{id:'BDLogIndex', faicon:'fa-'}">错误日志</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="关键词查询" data-faicon="">
				                <li>
				                    <a href="/Sales/KeywordConsumeQuery/Index" data-options="{id:'KeywordConsumeQueryIndex', faicon:'fa-'}">关键词消费查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordNoImpressionQuery/Index" data-options="{id:'KeywordNoImpressionQueryIndex', faicon:'fa-'}">关键词未展现查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordNoClickQuery/Index" data-options="{id:'KeywordNoClickQueryIndex', faicon:'fa-'}">关键词有展现未点击查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordNoVisit/Index" data-options="{id:'KeywordNoVisitIndex', faicon:'fa-'}">关键词有点击未打开查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordNoDialog/Index" data-options="{id:'KeywordNoDialogIndex', faicon:'fa-'}">关键词有访问未对话查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordNoReservation/Index" data-options="{id:'KeywordNoReservationIndex', faicon:'fa-'}">关键词有对话未预约查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordsImpressionQuery/Index" data-options="{id:'KeywordsImpressionQueryIndex', faicon:'fa-'}">关键词展现排名查询</a></li>
				                <li>
				                    <a href="/Sales/KeywordsSearchQuery/Index" data-options="{id:'SearchWordQueryIndex', faicon:'fa-'}">搜索词分析</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="消费数据分析" data-faicon="">
				                <li>
				                    <a href="/Sales/SalesAccountAnalysis/Index" data-options="{id:'SalesSalesAccountAnalysisIndex', faicon:'fa-'}">账户分析</a></li>
				                <li>
				                    <a href="/Sales/SalesDialogVisitAnalysis/Index" data-options="{id:'SalesDialogVisitAnalysisIndex', faicon:'fa-'}">对话来院分析</a></li>
				                <li>
				                    <a href="/Sales/SalesDialogProductAnalysis/Index" data-options="{id:'SalesDialogProductAnalysisIndex', faicon:'fa-'}">对话项目分析</a></li>
				                <li>
				                    <a href="/Sales/SalesVisitAnalysis/Index" data-options="{id:'SalesDVisitAnalysisIndex', faicon:'fa-'}">来院分析</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="网页数据查询" data-faicon="">
				                <li>
				                    <a href="/Sales/DiaLogMessage/Index" data-options="{id:'DiaLogMessageIndex', faicon:'fa-'}">商务通对话查询</a></li>
				                <li>
				                    <a href="/Sales/WebsiteQuery/Index" data-options="{id:'WebsiteQueryIndex', faicon:'fa-'}">网页分析</a></li>
				                <li>
				                    <a href="/Sales/IPQuery/Index" data-options="{id:'IpQueryIndex', faicon:'fa-'}">IP分析</a></li>
				            </ul>
				        </div>
				    </li>
				    <li class='active'>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('F6F2D774AF6B451DBC96A4E7011DB566');">
				            <i class="fa fa-jsfiddle"></i>网电管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="网电预约" data-faicon="rss">
				                <li>
				                    <a href="/Reservation/TempCustInfo/Indexorgid" data-options="{id:'ReservationTempCustInfoIndexorgid', faicon:'fa-plus-square'}">创建预约单(健丽集团)</a></li>
				                <li>
				                    <a href="/Reservation/ConsultingQuantity/Index" data-options="{id:'ConsultingQuantityIndex', faicon:'fa-plus-square'}">咨询量录入</a></li>
				                <li>
				                    <a href="/Reservation/ConsultingQuantity/CompanyIndex" data-options="{id:'ConsultingQuantityCompanyIndex', faicon:'fa-'}">咨询量查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="正式客户预约" data-faicon="rss">
				                <li>
				                    <a href="/Reservation/CustSearch/Index" data-options="{id:'ReservationCustSearchIndex', faicon:'fa-search'}">正式客户二次预约</a></li>
				                <li>
				                    <a href="/Reservation/CustReservation/Index" data-options="{id:'ReservationCustReservationIndex', faicon:'fa-files-o'}">正式客户预约单</a></li>
				                <li>
				                    <a href="/Reservation/CustReservation/CustIndex" data-options="{id:'CustReservation', faicon:'fa-files-o'}">正式客户预约单（个人）</a></li>
				                <li>
				                    <a href="/Field/CustArrive/Index" data-options="{id:'FieldCustArriveIndex', faicon:'fa-plus-square'}">正式客户来院查询</a></li>
				                <li>
				                    <a href="/Field/CustArrive/MyIndex" data-options="{id:'CustArriveMyIndex', faicon:'fa-'}">正式客户来院查询(个人)</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="网电预约查询" data-faicon="list">
				                <li>
				                    <a href="/Reservation/TempCustSearch/Index" data-options="{id:'ReservationTempCustSearchIndex', faicon:'fa-search'}">临客查询（个人）</a></li>
				                <li>
				                    <a href="/Reservation/TempCustSearch/RecallIndex" data-options="{id:'ReservationTempCustSearchRecallIndex', faicon:'fa-search'}">临客查询（回访）</a></li>
				                <li>
				                    <a href="/Reservation/TempCustSearch/CompayIndex" data-options="{id:'ReservationTempCustSearchIndexs', faicon:'fa-search'}">临客查询（公司）</a></li>
				                <li>
				                    <a href="/Reservation/ToHospital/Index" data-options="{id:'ReservationToHospitalIndex', faicon:'fa-search'}">来院查询（个人）</a></li>
				                <li>
				                    <a href="/Reservation/ToHospital/RecallIndex" data-options="{id:'ReservationToHospitalRecallIndex', faicon:'fa-search'}">来院查询（回访）</a></li>
				                <li>
				                    <a href="/Reservation/ToHospital/CompayIndex" data-options="{id:'ReservationToHospitalCompayIndexs', faicon:'fa-search'}">来院查询（公司）</a></li>
				                <li>
				                    <a href="/Reservation/ReservationSearch/Index" data-options="{id:'ReservationReservationSearchIndex', faicon:'fa-search'}">预约单查询（个人）</a></li>
				                <li>
				                    <a href="/Reservation/ReservationSearch/RecallIndex" data-options="{id:'ReservationReservationSearchRecallIndex', faicon:'fa-search'}">预约单查询（回访）</a></li>
				                <li>
				                    <a href="/Reservation/ReservationSearch/CompayIndex" data-options="{id:'ReservationReservationSearchCompayIndexs', faicon:'fa-search'}">预约单查询（公司）</a></li>
				                <li>
				                    <a href="/Reservation/TempCustUnarrive/ConsultantIndex" data-options="{id:'ReservationTempCustUnarriveConsultantIndex', faicon:'fa-'}">临时客户预约未来院查询(个人)</a></li>
				                <li>
				                    <a href="/Reservation/TempCustUnarrive/PlanRecallEmpIndex" data-options="{id:'ReservationTempCustUnarrivePlanRecallEmpIndex', faicon:'fa-'}">临时客户预约未来院查询(回访)</a></li>
				                <li>
				                    <a href="/Reservation/TempCustUnarrive/Index" data-options="{id:'ReservationTempCustUnarriveIndex', faicon:'fa-plus-square'}">临时客户预约未来院查询(公司)</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="营销" data-faicon="">
				                <li>
				                    <a href="/Reservation/SalesInvestment/Index" data-options="{id:'SalesInvestmentIndex', faicon:'fa-'}">营销投入录入</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="集团网电预约查询" data-faicon="">
				                <li>
				                    <a href="/Reservation/TempCustSearch/TempOrgIndex" data-options="{id:'ReservationTempCustSearchTempOrgIndex', faicon:'fa-search'}">临客查询(集团个人）</a></li>
				                <li>
				                    <a href="/Reservation/TempCustSearch/TempOrgCompayIndex" data-options="{id:'ReservationTempCustSearchTempOrgCompayIndex', faicon:'fa-search'}">临客查询(集团公司）</a></li>
				                <li>
				                    <a href="/Reservation/ToHospital/GroupIndex" data-options="{id:'ReservationToHospitalGroupIndex', faicon:'fa-search'}">来院查询（集团个人）</a></li>
				                <li>
				                    <a href="/Reservation/ToHospital/GroupCompayIndex" data-options="{id:'ReservationToHospitalGroupCompayIndex', faicon:'fa-search'}">来院查询（集团公司）</a></li>
				                <li>
				                    <a href="/Reservation/ReservationSearch/GroupIndex" data-options="{id:'ReservationSearchGroupIndex', faicon:'fa-search'}">预约单查询(集团个人)</a></li>
				                <li>
				                    <a href="/Reservation/ReservationSearch/GroupCompayIndex" data-options="{id:'ReservationSearchGroupCompayIndex', faicon:'fa-search'}">预约单查询(集团公司)</a></li>
				                <li>
				                    <a href="/Reservation/TempCustUnarrive/GroupConsultantIndex" data-options="{id:'ReservationTempCustUnarriveGroupConsultantIndex', faicon:'fa-'}">临时客户预约未来院查询(集团咨询师)</a></li>
				                <li>
				                    <a href="/Reservation/TempCustUnarrive/GroupIndex" data-options="{id:'ReservationTempCustUnarriveGroupIndex', faicon:'fa-plus-square'}">临时客户预约未来院查询(集团)</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('01B05253F4854B67A772A4E80114F3CD');">
				            <i class="fa fa-paragraph"></i>现场管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="接待管理" data-faicon="street-view">
				                <li>
				                    <a href="/Field/ReceptionNote/Index" data-options="{id:'FieldReceptionNoteIndex', faicon:'fa-plus-square'}">接待分诊</a></li>
				                <li>
				                    <a href="/Field/ReceptionSearch/Index" data-options="{id:'FieldReceptionSearchIndex', faicon:'fa-plus-square'}">接诊列表</a></li>
				                <li>
				                    <a href="/Field/CheckInfo/Index" data-options="{id:'FieldCheckInfoIndex', faicon:'fa-plus-square'}">资料核对</a></li>
				                <li>
				                    <a href="/Field/OutpatientOrder/Index" data-options="{id:'OutpatientOrderIndex', faicon:'fa-'}">门诊预约</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="咨询开单" data-faicon="cart-plus">
				                <li>
				                    <a href="/Field/ChargeBill/Index" data-options="{id:'FieldChargeBillIndex', faicon:'fa-plus-square'}">开单管理</a></li>
				                <li>
				                    <a href="/Field/CompanyChargeBill/Index" data-options="{id:'CompanyChargeBillIndex', faicon:'fa-'}">开单管理（公司）</a></li>
				                <li>
				                    <a href="/Field/ChargeBillOther/Index" data-options="{id:'FieldChargeBillOtherIndex', faicon:'fa-plus-square'}">其它开单</a></li>
				                <li>
				                    <a href="/Field/ChargeBillSearch/Index" data-options="{id:'FieldChargeBillSearchIndex', faicon:'fa-plus-square'}">我的收费单</a></li>
				                <li>
				                    <a href="/Field/ChargeBillSearch/CompanyIndex" data-options="{id:'FieldChargeBillSearchCompanyIndex', faicon:'fa-plus-square'}">我的收费单（公司）</a></li>
				                <li>
				                    <a href="/Field/MyReceptionNote/Index" data-options="{id:'MyReceptionNoteIndex', faicon:'fa-plus-square'}">我的接诊信息</a></li>
				                <li>
				                    <a href="/Field/MyReceptionNote/CompanyIndex" data-options="{id:'FieldMyReceptionNoteCompanyIndex', faicon:'fa-plus-square'}">我的接诊信息（公司）</a></li>
				                <li>
				                    <a href="/Field/Repay/Index" data-options="{id:'FieldRepayIndex', faicon:'fa-reply'}">还款管理</a></li>
				                <li>
				                    <a href="/Field/Repay/CompanyIndex" data-options="{id:'FieldRepayCompanyIndex', faicon:'fa-reply'}">还款管理（公司）</a></li>
				                <li>
				                    <a href="/Field/ReceptionNoteCheck/Index" data-options="{id:'ReceptionNoteCheckIndex', faicon:'fa-list-alt'}">接诊表检查</a></li>
				                <li>
				                    <a href="/Field/ReceptionNoteCheck/CompanyIndex" data-options="{id:'FieldReceptionNoteCheckCompanyIndex', faicon:'fa-list-alt'}">接诊表检查（公司）</a></li>
				                <li>
				                    <a href="/Field/CustToRequest/Index" data-options="{id:'FieldCustToRequestIndex', faicon:'fa-search'}">客户需求查询</a></li>
				                <li>
				                    <a href="/Field/CustToRequest/CompanyIndex" data-options="{id:'FieldCustToRequestCompanyIndex', faicon:'fa-search'}">客户需求查询（公司）</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客户管理(咨询师)" data-faicon="user">
				                <li>
				                    <a href="/Manage/MyCust/Index" data-options="{id:'MyCustIndex', faicon:'fa-user'}">我的客户</a></li>
				                <li>
				                    <a href="/Manage/MyPremoneyCust/Index" data-options="{id:'MyPremoneyCustIndex', faicon:'fa-user'}">我的预约金客户</a></li>
				                <li>
				                    <a href="/ReturnCall/MyDebtCust/Index" data-options="{id:'MyDebtCustIndex', faicon:'fa-user'}">我的欠款客户</a></li>
				                <li>
				                    <a href="/Field/MyWaitCareCust/Index" data-options="{id:'MyWaitCareCustIndex', faicon:'fa-plus-square'}">我的缴费未治疗客户</a></li>
				                <li>
				                    <a href="/ReturnCall/MySavecardCust/Index" data-options="{id:'MySavecardCustIndex', faicon:'fa-user'}">我的储值客户</a></li>
				                <li>
				                    <a href="/ReturnCall/MyDepositCust/Index" data-options="{id:'MyDepositCustIndex', faicon:'fa-user'}">我的住院押金客户</a></li>
				                <li>
				                    <a href="/Manage/MyDealCust/Index" data-options="{id:'MyDealCust', faicon:'fa-user'}">我的成交客户</a></li>
				                <li>
				                    <a href="/Manage/MyNoDealCust/Index" data-options="{id:'MyNoDealCust', faicon:'fa-user'}">我的未成交客户</a></li>
				                <li>
				                    <a href="/CustAnalysis/CustLabelConsumeQuery/FieldIndex" data-options="{id:'FieldIndex', faicon:'fa-user'}">我的标签客户</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客户管理(客户代表)" data-faicon="user">
				                <li>
				                    <a href="/Field/RepresentativeMyCust/Index" data-options="{id:'RepresentativeMyCustIndex', faicon:'fa-'}">我的客户</a></li>
				                <li>
				                    <a href="/Field/RepresentativePremoneyCust/Index" data-options="{id:'RepresentativePremoneyCustIndex', faicon:'fa-'}">我的预约金用户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeMyWaitCareCust/Index" data-options="{id:'RepresentativeMyWaitCareCustIndex', faicon:'fa-'}">我的缴费未治疗客户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeDebtCust/Index" data-options="{id:'RepresentativeDebtCustIndex', faicon:'fa-'}">我的欠款客户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeSavecardCust/Index" data-options="{id:'RepresentativeSavecardCustIndex', faicon:'fa-'}">我的储值用户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeDepositCust/Index" data-options="{id:'RepresentativeDepositCustIndex', faicon:'fa-'}">我的住院押金客户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeDealCust/Index" data-options="{id:'RepresentativeDealCustIndex', faicon:'fa-'}">我的成交客户</a></li>
				                <li>
				                    <a href="/Field/RepresentativeNoDealCust/Index" data-options="{id:'RepresentativeNoDealCustIndex', faicon:'fa-'}">我的未成交客户</a></li>
				                <li>
				                    <a href="/CustAnalysis/CustLabelConsumeQuery/RepreIndex" data-options="{id:'RepreIndex', faicon:'fa-user'}">我的标签客户</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="预约看板" data-faicon="calendar">
				                <li>
				                    <a href="/Field/ReservationItemHospitalBoard/Index" data-options="{id:'ReservationItemHospitalBoardIndex', faicon:'fa-'}">全院管理看板</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="审批" data-faicon="">
				                <li>
				                    <a href="/Field/ChargeBillFlow/ChargeBillFlowList" data-options="{id:'ChargeBillFlowList', faicon:'fa-'}">流程审批</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('6949CCBB033348CD88E3A68B00ECC6F8');">
				            <i class="fa fa-table"></i>预约管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="预约看板" data-faicon="calendar">
				                <li>
				                    <a href="/Field/RepresentativeHospitalBoard/Index" data-options="{id:'FieldRepresentativeHospitalBoardIndex', faicon:'fa-calendar'}">全院预约看板</a></li>
				                <li>
				                    <a href="/Field/RepresentativeHospitalBoard/OutpatientIndex" data-options="{id:'FieldRepresentativeHospitalBoardOutpatientIndex', faicon:'fa-'}">全院门诊预约看板</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="排班" data-faicon="calendar">
				                <li>
				                    <a href="/Field/EmpSchedule/ConfList" data-options="{id:'EmpScheduleConfList', faicon:'fa-calendar'}">排班配置</a></li>
				                <li>
				                    <a href="/Field/EmpSchedule/Index" data-options="{id:'EmpSchedule', faicon:'fa-calendar'}">员工排班</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('6BD88073BDC0448BA476A522009C256C');">
				            <i class="fa fa-cny"></i>财务管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="收银管理" data-faicon="paypal">
				                <li>
				                    <a href="/Field/Unpaid/Index" data-options="{id:'FieldUnpaidIndex', faicon:'fa-plus-square'}">待结账列表</a></li>
				                <li>
				                    <a href="/Field/Checkout/Index" data-options="{id:'FieldCheckoutIndex', faicon:'fa-paypal'}">已结账列表</a></li>
				                <li>
				                    <a href="/Field/FinHandoverNote/Index" data-options="{id:'FinHandoverNoteIndex', faicon:'fa-'}">收银交接单</a></li>
				                <li>
				                    <a href="/Field/CheckoutDtl/Index" data-options="{id:'FieldCheckoutDtlIndex', faicon:'fa-'}">已结账列表明细查询</a></li>
				                <li>
				                    <a href="/Field/VwFinOtherBillNote/Index" data-options="{id:'VwFinOtherBillNoteIndex', faicon:'fa-'}">财务其他收支查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="平衡表查询" data-faicon="balance-scale">
				                <li>
				                    <a href="/ReportCenter/Balance/Index" data-options="{id:'ReportCenterBalanceIndex', faicon:'fa-stumbleupon'}">收费平衡表</a></li>
				                <li>
				                    <a href="/ReportCenter/ReservationSearch/Index" data-options="{id:'ReportCenterReservationSearchIndex', faicon:'fa-search'}">预约金查询</a></li>
				                <li>
				                    <a href="/ReportCenter/CashRegister/Index" data-options="{id:'ReportCenterCashRegisterIndex', faicon:'fa-paypal'}">收银查询</a></li>
				                <li>
				                    <a href="/ReportCenter/PaySearch/Index" data-options="{id:'ReportCenterPaySearchIndex', faicon:'fa-paypal'}">结账方式查询</a></li>
				                <li>
				                    <a href="/ReportCenter/StoredSearch/Index" data-options="{id:'ReportCenterStoredSearchIndex', faicon:'fa-search'}">储值查询</a></li>
				                <li>
				                    <a href="/ReportCenter/HospitalizationSearch/Index" data-options="{id:'ReportCenterHospitalizationSearch', faicon:'fa-search'}">住院押金查询</a></li>
				                <li>
				                    <a href="/ReportCenter/DebtPeriodQuery/Index" data-options="{id:'DebtPeriodQueryIndex', faicon:'fa-'}">欠款查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="业绩管理" data-faicon="">
				                <li>
				                    <a href="/Field/CureNotePerformanceExecute/Index" data-options="{id:'CureNotePerformanceExecuteIndex', faicon:'fa-'}">治疗单业绩生成</a></li>
				                <li>
				                    <a href="/Field/CureNotePerformanceManage/Index" data-options="{id:'CureNotePerformanceManageIndex', faicon:'fa-'}">业绩管理</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('390714E85A31495AAB57A4F400AFAD94');">
				            <i class="fa fa-h-square"></i>医务管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="皮肤中心" data-faicon="connectdevelop">
				                <li>
				                    <a href="/MedicalCenter/SkinTriage/Index" data-options="{id:'SkinTriageIndex', faicon:'fa-'}">皮肤排期分诊</a></li>
				                <li>
				                    <a href="/MedicalCenter/SkinReferralReg/Index" data-options="{id:'MedicalCenterSkinReferralRegIndex', faicon:'fa-plus-square'}">皮肤治疗登记</a></li>
				                <li>
				                    <a href="/MedicalCenter/SkinReservationNote/Index" data-options="{id:'SkinReservationNoteIndex', faicon:'fa-'}">皮肤预约</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="整形中心" data-faicon="smile-o">
				                <li>
				                    <a href="/MedicalCenter/PlasticReg/Index" data-options="{id:'MedicalCenterPlasticRegIndex', faicon:'fa-plus-square'}">整形首诊登记</a></li>
				                <li>
				                    <a href="/MedicalCenter/Hospital/Index" data-options="{id:'MedicalCenterHospitalIndex', faicon:'fa-hospital-o'}">住院管理</a></li>
				                <li>
				                    <a href="/MedicalCenter/PlasticCure/Index" data-options="{id:'PlasticCureIndex', faicon:'fa-plus-square'}">整形手术管理</a></li>
				                <li>
				                    <a href="/MedicalCenter/OperationReservationNote/Index" data-options="{id:'OperationReservationNoteIndex', faicon:'fa-'}">整形预约</a></li>
				                <li>
				                    <a href="/MedicalCenter/PlasticOperationQuery/Index" data-options="{id:'PlasticOperationQueryIndex', faicon:'fa-'}">整形手术查询</a></li>
				                <li>
				                    <a href="/MedicalCenter/VwPlasticCureTreate/Index" data-options="{id:'VwPlasticCureTreateIndex', faicon:'fa-'}">整形复诊查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="无创中心" data-faicon="heart">
				                <li>
				                    <a href="/MedicalCenter/NonInvasiveTriage/Index" data-options="{id:'NonInvasiveTriageIndex', faicon:'fa-'}">无创排期分诊</a></li>
				                <li>
				                    <a href="/MedicalCenter/ReviewNonInvasiveReg/Index" data-options="{id:'ReviewNonInvasiveReg', faicon:'fa-plus-square'}">无创治疗登记</a></li>
				                <li>
				                    <a href="/MedicalCenter/NoninvasiveReservationNote/Index" data-options="{id:'NoninvasiveReservationNoteIndex', faicon:'fa-'}">无创预约</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="物资管理" data-faicon="">
				                <li>
				                    <a href="/BaseDataManage/CustMaterialInventory/Index" data-options="{id:'CustMaterialInventoryIndex', faicon:'fa-cubes'}">客户物资信息</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="档案管理" data-faicon="">
				                <li>
				                    <a href="/MedicalCenter/DocumentRegister/Index" data-options="{id:'DocumentRegisterIndex', faicon:'fa-'}">档案管理</a></li>
				                <li>
				                    <a href="/MedicalCenter/CustDocQuery/Index" data-options="{id:'CustDocQueryIndex', faicon:'fa-'}">档案查询</a></li>
				                <li>
				                    <a href="/MedicalCenter/CustDocReg/Index" data-options="{id:'CustDocRegIndex', faicon:'fa-'}">客户档案查询</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('60B56FDA132E4E77B3FFA4F400B209B8');">
				            <i class="fa fa-phone"></i>回访管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="电话回访" data-faicon="phone-square">
				                <li>
				                    <a href="/ReturnCall/CompanyReturnCallPlan/Index" data-options="{id:'ReturnCallCompanyReturnCallPlanIndex', faicon:'fa-whatsapp'}">公司回访计划</a></li>
				                <li>
				                    <a href="/ReturnCall/ReservationReturnCallPlan/Index" data-options="{id:'ReturnCallReservationReturnCallPlanIndex', faicon:'fa-whatsapp'}">预约回访计划</a></li>
				                <li>
				                    <a href="/ReturnCall/MemberReturnCall/Index" data-options="{id:'ReturnCallMemberReturnCallIndex', faicon:'fa-whatsapp'}">会员回访</a></li>
				                <li>
				                    <a href="/ReturnCall/ReturnCallManage/Index" data-options="{id:'ReturnCallManageIndex', faicon:'fa-whatsapp'}">回访管理</a></li>
				                <li>
				                    <a href="/ReturnCall/CompanyReturnCallPlan/CustIndex" data-options="{id:'ReturnCallCompanyReturnCallPlanCustIndex', faicon:'fa-whatsapp'}">个人回访计划</a></li>
				                <li>
				                    <a href="/ReturnCall/ReservationReturnCallPlan/CustIndex" data-options="{id:'ReturnCallReservationReturnCallPlanCustIndex', faicon:'fa-whatsapp'}">个人预约回访计划</a></li>
				                <li>
				                    <a href="/ReturnCall/TmpReturnCallManage/Index" data-options="{id:'ReturnCallTmpReturnCallManageIndex', faicon:'fa-whatsapp'}">预约回访管理</a></li>
				                <li>
				                    <a href="/ReturnCall/CallRecordQuery/Index" data-options="{id:'ReturnCallCallRecordQueryIndex', faicon:'fa-whatsapp'}">录音查询</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('B9E62166EA9F4E459C44A4F400B33022');">
				            <i class="fa fa-users"></i>活动管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="会员管理" data-faicon="cubes">
				                <li>
				                    <a href="/Member/MembershipInfo/Index" data-options="{id:'MembershipInfoIndex', faicon:'fa-user-md'}">会员管理</a></li>
				                <li>
				                    <a href="/Member/MembershipInfo/LeveupList" data-options="{id:'MembershipInfoLeveupList', faicon:'fa-user-md'}">会员升级记录</a></li>
				                <li>
				                    <a href="/Manage/MemGiftSearch/Index" data-options="{id:'ManageMemGiftSearchIndex', faicon:'fa-'}">积分兑换查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="会员礼品管理" data-faicon="">
				                <li>
				                    <a href="/Manage/MemGiftInventory/Index" data-options="{id:'MemGiftInventoryIndex', faicon:'fa-instagram'}">礼品入库</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="活动管理" data-faicon="cubes">
				                <li>
				                    <a href="/Member/ActivityType/Index" data-options="{id:'ActivityTypeIndex', faicon:'fa-user-md'}">活动类型</a></li>
				                <li>
				                    <a href="/Member/ActivityInfo/Index" data-options="{id:'ActivityInfoIndex', faicon:'fa-user-md'}">活动基本信息维护</a></li>
				                <li>
				                    <a href="/Member/Activity/Index" data-options="{id:'ActivityIndex', faicon:'fa-user-md'}">活动管理</a></li>
				                <li>
				                    <a href="/CustAnalysis/ActivityEffectAnalysis/Index" data-options="{id:'ActivityEffectAnalysis', faicon:'fa-search'}">活动转化分析</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('CC3E2B8304F8465D8D43A53601374D37');">
				            <i class="fa fa-bar-chart"></i>客户分析</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="客户管理" data-faicon="">
				                <li>
				                    <a href="/Field/RepresentativeMyCust/CompanyIndex" data-options="{id:'FieldRepresentativeMyCustCompanyIndex', faicon:'fa-list-alt'}">我的客户</a></li>
				                <li>
				                    <a href="/ReportCenter/WaitCareCust/Index" data-options="{id:'WaitCareCustIndex', faicon:'fa-plus-square'}">缴费未治疗客户</a></li>
				                <li>
				                    <a href="/ReportCenter/PremoneyCust/Index" data-options="{id:'PremoneyCustIndex', faicon:'fa-user'}">预约金客户</a></li>
				                <li>
				                    <a href="/ReportCenter/DebtCust/Index" data-options="{id:'DebtCustIndex', faicon:'fa-user'}">欠款客户</a></li>
				                <li>
				                    <a href="/ReportCenter/SavecardCust/Index" data-options="{id:'SavecardCustIndex', faicon:'fa-user'}">储值客户</a></li>
				                <li>
				                    <a href="/ReportCenter/DepositCust/Index" data-options="{id:'DepositCustIndex', faicon:'fa-user'}">住院押金客户</a></li>
				                <li>
				                    <a href="/ReportCenter/DealCust/Index" data-options="{id:'DealCust', faicon:'fa-user'}">成交客户</a></li>
				                <li>
				                    <a href="/ReportCenter/NoDealCust/Index" data-options="{id:'NoDealCust', faicon:'fa-user'}">未成交客户</a></li>
				                <li>
				                    <a href="/CustAnalysis/RecommendCustQuery/Index" data-options="{id:'RecommendCustQueryIndex', faicon:'fa-'}">介绍客户管理</a></li>
				                <li>
				                    <a href="/CustAnalysis/CustLabelConsumeQuery/Index" data-options="{id:'CustLabelConsumeQueryIndex', faicon:'fa-'}">自定义标签客户查询</a></li>
				                <li>
				                    <a href="/CustAnalysis/RecommendCustQueryDtl/Index" data-options="{id:'CustAnalysisRecommendCustQueryDtlIndex', faicon:'fa-'}">老带新客户管理</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客户指标分析" data-faicon="">
				                <li>
				                    <a href="/CustAnalysis/CustIndicationRptListSearch/Index" data-options="{id:'CustIndicationRptListSearchIndex', faicon:'fa-'}">客户指标查询</a></li>
				                <li>
				                    <a href="/CustAnalysis/SectionIndicationQuery/Index" data-options="{id:'SectionIndicationQueryIndex', faicon:'fa-'}">科室指标查询</a></li>
				                <li>
				                    <a href="/CustAnalysis/CustActivityIndicationQuery/Index" data-options="{id:'CustActivityIndicationQueryIndex', faicon:'fa-'}">客户活动指标查询</a></li>
				                <li>
				                    <a href="/CustAnalysis/CustPeriodConsumeQuery/Index" data-options="{id:'CustPeriodConsumeQueryIndex', faicon:'fa-'}">客户阶段消费查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="漏斗分析" data-faicon="">
				                <li>
				                    <a href="/CustAnalysis/TempCustNoReservation/Index" data-options="{id:'CustAnalysisTempCustNoReservationIndex', faicon:'fa-search'}">咨询未预约</a></li>
				                <li>
				                    <a href="/CustAnalysis/TempCustReservationNoVisit/Index" data-options="{id:'CustAnalysisTempCustReservationNoVisitIndex', faicon:'fa-search'}">临客预约未到院</a></li>
				                <li>
				                    <a href="/CustAnalysis/VisitCustNoDeal/Index" data-options="{id:'CustAnalysisVisitCustNoDealIndex', faicon:'fa-search'}">到院未成交</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="周期性产品管理" data-faicon="">
				                <li>
				                    <a href="/CustAnalysis/KeyProductConsumeQuery/Index" data-options="{id:'CustAnalysisKeyProductConsumeQueryIndex', faicon:'fa-search'}">重点产品分析</a></li>
				                <li>
				                    <a href="/CustAnalysis/ProductCustTypeConsumeQuery/Index" data-options="{id:'CustAnalysisProductCustTypeConsumeQueryIndex', faicon:'fa-search'}">产品自定义分类查询</a></li>
				                <li>
				                    <a href="/CustAnalysis/CycleProduct/Index" data-options="{id:'CustAnalysisCycleProductIndex', faicon:'fa-search'}">周期性产品分析</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('48109FACDB864F57AE69A4F400B586C6');">
				            <i class="fa fa-database"></i>查询中心</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="业绩查询" data-faicon="inbox">
				                <li>
				                    <a href="/ReportCenter/PerformanceQuery/CompanyIndex" data-options="{id:'PerformanceQueryByCompany', faicon:'fa-paragraph'}">医生业绩查询(公司 )</a></li>
				                <li>
				                    <a href="/ReportCenter/PerformanceQuery/Index" data-options="{id:'PerformanceQueryByDoctor', faicon:'fa-paragraph'}">医生业绩查询(医生)</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/CompanyIndex" data-options="{id:'ReportCenterNetBillAccountByCompanyIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/Index" data-options="{id:'ReportCenterNetBillAccountIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/PlanRecallEmpIndex" data-options="{id:'ReportCenterNetBillAccountRecallEmpIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（回访人）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccountDtl/CompanyIndex" data-options="{id:'NetBillAccountDtlCompanyIndex', faicon:'fa-paragraph'}">网电咨询师业绩明细查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccountDtl/Index" data-options="{id:'NetBillAccountDtlIndex', faicon:'fa-paragraph'}">网电咨询师业绩明细查询（个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/BillAccount/CompanyIndex" data-options="{id:'ReportCenterBillAccountCompanyIndex', faicon:'fa-paragraph'}">开单业绩查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/BillAccount/Index" data-options="{id:'ReportCenterBillAccountIndex', faicon:'fa-paragraph'}">开单业绩查询（个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/BillAccount/Indexs" data-options="{id:'BillAccountIndexs', faicon:'fa-paragraph'}">开单业绩查询（客户代表）</a></li>
				                <li>
				                    <a href="/ReportCenter/BillAccountDtl/CompanyIndex" data-options="{id:'BillAccountDtlCompanyIndex', faicon:'fa-paragraph'}">开单业绩明细查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/BillAccountDtl/Index" data-options="{id:'BillAccountDtlIndex', faicon:'fa-paragraph'}">开单业绩明细查询（个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/VwReservationNote/Index" data-options="{id:'VwReservationNoteIndex', faicon:'fa-'}">二开业绩查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/VwReservationNote/MyIndex" data-options="{id:'VwReservationNoteMyIndex', faicon:'fa-'}">二开业绩查询（个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/RecommendBillAccount/CompanyIndex" data-options="{id:'ReportCenterRecommendBillAccountCompanyIndex', faicon:'fa-'}">推荐人业绩查询（公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/RecommendBillAccount/Index" data-options="{id:'ReportCenterRecommendBillAccountIndex', faicon:'fa-'}">推荐人业绩查询（个人）</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="分值查询" data-faicon="">
				                <li>
				                    <a href="/ReportCenter/MedTreatPoint/Index" data-options="{id:'MedTreatPointIndex', faicon:'fa-'}">分值查询</a></li>
				                <li>
				                    <a href="/ReportCenter/MedTreatPoint/MyIndex" data-options="{id:'MedTreatPointMyIndex', faicon:'fa-'}">分值个人查询页</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="集团业绩" data-faicon="inbox">
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/GroupCompanyIndex" data-options="{id:'ReportCenterNetBillAccountGroupCompanyIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（集团公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/GroupIndex" data-options="{id:'ReportCenterNetBillAccountGroupIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（集团个人）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccount/GroupPlanRecallEmpIndex" data-options="{id:'ReportCenterNetBillAccountGroupPlanRecallEmpIndex', faicon:'fa-paragraph'}">网电咨询师业绩查询（集团回访人）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccountDtl/GroupCompanyIndex" data-options="{id:'ReportCenterNetBillAccountDtlGroupCompanyIndex', faicon:'fa-paragraph'}">网电咨询师业绩明细查询（集团公司）</a></li>
				                <li>
				                    <a href="/ReportCenter/NetBillAccountDtl/GroupIndex" data-options="{id:'ReportCenterNetBillAccountDtlGroupIndex', faicon:'fa-paragraph'}">网电咨询师业绩明细查询（集团个人）</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('7F57714D29FB495CB703A4F400B31C90');">
				            <i class="fa fa-bar-chart"></i>报表分析</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="全院" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/Index" data-options="{id:'ReportCenterHosAnalysisIndex', faicon:'fa-hospital'}">全院分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosNetFunnel" data-options="{id:'HosAnalysisHosNetFunnel', faicon:'fa-search'}">全院销售漏斗</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosRecall" data-options="{id:'HosAnalysisHosRecall', faicon:'fa-search'}">全院回访报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustRequirement" data-options="{id:'HosAnalysisHosCustRequirement', faicon:'fa-'}">全院客户需求报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustLabel" data-options="{id:'HosAnalysisHosCustLabel', faicon:'fa-'}">全院客户标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustRecommend" data-options="{id:'HosAnalysisHosCustRecommend', faicon:'fa-'}">全院老带新报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustNoVisit" data-options="{id:'HosAnalysisHosCustNoVisit', faicon:'fa-'}">全院预约未到院报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustNoDeal" data-options="{id:'HosAnalysisHosCustNoDeal', faicon:'fa-'}">全院咨询未成交报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosOldCust" data-options="{id:'HosAnalysisHosOldCust', faicon:'fa-'}">全院老客户报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosProductCross" data-options="{id:'HosProductCross', faicon:'fa-'}">全院产品转化报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustActivity" data-options="{id:'HosCustActivity', faicon:'fa-'}">全院客户活动次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustProductNumber" data-options="{id:'HosCustProductNumber', faicon:'fa-'}">全院客户产品消费次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustCurYearVisitNumber" data-options="{id:'HosCustCurYearVisitNumber', faicon:'fa-'}">全院客户一年内来院次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustDiscount" data-options="{id:'HosCustDiscount', faicon:'fa-'}">全院客户折扣报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosWorkEfficiency" data-options="{id:'HosWorkEfficiency', faicon:'fa-'}">全院工作效率报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosKeyProduct" data-options="{id:'HosKeyProduct', faicon:'fa-'}">重点产品分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosProductCustType" data-options="{id:'HosProductCustType', faicon:'fa-'}">产品自定义标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/SaActivityEffect" data-options="{id:'SaActivityEffect', faicon:'fa-'}">活动转化分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/FedRerservation" data-options="{id:'FedRerservation', faicon:'fa-hospital'}">门诊预约数据分析</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客服（网电）" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/Index" data-options="{id:'NetAnalysisIndex', faicon:'fa-'}">网电回访计划</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetCustNoVisit" data-options="{id:'NetAnalysisNetCustNoVisit', faicon:'fa-'}">网电预约未到院客户报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetNoVisitCustLabel" data-options="{id:'NetAnalysisNetNoVisitCustLabel', faicon:'fa-'}">网电预约未到院客户标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetNoVisitProduct" data-options="{id:'NetAnalysisNetNoVisitProduct', faicon:'fa-'}">网电预约未到院客户产品报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetFunnel" data-options="{id:'NetAnalysisNetFunnel', faicon:'fa-'}">网电销售漏斗报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetFunnelMedia" data-options="{id:'NetAnalysisNetFunnelMedia', faicon:'fa-'}">网电销售漏斗（媒介）报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetSentionFunnel" data-options="{id:'NetAnalysisNetSentionFunnel', faicon:'fa-'}">网电科室销售漏斗报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetFunnelPerf" data-options="{id:'NetAnalysisNetFunnelPerf', faicon:'fa-'}">全院网电业绩报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/NetAnalysis/NetBeautySlon" data-options="{id:'NetBeautySlon', faicon:'fa-'}">美容院数据分析报表</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客服（现场）" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/Index" data-options="{id:'FedAnalysisIndex', faicon:'fa-'}">现场回访计划</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedConsultantPerf" data-options="{id:'FedAnalysisFedConsultantPerf', faicon:'fa-'}">现场咨询师业绩报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustActivity" data-options="{id:'FedAnalysisFedCustActivity', faicon:'fa-'}">现场咨询师客户活动次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustCurYearVisitNumber" data-options="{id:'FedAnalysisFedCustCurYearVisitNumber', faicon:'fa-'}">现场咨询师客户一年内来院次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustDiscount" data-options="{id:'FedAnalysisFedCustDiscount', faicon:'fa-'}">现场客户折扣报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustLabel" data-options="{id:'FedAnalysisFedCustLabel', faicon:'fa-'}">现场咨询师客户标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustNoDeal" data-options="{id:'FedAnalysisFedCustNoDeal', faicon:'fa-'}">现场咨询未成交客户报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustProductNumber" data-options="{id:'FedAnalysisFedCustProductNumber', faicon:'fa-'}">现场咨询师客户产品消费次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustRecommend" data-options="{id:'FedAnalysisFedCustRecommend', faicon:'fa-'}">现场咨询师老带新报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedCustRequirement" data-options="{id:'FedAnalysisFedCustRequirement', faicon:'fa-'}">现场咨询师需求报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedInfoCollect" data-options="{id:'FedAnalysisFedInfoCollect', faicon:'fa-'}">现场咨询信息采集报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FedAnalysis/FedOldCust" data-options="{id:'FedAnalysisFedOldCust', faicon:'fa-'}">现场老客户报表</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="运营" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/OpAnalysis/OpProductCross" data-options="{id:'OpProductCross', faicon:'fa-'}">产品转化报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosRecall" data-options="{id:'OpRecall', faicon:'fa-'}">全院回访报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustRequirement" data-options="{id:'OpCustRequirement', faicon:'fa-'}">全院客户需求报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustLabel" data-options="{id:'OpCustLabel', faicon:'fa-'}">全院客户标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustRecommend" data-options="{id:'OpCustRecommend', faicon:'fa-'}">全院老带新报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustNoVisit" data-options="{id:'OpNovisit', faicon:'fa-'}">全院预约未到院报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustNoDeal" data-options="{id:'OpCustNoDeal', faicon:'fa-'}">全院咨询未成交报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosOldCust" data-options="{id:'OpOldCust', faicon:'fa-'}">全院老客户报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustActivity" data-options="{id:'OpCustActivity', faicon:'fa-'}">全院客户活动次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustProductNumber" data-options="{id:'OpCustProductNumber', faicon:'fa-'}">全院客户产品消费次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosCustCurYearVisitNumber" data-options="{id:'OpCustCurYearVist', faicon:'fa-'}">全院客户一年内来院次数报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/HosWorkEfficiency" data-options="{id:'OpWorkEffciency', faicon:'fa-'}">全院客户工作效率报表</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="营销" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/Index" data-options="{id:'ReportAnalysisSaAnalysisIndex', faicon:'fa-'}">媒介信息统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/SaChannel" data-options="{id:'ReportAnalysisSaAnalysisSaChannel', faicon:'fa-'}">渠道信息统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/BaiduKeyWord" data-options="{id:'BaiduKeyWordIndex', faicon:'fa-'}">百度关键词报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/SaCustLabel" data-options="{id:'SaCustLabel', faicon:'fa-'}">客户标签报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/SaTempMideaSourceToHosp" data-options="{id:'SaTempMideaSourceToHosp', faicon:'fa-'}">临客媒介来院统计报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/SaAnalysis/BdReport" data-options="{id:'BdReportIndex', faicon:'fa-'}">百度分析统计</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="财务" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/FinAnalysis/FinIncomeRiskSaveCard" data-options="{id:'FinIncomeRiskSaveCard', faicon:'fa-'}">财务风险分析--储值</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FinAnalysis/FinIncomeRiskPreMoney" data-options="{id:'FinIncomeRiskPreMoney', faicon:'fa-'}">财务风险分析--预约金</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FinAnalysis/FinIndex" data-options="{id:'FinSummaryPerformance', faicon:'fa-'}">全院业绩分析</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FinAnalysis/FinSectionFeeTypeSum" data-options="{id:'FinSectionFeeTypeSum', faicon:'fa-'}">科室收入汇总表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/FinAnalysis/FinCheckHandOverSum" data-options="{id:'FinCheckHandOverSum', faicon:'fa-'}">收银员交款汇总表</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="医务" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedSkinCureReport" data-options="{id:'MedSkinCureReportIndex', faicon:'fa-'}">皮肤治疗统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedPlasticCureReport" data-options="{id:'MedPlasticCureReportIndex', faicon:'fa-'}">整形治疗统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedMouthCureReport" data-options="{id:'MedMouthCureReportIndex', faicon:'fa-'}">口腔治疗统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedNonInvisCureReport" data-options="{id:'MedNonInvisCureReportIndex', faicon:'fa-'}">无创治疗统计</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/SkinWorkEfficiencyReport" data-options="{id:'SkinWorkEfficiencyReport', faicon:'fa-'}">皮肤医生效率报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/PlasticWorkEfficiencyReport" data-options="{id:'PlasticWorkEfficiencyReport', faicon:'fa-'}">整形医生效率报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/NoninsiveWorkEfficiencyReport" data-options="{id:'NoninsiveWorkEfficiencyReport', faicon:'fa-'}">无创医生效率报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedWorkEfficiencyReport" data-options="{id:'MedWorkEfficiencyReport', faicon:'fa-'}">全院效率报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedDoctorPerfReport" data-options="{id:'MedDoctorPerfReport', faicon:'fa-'}">医生业绩报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedRecallReport" data-options="{id:'MedRecallReport', faicon:'fa-'}">医务回访执行报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedRecallByPositionReport" data-options="{id:'MedRecallByPositionReport', faicon:'fa-'}">医务岗位回访执行报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/MedAlaysis/MedRecallByEmpReport" data-options="{id:'MedRecallByEmpReport', faicon:'fa-'}">医务人员回访执行报表</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="集团" data-faicon="bar-chart">
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/GroupHosSummary" data-options="{id:'ReportAnalysisWholeDailyAnalysisGroupHosSummary', faicon:'fa-'}">集团--全院分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/GroupSectionSummary" data-options="{id:'ReportAnalysisWholeDailyAnalysisGroupSectionSummary', faicon:'fa-'}">集团--科室分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/GroupChannelSummary" data-options="{id:'ReportAnalysisWholeDailyAnalysisGroupChannelSummary', faicon:'fa-'}">集团--渠道分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/GroupMediaSummary" data-options="{id:'ReportAnalysisWholeDailyAnalysisGroupMediaSummary', faicon:'fa-'}">集团--媒介分析报表</a></li>
				                <li>
				                    <a href="/ReportAnalysis/HosAnalysis/GroupSummaryByOrg" data-options="{id:'ReportAnalysisWholeDailyAnalysisGroupSummaryByOrg', faicon:'fa-'}">集团--网电汇总报表</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('C35E7281A5AA48198E352192DD9CE7D0');">
				            <i class="fa fa-bar-chart"></i>库房管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="库房基础数据" data-faicon="bar-chart">
				                <li>
				                    <a href="/Inv/InvInventoryInfo/Index" data-options="{id:'InvInventoryInfoIndex', faicon:'fa-'}">库房基础信息</a></li>
				                <li>
				                    <a href="/Inv/InvVendorInfo/Index" data-options="{id:'InvVendorInfoIndex', faicon:'fa-'}">供应商信息</a></li>
				                <li>
				                    <a href="/Inv/InvMaterialType/Index" data-options="{id:'InvMaterialTypeIndex', faicon:'fa-'}">物资类型</a></li>
				                <li>
				                    <a href="/Inv/InvMaterialInfo/Index" data-options="{id:'InvMaterialInfoIndex', faicon:'fa-'}">物资信息</a></li>
				                <li>
				                    <a href="/Inv/InvInventoryPrivs/Index" data-options="{id:'InvInvInventoryPrivsIndex', faicon:'fa-'}">库房权限</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="物资出入库" data-faicon="bar-chart">
				                <li>
				                    <a href="/Inv/Outsourcing/Index" data-options="{id:'InvOutsourcingIndex', faicon:'fa-plus-square'}">外购入库</a></li>
				                <li>
				                    <a href="/Inv/StockOut/Index" data-options="{id:'InvStockOutIndex', faicon:'fa-minus'}">领料出库</a></li>
				                <li>
				                    <a href="/Inv/OtherOutsourcing/Index" data-options="{id:'InvOtherOutsourcingIndex', faicon:'fa-plus'}">其他入库</a></li>
				                <li>
				                    <a href="/Inv/OtherStockOut/Index" data-options="{id:'InvOtherStockOutIndex', faicon:'fa-minus'}">其他出库</a></li>
				                <li>
				                    <a href="/Inv/Transfer/Index" data-options="{id:'TransferIndex', faicon:'fa-plus-square'}">物资移库</a></li>
				                <li>
				                    <a href="/Inv/InvCheckNote/Index" data-options="{id:'InvCheckNoteIndex', faicon:'fa-'}">盘点物资</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="库房查询" data-faicon="bar-chart">
				                <li>
				                    <a href="/Inv/InventorySearch/Index" data-options="{id:'InvInventorySearchIndex', faicon:'fa-search'}">库存查询</a></li>
				                <li>
				                    <a href="/Inv/InvStockInSearch/Index" data-options="{id:'InvInvStockInSearchIndex', faicon:'fa-search'}">入库单查询</a></li>
				                <li>
				                    <a href="/Inv/StockOutSearch/Index" data-options="{id:'InvStockOutSearchIndex', faicon:'fa-search'}">出库单查询</a></li>
				                <li>
				                    <a href="/Inv/InvStockDtlSearch/Index" data-options="{id:'InvStockDtlQuery', faicon:'fa-search'}">库存明细查询</a></li>
				                <li>
				                    <a href="/Inv/VwVendorSearch/Index" data-options="{id:'VwVendorSearchIndex', faicon:'fa-'}">采购入库供应商汇总查询</a></li>
				                <li>
				                    <a href="/Inv/VwStockinTypeSearch/Index" data-options="{id:'VwStockinTypeSearchIndex', faicon:'fa-'}">入库单类型汇总查询</a></li>
				                <li>
				                    <a href="/Inv/VwStockoutSearch/Index" data-options="{id:'VwStockoutSearchIndex', faicon:'fa-'}">出库单类型汇总查询</a></li>
				                <li>
				                    <a href="/Inv/Stocktaking/Index" data-options="{id:'InvStocktakingIndex', faicon:'fa-'}">盘点查询</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="药品管理" data-faicon="">
				                <li>
				                    <a href="/Inv/ChargeBillMedicine/Index" data-options="{id:'ChargeBillMedicineIndex', faicon:'fa-'}">收费单药品查询</a></li>
				                <li>
				                    <a href="/Inv/ChargeBillHospital/Index" data-options="{id:'InvChargeBillHospitalIndex', faicon:'fa-'}">住院单药品查询</a></li>
				            </ul>
				        </div>
				    </li>
				    <li>
				        <a href=" javascript:;" data-toggle="slidebar" onclick="slidebarclick('486BEF0A245B47528283A4F400BA174E');">
				            <i class="fa fa-cog"></i>系统管理</a>
				        <div class="items hide" data-noinit="true">
				            <ul class="menu-items" data-tit="产品管理" data-faicon="cubes">
				                <li>
				                    <a href="/BaseDataManage/ProductType/Index" data-options="{id:'ProductTypeIndex', faicon:'fa-list-alt'}">产品类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/ProductInfo/Index" data-options="{id:'ProductInfoIndex', faicon:'fa-user-secret'}">产品信息维护</a></li>
				                <li>
				                    <a href="/BaseDataManage/ProductCustType/Index" data-options="{id:'ProductCustTypeIndex', faicon:'fa-wrench'}">产品自定义分类</a></li>
				                <li>
				                    <a href="/BaseDataManage/MaterialToProduct/Index" data-options="{id:'MaterialToProductIndex', faicon:'fa-'}">产品关联</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="医务基础数据" data-faicon="plus-square">
				                <li>
				                    <a href="/BaseDataManage/MedInstrument/Index" data-options="{id:'MedInstrumentIndex', faicon:'fa-plus-square'}">仪器管理</a></li>
				                <li>
				                    <a href="/BaseDataManage/RoomInfo/Index" data-options="{id:'BaseDataManageRoomInfoIndex', faicon:'fa-plus-square'}">医院房间设置</a></li>
				                <li>
				                    <a href="/BaseDataManage/MedTreatPointType/Index" data-options="{id:'MedTreatPointTypeIndex', faicon:'fa-plus-square'}">护理分值项类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/MedTreatPointInfo/Index" data-options="{id:'MedTreatPointInfoIndex', faicon:'fa-'}">护理分值项信息</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="客户基础数据" data-faicon="area-chart">
				                <li>
				                    <a href="/BaseDataManage/CustRequestType/Index" data-options="{id:'CustRequestTypeIndex', faicon:'fa-'}">客户需求类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustRequestInfo/Index" data-options="{id:'CustRequestInfoIndex', faicon:'fa-'}">客户需求定义</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustLabelType/Index" data-options="{id:'CustLabelTypeIndex', faicon:'fa-'}">客户标签类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustLabelInfo/Index" data-options="{id:'CustLabelInfoIndex', faicon:'fa-'}">客户标签定义</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustMediaType/Index" data-options="{id:'CustMediaTypeIndex', faicon:'fa-'}">客户媒介类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustMediaSource/Index" data-options="{id:'CustMediaSourceIndex', faicon:'fa-'}">客户媒介来源</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustChannelInfo/Index" data-options="{id:'CustChannelInfoIndex', faicon:'fa-'}">客户渠道信息</a></li>
				                <li>
				                    <a href="/BaseDataManage/BeautySlonType/Index" data-options="{id:'BeautySlonTypeIndex', faicon:'fa-'}">美容院基础信息</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="回访基础数据" data-faicon="retweet">
				                <li>
				                    <a href="/BaseDataManage/RecallType/Index" data-options="{id:'RecallTypeIndex', faicon:'fa-exchange'}">回访类型管理</a></li>
				                <li>
				                    <a href="/BaseDataManage/ReCallInfo/Index" data-options="{id:'BaseDataManageReCallInfoIndex', faicon:'fa-phone-square'}">回访基础信息维护</a></li>
				                <li>
				                    <a href="/BaseDataManage/MsgTemplateType/Index" data-options="{id:'MsgTemplateTypeIndex', faicon:'fa-file-text'}">短信类型管理</a></li>
				                <li>
				                    <a href="/BaseDataManage/MsgTemplate/Index" data-options="{id:'MsgTemplateIndex', faicon:'fa-pencil-square'}">短信信息维护</a></li>
				                <li>
				                    <a href="/ReturnCall/CalStopReasonInfo/Index" data-options="{id:'CalStopReasonInfoIndex', faicon:'fa-cog'}">停止回访原因设置</a></li>
				                <li>
				                    <a href="/BaseDataManage/Configure/Index" data-options="{id:'BaseDataManageConfigureIndex', faicon:'fa-cogs'}">网电预约回访计划配置</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="会员基础数据" data-faicon="street-view">
				                <li>
				                    <a href="/Member/MemGiftType/Index" data-options="{id:'MemGiftTypeIndex', faicon:'fa-user-md'}">礼品类型</a></li>
				                <li>
				                    <a href="/Member/MemGiftInfo/Index" data-options="{id:'MemGiftInfoIndex', faicon:'fa-user-md'}">礼品基本信息</a></li>
				                <li>
				                    <a href="/BaseDataManage/MebCustLevelConf/Index" data-options="{id:'MebCustLevelConfIndex', faicon:'fa-certificate'}">会员级别维护</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="收费基础数据" data-faicon="credit-card">
				                <li>
				                    <a href="/BaseDataManage/CasSubject/Index" data-options="{id:'CasSubjectIndex', faicon:'fa-jpy'}">收费类型</a></li>
				                <li>
				                    <a href="/BaseDataManage/FinSavingcardRate/Index" data-options="{id:'FinSavingcardRateIndex', faicon:'fa-money'}">交储值基本信息</a></li>
				                <li>
				                    <a href="/BaseDataManage/FinChargePayment/Index" data-options="{id:'FinChargePaymentIndex', faicon:'fa-jpy'}">收费单支付方式</a></li>
				                <li>
				                    <a href="/BaseDataManage/FinAccountInfo/Index" data-options="{id:'FinAccountInfoIndex', faicon:'fa-'}">科目收支基础信息</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="预约基础数据" data-faicon="">
				                <li>
				                    <a href="/BaseDataManage/FedReservationItemInfo/Index" data-options="{id:'FedReservationItemInfoIndex', faicon:'fa-'}">预约项目信息</a></li>
				                <li>
				                    <a href="/BaseDataManage/FedPeriodConfig/Index" data-options="{id:'FedPeriodConfigIndex', faicon:'fa-'}">现场预约时段配置</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="后台管理" data-faicon="gears">
				                <li>
				                    <a href="/Field/ReceptionInfoChange/Index" data-options="{id:'ReceptionInfoChangeIndex', faicon:'fa-user-md'}">接诊指标修改</a></li>
				                <li>
				                    <a href="/Manage/PlanRecallEmpChg/Index" data-options="{id:'PlanRecallEmpChgIndex', faicon:'fa-'}">维护临客信息</a></li>
				                <li>
				                    <a href="/Manage/TempCustOrgChg/Index" data-options="{id:'ManageTempCustOrgChgIndex', faicon:'fa-'}">临客组织重新分配</a></li>
				                <li>
				                    <a href="/Manage/ConflictTempCust/Index" data-options="{id:'ManageConflictTempCustIndex', faicon:'fa-'}">冲突客户查询</a></li>
				                <li>
				                    <a href="/Manage/MemberIntegralManage/Index" data-options="{id:'MemberIntegralManageIndex', faicon:'fa-'}">积分调整</a></li>
				                <li>
				                    <a href="/Manage/SysPhotoServer/Index" data-options="{id:'SysPhotoServerIndex', faicon:'fa-'}">照片服务基础信息维护</a></li>
				                <li>
				                    <a href="/Manage/FedConsultantChanges/Index" data-options="{id:'FedConsultantChangesIndex', faicon:'fa-'}">维护正式客户信息</a></li>
				                <li>
				                    <a href="/Manage/EmployeePhoneAudit/Index" data-options="{id:'ManageEmployeePhoneAuditIndex', faicon:'fa-'}">客户电话查看记录</a></li>
				                <li>
				                    <a href="/ReturnCall/CustBlock/Index" data-options="{id:'ReturnCallCustBlockIndex', faicon:'fa-'}">客户黑名单管理</a></li>
				                <li>
				                    <a href="/BaseDataManage/CustLabelManage/Index" data-options="{id:'BaseDataManageCustLabelManageIndex', faicon:'fa-'}">自定义客户标签管理</a></li>
				                <li>
				                    <a href="/Manage/SmsRecord/SendRecordList" data-options="{id:'ManageSmsRecordSendRecordList', faicon:'fa-'}">短信发送记录</a></li>
				                <li>
				                    <a href="BaseDataManage/LoginInfo/Index" data-options="{id:'BaseDataManageLoginInfoIndex', faicon:'fa-'}">系统登录记录</a></li>
				                <li>
				                    <a href="/Manage/CustInfoChangeLog/Index" data-options="{id:'ManageCustInfoChangeLogIndex', faicon:'fa-'}">正式客户归属更改记录</a></li>
				                <li>
				                    <a href="/Manage/TempCustChangeLog/Index" data-options="{id:'ManageTempCustChangeLogIndex', faicon:'fa-'}">临客归属更改记录</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="系统管理" data-faicon="cog">
				                <li>
				                    <a href="/CommonArea/Common/CallText" data-options="{id:'CallTextIndex', faicon:'fa-'}">呼叫测试</a></li>
				                <li>
				                    <a href="/Manage/EmployeeInfo/Index" data-options="{id:'EmployeeInfoIndex', faicon:'fa-user-md'}">人员管理</a></li>
				                <li>
				                    <a href="/Manage/DeptInfo/Index" data-options="{id:'DeptInfoIndex', faicon:'fa-users'}">部门管理</a></li>
				                <li>
				                    <a href="/Manage/PositionInfo/Index" data-options="{id:'PositionIndex', faicon:'fa-hospital-o'}">岗位管理</a></li>
				                <li>
				                    <a href="/Account/User/Index" data-options="{id:'UserIndex', faicon:'fa-user'}">用户管理</a></li>
				                <li>
				                    <a href="/Account/UserGroup/Index" data-options="{id:'UserGroupIndex', faicon:'fa-user'}">用户组管理</a></li>
				                <li>
				                    <a href="/Manage/Menu/Index" data-options="{id:'MenuIndex', faicon:'fa-list-alt'}">菜单管理</a></li>
				                <li>
				                    <a href="/Account/Permission/Index" data-options="{id:'PermissionIndex', faicon:'fa-wrench'}">权限管理</a></li>
				                <li>
				                    <a href="/Account/Role/Index" data-options="{id:'RoleIndex', faicon:'fa-user-secret'}">角色管理</a></li>
				                <li>
				                    <a href="/Manage/Param/Index" data-options="{id:'ParamIndex', faicon:'fa-cogs'}">快码管理</a></li>
				                <li>
				                    <a href="/Manage/SettingConfig/Index" data-options="{id:'SettingConfigIndex', faicon:'fa-cogs'}">配置管理</a></li>
				                <li>
				                    <a href="/Manage/EmpExtInfo/Index" data-options="{id:'EmpExtInfoIndex', faicon:'fa-flickr'}">员工扩展信息</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="预警功能" data-faicon="">
				                <li>
				                    <a href="/BaseDataManage/AlertPlan/Index" data-options="{id:'AlertPlanIndex', faicon:'fa-'}">预警计划</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="公众号配置" data-faicon="">
				                <li>
				                    <a href="/BaseDataManage/WechatPublicConf/Index" data-options="{id:'BaseDataManageWechatPublicConfIndex', faicon:'fa-'}">公众号配置</a></li>
				                <li>
				                    <a href="/BaseDataManage/WechatPublicConf/EnterpriceMsgTmplList" data-options="{id:'EnterpriceMsgTmplList', faicon:'fa-'}">企业号消息模板</a></li>
				            </ul>
				            <ul class="menu-items" data-tit="流程基础数据" data-faicon="">
				                <li>
				                    <a href="/Flow/FlowInfo/Index" data-options="{id:'FlowFlowInfoindex', faicon:'fa-'}">流程信息定义</a></li>
				                <li>
				                    <a href="/Flow/WfFlowConf/Index" data-options="{id:'FlowWfFlowConfIndex', faicon:'fa-'}">流程配置</a></li>
				            </ul>
				        </div>
				    </li>
				    <!--导航整理-->
				</ul>
                <!-- 导航结束 -->
            </div>
            <button type="button" class="btn-default bjui-hnav-more-right" title="导航菜单右移"><i class="fa fa-angle-double-right"></i></button>
        </div>
    </header>
    <div id="bjui-container" class="clearfix">
        <div id="bjui-leftside">
            <div id="bjui-sidebar-s">
                <div class="collapse"></div>
            </div>
            <div id="bjui-sidebar">
                <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 导航栏 <i class="fa fa-bars"></i></h2><a href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
                <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu">
                </div>
            </div>
        </div>
        <div id="bjui-navtab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-url="" data-faicon="home"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent">
                <div class="navtabPage unitBox">
                    <div class="bjui-pageContent" style="background:#FFF;">
                      	<!--首页框开始-->
                        <div class="p10 m10">
	                        <div class="portlet">
	                            <div class="portlet-title">	
	                                <h4 style="font-weight: bold"><i class="fa fa-bars"></i>&nbsp;&nbsp;健丽医美信息管理系统</h4>
	                            </div>
	                        </div>
	                    </div>
	                    <div id="home-menu-list"></div>
						<!--主页框结束-->                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="bjui-footer">
    	Copyright &copy; 2013 - 2015　<a href="http://www.jlqyd.com/" target="_blank">健丽医美信息管理系统</a>
    </footer>
    </div>
</body>
</html>