<div class="table-responsive">
<?php
    if (isset($data['msg'])) {
        $msg = $data['msg'];
        echo <<<EOD
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>$msg</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        EOD;
    }

    if (isset($data['userList'])) {
         $userList = $data['userList'];
    }
    
?>

<div class="table-responsive">
        <div class="panel-heading">
			<h3 class="text-center title_manager">USER MANAGER</h3>
		</div>
        
  <div id="table-wrapper">
    <div id="table-scroll">    
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                <th class="column-title text" >ID</th>
                <th class="column-title text">User Name</th>
                <th class="column-title text">PassWord</th>
                <th class="column-title text">Họ Tên</th>
                <th class="column-title text">Email</th>
                <th class="column-title text">Địa Chỉ</th>
                <th class="column-title text">Phone</th>
                <th class="column-title text no-link last" colspan="2"><span class="nobr">Hành Động</span></th>
                </tr>
            </thead>
                <?php
                    foreach ($userList as $item) {

                        $Id = $item['id_user'];
                        $Username = $item['username'];
                        $Password = $item['password'];
                        $Hoten = $item['name'];
                        $Email = $item['email'];
                        $Diachi = $item['address'];
                        $Phone= $item['phone'];
                    
                    $table_user = <<<EOD
                    <tbody>
                        <tr class="even pointer">
                           
                            <td class="">$Id</td>
                            <td class=" ">$Username</td>
                            <td class=" ">$Password</i></td>
                            <td class=" "> $Hoten</td>
                            <td class=" ">$Email</td>
                            <td class=" ">$Diachi</td>
                            <td class=" ">$Phone</td>
                            <td><a href="/shoez/admin/useredit/$Id"><button class="btn btn-warning">Sửa</button></a></td>
                            <td><a href="/shoez/admin/deleteuser/$Id"><button class="btn btn-danger">Xoá</button></a></td>
                        </tr>
                    </tbody>
                    
                    EOD;
                    echo $table_user;
                    }
                ?>
               
               
        </table>
    </div>
</div>
</div>