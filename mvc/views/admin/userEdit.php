<?php
    //Data Add San Pham ---
    if (isset($data['LoaiGiay'])) {

        $Brands = $data['LoaiGiay'];
        
    }
    
    //Data Edit ---
    if (isset($data['userEdit'])) {
        $userEdit = $data['userEdit'];
    }
?>
<!-- Alert -->

<h1 class="text-center ">EDIT USER</h1>

<form method="POST" enctype="multipart/form-data">
    <button class=" btn btn-success  offset-2" name="btnUpdate">Cập Nhật </button>
    <a href="/shoez/admin/usermanager">
        <button type="button" class="btn btn-outline-success ">Trở lại</button>
    </a>
    <div class="form-group">
        
        <label class=" lb_name col-8 offset-2" for="name">ID</label>
        <input required="true" type="text" class="form-control col-2 offset-2" name="id" value="<?=isset($userEdit['id_user']) ? $userEdit['id_user'] : ''?>" readonly>    

        <label class=" lb_name col-8 offset-2" for="name">User Name</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="username" value="<?=isset($userEdit['username']) ? $userEdit['username'] : ''?>">

        <label class=" lb_name col-8 offset-2" for="name">Password</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="password" value="<?=isset($userEdit['password']) ? $userEdit['password'] : ''?>">
        
        <label class=" lb_name col-8 offset-2" for="name">Họ Tên</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="hoten" value="<?=isset($userEdit['name']) ? $userEdit['name'] : ''?>">
          
        <label class=" lb_name col-8 offset-2" for="name">Email</label>
        <input required="true" type="email" class="form-control col-8 offset-2" name="email" value="<?=isset($userEdit['email']) ? $userEdit['email'] : ''?>">
          
        <label class=" lb_name col-8 offset-2" for="name">Địa Chỉ</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="diachi" value="<?=isset($userEdit['address']) ? $userEdit['address'] : ''?>">

        <label class=" lb_name col-8 offset-2" for="name">Phone</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="phone" value="<?=isset($userEdit['phone']) ? $userEdit['phone'] : ''?>">
        

    </div>
    
</form>