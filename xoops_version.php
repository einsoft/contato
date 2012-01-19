<?php
// $Id: xoops_version.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');	
	}
$moduleDirName = basename( dirname( __FILE__ ) ) ;

$modversion['name'] = "Contato";
$modversion['version'] = 0.5;
$modversion['description'] = "Módulo de contato";
$modversion['credits'] = "Dagon Design";
$modversion['author'] = 'http://www.dagondesign.com/articles/secure-php-form-mailer-script/';
$modversion['nickname'] = 'Dagon Design';
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html/";
$modversion['official'] = 0;
$modversion['image'] = "images/contato_logo.png";
$modversion['dirname'] = "contato";
$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16'] = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32'] = 'Frameworks/moduleclasses/icons/32';

//about
$modversion["module_website_url"] = "http://www.sf.net/einsoft";
$modversion["module_website_name"] = "Einsoft at sf.net";
$modversion["release_date"] = "17/10/2011";
$modversion["module_status"] = "Beta";
$modversion["author_website_url"] = "http://www.dagondesign.com/";
$modversion["author_website_name"] = "Dagon Design";
$modversion['min_php']='5.2';
$modversion['min_xoops']="2.5";

//Admin things
$modversion['hasAdmin'] = 1;

// Menu
$modversion['hasMain'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Templates
$i = 1;
$modversion['templates'][$i]['file'] = 'contato_formulario.html';
$modversion['templates'][$i]['description'] = '_MI_CONTACT_TEMPLATES';


// Config categories
$i = 1;
$modversion['configcat'][$i]['nameid'] = 'settings';
$modversion['configcat'][$i]['name'] = '_MI_CONTACT_SETTINGS';
$modversion['configcat'][$i]['description'] = '_MI_CONTACT_SETTINGS_DSC';
$i++;
$modversion['configcat'][$i]['nameid'] = 'general';
$modversion['configcat'][$i]['name'] = '_MI_CONTACT_GEN';
$modversion['configcat'][$i]['description'] = '_MI_CONTACT_GEN_DSC';
unset($i);
// CONFIG stuff
$i = 1;
$modversion['config'][$i]['name']        	= 'contato_email';
$modversion['config'][$i]['title']       	= '_MI_CONTATO_EMAIL';
$modversion['config'][$i]['description']	= '_MI_CONTATO_EMAIL_DESC';
$modversion['config'][$i]['formtype']		= 'textbox';
$modversion['config'][$i]['valuetype']		= 'text';
$modversion['config'][$i]['default']		= 'yourname@yourdomain.net';
$modversion['config'][$i]['category']		= 'general';
$i++;
$modversion["config"][$i]["name"]        	= "contato_anti_spam"; 
$modversion["config"][$i]["title"]       	= "_MI_CONTATO_IMAGEVERIFICATION"; 
$modversion["config"][$i]["description"] 	= "_MI_CONTATO_IMAGEVERIFICATIONDESC"; 
$modversion["config"][$i]["formtype"]    	= "select"; 
$modversion["config"][$i]["valuetype"]   	= "text";
$modversion["config"][$i]["default"]     	= ""; 
$modversion['config'][$i]['options'] 		= array('_MI_CONTATO_OFF' => 0, '_MI_CONTATO_BASIC' => 1, '_MI_CONTATO_RECAPTCHA' => 2);
$modversion["config"][$i]["category"]    	= "settings";
$i++;
$modversion['config'][$i]['name']        	= 'contato_re_public';
$modversion['config'][$i]['title']       	= '_MI_CONTATO_RE_PUBLIC_KEY';
$modversion['config'][$i]['description']	= '_MI_CONTATO_RE_PUBLIC_KEYDESC';
$modversion['config'][$i]['formtype']		= 'textbox';
$modversion['config'][$i]['valuetype']		= 'text';
$modversion['config'][$i]['default']		= '';
$modversion['config'][$i]['category']		= 'general';
$i++;
$modversion['config'][$i]['name']        	= 'contato_re_private';
$modversion['config'][$i]['title']       	= '_MI_CONTATO_RE_PRIVATE_KEY';
$modversion['config'][$i]['description']	= '_MI_CONTATO_RE_PRIVATE_KEYDESC';
$modversion['config'][$i]['formtype']		= 'textbox';
$modversion['config'][$i]['valuetype']		= 'text';
$modversion['config'][$i]['default']			= '';
$modversion['config'][$i]['category']		= 'general';
$i++;
$modversion['config'][$i]['name']        	= 'contato_form';
$modversion['config'][$i]['title']       	= '_MI_CONTATO_FORM';
$modversion['config'][$i]['description']	= '_MI_CONTATO_FORMDESC';
$modversion['config'][$i]['formtype']		= 'textarea';
$modversion['config'][$i]['valuetype']		= 'text';
$modversion['config'][$i]['default']			= '
type=text|class=fmtext|label=Nome|fieldname=fm_name|max=100|req=true
type=text|class=fmtext|label=Email|fieldname=fm_email|max=100|req=true|ver=email
type=textarea|class=fmtextarea|label=Mensagem|fieldname=fm_message|max=1000|rows=6|req=true
type=verify|class=fmverify|label=Verificação
';
$modversion['config'][$i]['category']		= 'general';
$i++;
$modversion['config'][$i]['name']        	= 'contato_formmessage';
$modversion['config'][$i]['title']       	= '_MI_CONTATO_FORMMESSAGE';
$modversion['config'][$i]['description']	= '_MI_CONTATO_FORMMESSAGEDESC';
$modversion['config'][$i]['formtype']		= 'textarea';
$modversion['config'][$i]['valuetype']		= 'text';
$modversion['config'][$i]['default']			= '<p>Obrigado, sua mensagem foi enviada! As mensagens são checadas todos os dias úteis de 08:00 as 18:00 horas.</p>';
$modversion['config'][$i]['category']		= 'general';
unset($i);

// contact_icq
/*
$modversion['config'][2]['name'] = 'contact_icq';
$modversion['config'][2]['title'] = '_MI_CONTACT_GETICQ';
$modversion['config'][2]['description'] = '_MI_CONTACT_GETICQDSC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 0;
$modversion['config'][2]['category'] = 'settings';
*/
// contact_url
/*
$modversion['config'][3]['name'] = 'contact_url';
$modversion['config'][3]['title'] = '_MI_CONTACT_GETURL';
$modversion['config'][3]['description'] = '_MI_CONTACT_GETURLDSC';
$modversion['config'][3]['formtype'] = 'yesno';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 0;
$modversion['config'][3]['category'] = 'settings';
*/
?>