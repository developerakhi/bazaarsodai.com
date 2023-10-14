<?php

class sales_personADD {

public function add_new_person() 
	{
	global $mysqli;
		return '
            <div class="row">
                    <div class="form-group col-md-3">
                        <label for="username">Name</label>
                        <input type="text" required="required" name="username" id="username" placeholder="Name" class="form-control" /><br>    
                    </div>
                    <div class="col-md-3">
                        <label for="password">Password</label>
                        <input type="password" required="required" name="password" placeholder="Password" autocomplete="off" id="password" class="form-control"/><br>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="confirmpwd">Confirm Password</label>
                    <input type="password" name="confirmpwd" required="required" autocomplete="off" id="confirmpwd" class="form-control"/><br>
                </div>
            </div>
           <div class="row">
                <div form-group col-md-3>
                    <div class="form-group col-md-3">
                         <label>Email</label>
                         <input type="email" required="required" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="sel1" class="form-label">User Type</label>
                        <select class="form-control form-select" id="user_type" name="user_type">
                          <option value="admin">Admin</option>
                          <option value="staff">Staff</option>
                        </select>
                    </div>
                </div>
           </div>
        		
               		 ';
		}
		
	
}
$sales_mng = new sales_personADD();
?>
