<?php	
require_once("../functions/functions.php");

$search = $_POST['search'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$product_name = $_POST['product_name'];


$query = "select * from product_request";

if ($name != ''){
$query = "select * from product_request WHERE name = '".$name."' ";
}
elseif ($phone != ''){
$query = "select * from product_request WHERE phone = '".$phone."' ";
}
elseif ($product_name != ''){
$query = "select * from product_request WHERE product_name = '".$product_name."' ";
}


$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 60;
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
            $pagination.= "<li><a href=\"all_request#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"all_request#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
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
                        $pagination.= "<li><a href=\"all_request#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"all_request#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"all_request#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"all_request#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"all_request#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"all_request#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"all_request#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"all_request#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
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
                        $pagination.= "<li><a href=\"all_request#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"all_request#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>Next &raquo;</a></li>";
        
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
$query="select id, product_name from product_request order by id DESC
limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage";
//echo $query;
$res    =   mysqli_query($mysqli,$query);
$count  =   mysqli_num_rows($res);
$HTML='';

?>
 <div class="box-body table-responsive no-padding">
 
	<table class="table table-hover">
			<thead>
             <tr class="info_member">
                <th>Name</th>
                <th>Phone</th>
				<th>Address</th>
				<th>Product Name</th>
				<th>Product Image</th>
                <th width="13%" style="text-align: center;">Action</th>
            </tr>
            </thead>
            <tbody>
			    <?php
                        global $mysqli;
						if ($name != ''){
							if ($stmt = $mysqli->prepare("SELECT id, name, phone, address, product_name, image from product_request
							 WHERE id LIKE '%$search%' || name LIKE '%$search%' || phone LIKE '%$search%' || product_name LIKE '%$search%'
							 ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $name);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($id, $name, $phone, $address, $product_name, $image);
							$stmt->store_result();
							  }
							  
						}
						elseif ($phone != ''){
							if ($stmt = $mysqli->prepare("SELECT id, name, phone, address, product_name, image from product_request
							WHERE phone = '".$phone."' LIKE '%$search%' || name LIKE '%$search%' || phone LIKE '%$search%' || product_name LIKE '%$search%'
						    ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $phone);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($id, $name, $phone, $address, $product_name, $image);
							$stmt->store_result();
							  }
						}
						elseif ($product_name != ''){
							if ($stmt = $mysqli->prepare("SELECT id, name, phone, address, product_name, image from product_request
							 WHERE product_name= '".$product_name."' LIKE '%$search%' || name LIKE '%$search%' || phone LIKE '%$search%' || product_name LIKE '%$search%'
						     ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $product_name);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($id, $name, $phone, $address, $product_name, $image);
							$stmt->store_result();
							  }
						}
				
    		        while ($stmt_pro->fetch()) {
    		            global $mysqli;
        			    if($stmt_pro = $mysqli->prepare("SELECT id, name, phone, address, product_name, image from product_request
        			        WHERE id ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
        				$stmt_pro->execute(); 
        				$stmt_pro->bind_result($id, $name, $phone, $address, $product_name, $image);
        				$stmt_pro->store_result();
        				}
    			    ?> 
				    <tr>
                        <td><?php echo $name; ?></td>
    					<td><?php echo $phone; ?></td>
    					<td><?php echo $address; ?></td>
    					<td><?php echo $product_name; ?></td>
    					<td><img src="../../images/products/<?php echo $image; ?>" width="60" /></td>
                        <td style='text-align: center;'>
    					    <!--<a href='edit_request/<?php echo $id; ?>' class='btn btn-success btn-raised btn-xs' data-toggle='tooltip' data-placement='top" title="Edit Information' ><i class='fa fa-pencil'></i></a>-->
                            <a href="apps/product_request/delete_request.php?p_id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
    				    </td>
                    </tr>
            
            <?php }?>
            </tbody>
    </table>
</div>
                

<?php echo $pagination; ?>
