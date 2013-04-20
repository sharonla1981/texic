<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="he" lang="he" dir="rtl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        <!--  jquery mobile -->
        <?php //Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/css/rtl.jquery.mobile-1.3.0.css"); ?>
        <?php //Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/css/taxi.min.css"); ?>
        <?php Yii::app()->clientScript->registerCssFile("http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css"); ?>
        <?php Yii::app()->clientScript->registerScriptFile("http://code.jquery.com/jquery-1.9.1.min.js"); ?>
        <?php Yii::app()->clientScript->registerScriptFile("http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"); ?>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="container" id="page">

	<div id="header">
		
                <div data-role="header" style="overflow:hidden;" data-theme="e">
    <h1>מונית בקליק</h1>
    <div data-role="navbar" style="text-align: right">
        <ul>
            <li><a href="#">דוחות</a></li>
            <li><a href="index.php?r=ride/create">נסיעות</a></li>
            
            
        </ul>
    </div><!-- /navbar -->
</div><!-- /header -->
	</div><!-- header -->

	<?php /*<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'בית', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'התחבר', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'התנתק ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu --> */ ?>
	
	<?php echo $content; ?>
        
	<div class="clear"></div>

	<div data-role="footer" class="ui-bar"   data-theme="e">
        <a href="#" data-icon="plus">Add</a>
        <a href="#" data-icon="arrow-u">Up</a>
        <a href="#" data-icon="arrow-d">Down</a>
        </div>

</div><!-- page -->
<script type="text/javascript">
   clk();
function clk() {
        var a=new Date();   
        /*$("#year").text(a.getYear() + 1900);
        $("#month").text(a.getMonth() + 1);
        $("#day").text(a.getDate());
        $("#hour").text(a.getHours());
        $("#minute").text(a.getMinutes());*/
        var datetime = (a.getYear() + 1900) + "-" + (a.getMonth() + 1) + "-" + (a.getDate()) + " " + (a.getHours()) + ":" + (a.getMinutes()) + ":" + "00";
        $("#datetime").val(datetime);
        setTimeout(clk,60000);
        
        //alert()
    }
</script>
</body>
</html>
