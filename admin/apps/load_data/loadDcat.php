<?php	
require_once("../functions/functions.php");

$link = $_POST['page_name']. "/" .$_POST['catID'];

$search = $_POST['search'];

if ($search != ''){
$query = "select * from menu WHERE menu_name = '".$search."' ";
}	

else {
$query = "select * from menu";
}	

$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 20;
$start = ($page-1) * $recordsPerPage;
$adjacents = "2";
    
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($count/$recordsPerPage);
$lpm1 = $lastpage - 1;   
$pagination = "";
if($lastpage > 1)
    {   
        $pagination .= "<ul class='pagination pull-right'>";
        if ($page > 1)
            $pagination.= "<li><a href=\"view_all_category#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='view_all_category'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"view_all_category#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<li class='active'><span>$counter</span></li>";
                    else
                        $pagination.= "<li><a href=\"view_all_category#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"view_all_category#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"view_all_category#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"view_all_category#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"view_all_category#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"view_all_category#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"view_all_category#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"view_all_category#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           }
           else
           {
               $pagination.= "<li><a href=\"Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "..";
               for($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
               {
                   if($counter == $page)
                        $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                        $pagination.= "<li><a href=\"view_all_category#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"view_all_category#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='view_all_category'>Next &raquo;</a></li>";
        
        $pagination.= "</ul>";       
    }
    
if(isset($_POST['pageId']) && !empty($_POST['pageId']))
{
    $id=$_POST['pageId'];
}
else
{
    $id='0';
}
?>
 <div class="box-body table-responsive no-padding">
	<table class="table table-hover">
			<thead>
             <tr class="info_member">
                                <th>#</th>
								<th>Category Name</th>
								<th>Category Icon</th>
								<th>Category Banner</th>
                                <th width="13%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
        	   
        				<?php
            			$sl = 0;
            			if ($search != ''){
            			global $mysqli;
            			$catstm = $mysqli->prepare("SELECT menu_id, menu_name, img1, banner from menu WHERE menu_name LIKE '%$search%'
            			ORDER BY menu_id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage");
            			$catstm->execute(); 
            			$catstm->bind_result($id, $menu_name, $icon_img, $photo);
            			
            			}else{
            				
            			global $mysqli;
            			$catstm = $mysqli->prepare("SELECT menu_id, menu_name, img1, banner from menu
            			ORDER BY menu_id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage");
            			$catstm->execute(); 
            			$catstm->bind_result($id, $menu_name, $icon_img, $photo);
            			}
            			
            			while ($catstm->fetch()) { ?>   
				
                            <tr>
                                <td><?php echo ++$sl; ?></td>
								<td><?php echo $menu_name; ?></td>
								<td>
								    <img width="20" src="../../images/icon/<?php echo $icon_img; ?>"/>
								</td>
								<td>
								    <img width="20" src="../../images/icon/<?php echo $photo; ?>"/>
								</td>
                                <td style="text-align: center;">
								<a href="update_category/<?php echo $id; ?>" class="btn btn-success btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Information" ><i class="fa fa-pencil"></i><div class="ripple-container"></div></a>
                                <?php if($id != 68) {?>
                                 <a href="apps/bin_cat/delete_cat.php?actionID=view_all_category&catID=<?php echo $id; ?>&photo=<?php echo $photo; ?>&icon=<?php echo $icon_img; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete this Menu?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
						        <?php } ?>
							</td>
                            </tr>
   						 	 <?php }
							   $catstm->close();
								?>
                        </tbody>
                    </table>
                </div>
                

<?php echo $pagination; ?>
