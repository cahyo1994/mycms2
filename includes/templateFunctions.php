<?php 
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {
var $templateName='default';

var $widgetPositions=array();

function show()
{
require_once($this->getCurrentTemplatePath().'template.php');
}

function getCurrentTemplatePath()
{
return 'templates/'.$this->templateName.'/';
}

function setTemplate($templateName)
{
$this->templateName = $templateName;
}

function appOutput(){
require_once('includes/cmsApplication.php');
$app=new CmsApplication();
$app->run();
}

function widgetOutput($position='default')
{
	if(!empty($this->widgetPositions[$position]))
	{
		$widget=$this->widgetPositions[$position];
		foreach($widget as $widgetName)
		{
			require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
			$widgetclass=ucfirst($widgetName).'widget';
			$widget=new $widgetclass();
			$widget->run($widgetName);
		}
	}
}

function setWidget ($position,$widgetName)
{
	if(empty($this->widgetPositions[$position]))
	{
		$this->widgetPositions[$position]=array($widgetName);
	} else {
		array_push($this->widgetPositions[$position],$widgetName);
		}
	}
}
?>