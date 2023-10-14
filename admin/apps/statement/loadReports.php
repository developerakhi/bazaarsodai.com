<link rel="stylesheet" type="text/css" href="apps/product_request.css" />
<?php	
require_once("../functions/functions.php");

$link = $_POST['page_name']. "/" .$_POST['catID'];

$search = $_POST['search'];
	
if ($search != ''){
$query = "select * from sd_order_list WHERE title = '".$search."' ";
}	

else {
$query = "select * from sd_order_list";
}	

$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 15;
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
            $pagination.= "<li><a href=\"sales_statement#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='sales_statement'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"sales_statement#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
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
                        $pagination.= "<li><a href=\"sales_statement#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"sales_statement#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"sales_statement#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"sales_statement#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"sales_statement#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"sales_statement#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"sales_statement#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"sales_statement#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
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
                        $pagination.= "<li><a href=\"sales_statement#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"sales_statement#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='sales_statement'>Next &raquo;</a></li>";
        
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
                <th width="8%">#</th>
				<th width="">Name</th>
				<th width="">Phone</th>
				<th width="">Address</th>
				<th width="">Product</th>
				<th width="">Image</th>
                <th width="10%" style="text-align: center;">Action</th>
            </tr>
        </thead>
		<tbody>
			<?php
			$sl = 0;
			if ($search != ''){
			global $mysqli;
			$catstm = $mysqli->prepare("SELECT date, pro_id, title, img, price, qty, line_total from sd_order_list WHERE title LIKE '%$search%' || date LIKE '%$search%'
			ORDER BY id ASC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage");
			$catstm->execute(); 
			$catstm->bind_result($date, $pro_id, $title, $img, $price, $qty, $line_total);
			
			}else{
				
			global $mysqli;
			$catstm = $mysqli->prepare("SELECT date, pro_id, title, img, price, qty, line_total from sd_order_list
			ORDER BY id ASC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage");
			$catstm->execute(); 
			$catstm->bind_result($date, $pro_id, $title, $img, $price, $qty, $line_total);
			}
			
			while ($catstm->fetch()) { ?>               
			<span  class="price" style="visibility:hidden; float:left; height:2px;"><?php echo $sell; ?></span>
                <tr style="background-color: #fbfbfb;">
                    <td style="text-align: center;"><?php echo ++$i;?></td>
                    <td><?php echo $date;?></td>
                    <td><?php echo $title;?></td>
                    <td style="text-align: center;"><?php echo number_format ($price); ?></td>
                    <td style="text-align: center;"><?php echo $qty; ?></td>
                    <td style="text-align:right;"><?php echo number_format ($line_total); ?></td>

    				<td style="text-align: center;">
        				<!--<a href="all_request/<?php echo $id; ?>" class="btn btn-success btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Edit" ><i class="fa fa-eye"></i></a>-->
        				<!--<a href="apps/product_request/delete_request.php?actionID=all_request&p_id=<?php echo $id; ?>&photoid=<?php echo $image; ?>" class="btn btn-danger btn-raised btn-xs" onClick="return confirm('Are you sure to delete ?')"><i class="fa fa-close"></i></a>-->
			        </td>
			</tr>
			<?php }
			   $catstm->close();
			?>
		</tbody>
    </table>
    <div id="modal-container" class="modal">
      <span class="close">&times;</span>
      <img src="" id="modal-image" alt="Modal Image">
    </div>
</div>
                

<?php echo $pagination; ?>


<script>
$(document).ready(function() {
  // Open modal when thumbnail is clicked
  $(".req_pro").click(function() {
    var imageId = $(this).data("image-id");
    var imageUrl = $(this).attr("src");
    $("#modal-image").attr("src", imageUrl);
    $("#modal-container").fadeIn();
  });

  // Close modal when close button is clicked
  $(".close").click(function() {
    $("#modal-container").fadeOut();
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>