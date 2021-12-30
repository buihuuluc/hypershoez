<?php
    //Data Add San Pham ---
    if (isset($data['LoaiGiay'])) {

        $Brands = $data['LoaiGiay'];
        
    }
    
    //Data Edit ---
    if (isset($data['giayEdit'])) {
        $giayEdit = $data['giayEdit'];
    }
?>
<!-- Alert -->

<h1 class="text-center ">Thêm Danh Mục Sản Phẩm</h1>

<form method="POST" enctype="multipart/form-data">
    <button class="offset-2 btn btn-success" name="btnAdd">Thêm </button>
    <button class=" btn btn-warning" name="btnEdit">Sửa </button>
    <a href="/shoez/admin/productmanager">
        <button type="button" class="btn btn-outline-success ">Trở lại</button>
    </a>
    <div class="form-group">
        <label class="lb_name col-8 offset-2" >Chọn Loại Giầy:</label>
        <select class="form-control col-4 offset-2" name="LoaiGiay" required >
        <option value="">- Chọn loại giầy -</option>
        <?php
            foreach ($Brands as $item) {
                $MaLoai = $item['id_brand'];
                $TenLoai = $item['ten_brand'];
                echo '<option value="'.$MaLoai.'">'.$TenLoai.'</option>';
            }
           
           
        ?>
        </select>
        
        <label class=" lb_name col-8 offset-2" for="name">Tên Giầy:</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="TenGiay" value="<?=isset($giayEdit['ten']) ? $giayEdit['ten'] : ''?>">

        <label class=" lb_name col-8 offset-2" for="name">Giá Bán:</label>
        <input required="true" type="text" class="form-control col-8 offset-2" name="GiaBan" value="<?=isset($giayEdit['gia']) ? $giayEdit['gia'] : ''?>">
        
        <label class=" lb_name col-8 offset-2" for="name">Mô tả:</label>
        <textarea class="form-control col-8 offset-2" id="ThanhPhan" name="MoTa" rows="5" cols="50">
            <?=isset($giayEdit['description']) ? $giayEdit['description'] : ''?>
        </textarea>
        <div class="row py-4">
            <div class="col-lg-6 mx-auto">

                <!-- Upload image input-->
                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                    <input id="upload" type="file" class="form-control border-0" name="fileToUpload">
                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                    <div class="input-group-append">
                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                        </label>
                    </div>
                </div>

                <!-- Uploaded image area-->
                <div class="image-area mt-4">
                    <img id="imageResult" src="/shoez/public/images/giay/anh1/<?=isset($giayEdit['image']) ? $giayEdit['image'] : ''?>" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                </div>

            </div>
        </div>

    </div>
    </div>
</form>