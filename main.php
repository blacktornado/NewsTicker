<html>
<aside class="sidebar">
			 <h2>Blog-News</h2>
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
