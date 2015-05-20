<?php

/**
 * @author Karunesh
 * @copyright 2012
 */

if(isset($_POST['pic']))
            {
                if ($_FILES['pic']['error']==UPLOAD_ERR_OK)
        	    {
            	   $tmp_name=$_FILES['pic']['tmp_name'];
        	    }
        	    $size=getimagesize($tmp_name);
        	    $mime_type=$size['mime'];
        	    $data=addslashes(fread(fopen($tmp_name,"r"),filesize($tmp_name)));
             }

?>