<?php
if (!defined("IN_ESOTALK")) exit;

/**
 * MySwitch skin.
 * 
 */

ET::$skinInfo["MySwitch"] = array(
	"name" => "MySwitch",
	"description" => "MySwitch skin.",
	"version" => ESOTALK_VERSION,
	"author" => "DaVchezt",
	"authorEmail" => "chezt.v@live.com",
	"authorURL" => "http://davchezt.tumblr.com",
	"license" => "GPLv2"
);

class ETSkin_MySwitch extends ETSkin {


/**
 * Initialize the skin.
 * 
 * @param ETController $sender The page controller.
 * @return void
 */
public function handler_init($sender)
{
	// source link
	$sender->addToMenu('statistics', 'myswitch', '<a href="https://github.com/davchezt/MySwitch">MySwitch</a> Skin by DaVchezt');
	$sender->addCSSFile((C("esoTalk.https") ? "https" : "http")."://fonts.googleapis.com/css?family=Open+Sans:400,600");
	$sender->addCSSFile("core/skin/base.css", true);
	$sender->addCSSFile("core/skin/font-awesome.css", true);
	$sender->addCSSFile($this->resource("styles.css"), true);

	// If we're viewing from a mobile browser, add the mobile CSS and change the master view.
	if ($isMobile = isMobileBrowser()) {
		$sender->addCSSFile($this->resource("mobile.css"), true);
		$sender->masterView = "mobile.master";
		$sender->addToHead("<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>");
	}

}

}
