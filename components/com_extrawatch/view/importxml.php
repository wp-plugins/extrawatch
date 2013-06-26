<?php
/**
 * JoomlaWatch - A real-time ajax joomla monitor and live stats
 * @package JoomlaWatch
 * @version 2.1
 * @revision 786
 * @license http://www.gnu.org/licenses/gpl-3.0.txt 	GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<br>
<h1><?php echo _EW_GOALS;?></h1>
<h3><?php echo _EW_GOALS_IMPORT;?></h3>
<form action="<?php echo $extraWatch->config->getAdministratorIndex();?>?option=com_extrawatch&task=goals&action=saveImportGoal" method="post" enctype="multipart/form-data">
  <label for="file"><?php echo _EW_GOALS_FILENAME;?>:</label><br/><br/>
  <input type="file" name="file" id="file" />
  <input type="submit" name="submit" value="<?php echo _EW_GOALS_IMPORT_XML;?>" />
  <input name='form_key' type='hidden' value="<?php echo $extraWatch->extraWatch->env->getFormKey();?>" />
</form>
