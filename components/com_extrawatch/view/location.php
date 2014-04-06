<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 1804  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 byCodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access'); ?>


<?php
if (!$extraWatch->config->isFree()) {
    if ($extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) {
        ?>
        <?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
            <script
                src="<?php echo $extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/OpenLayers/OpenLayers.js"></script>

            <span id="extrawatch_map_city"></span>&nbsp;<span id="extrawatch_map_country"></span> <br/><br/>
            <div id="openmap" style="width: 100%; height: 600px;"></div>

        <?php } ?>

        



    <?php
    } else {
?>
<form action="<?php echo $extraWatch->config->renderLink();?>" method="POST">
  <?php echo _EW_STATS_MAP_ENTER_KEY;?>
<br/><br/>
<input type="edit" name="storeIpInfoDbKey"/> <br/><br/>
<input type="submit" value="<?php echo _EW_STATS_MAP_STORE_KEY; ?>"/>
<input type="hidden" name="task" value="storeIpInfoDbKey"/>
<input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
</form>
<?php
}
} ?>





