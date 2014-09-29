<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cegura Policy</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script src="newsticker.js" type="text/javascript"></script>
<link href="newsticker.css" rel="stylesheet" type="text/css" />
<aside class="sidebar">
			 <h2>NewsTicker</h2>
		     </aside>
		
  <div id="wrap">
    <div id="head" class="block"></div>
 
        <div id="content">
            <div id="info" class="block">
                <ul id="ticker">
	
            	<?php 
						   $sql="select * from table_name order by col_name DESC limit 0,4 ";
						   $res=mysql_query($sql);
						   while($row=mysql_fetch_assoc($res)) {
						   $sentence=$row['body'];
						   ?> 
               <li>
		  
		             <p>
						  <?php 
						  //for only 12 words extract from a paragraph to show in news blog
                                                   $chck=implode(' ', array_slice(explode(' ', $sentence), 0, 12));
						   echo '<b><u>'.$row['title'].'</u></b>';
						   echo "</br>";
						   echo '<i>'.$chck.'...!!'.'</i>';
						   echo "</br>";
						   //echo "</br>"; ?>
		                  </p></li>
                    <?php }?> 
			     </ul>
        			  </div>                     
                      </div>		
                      </div>
                      </html>
