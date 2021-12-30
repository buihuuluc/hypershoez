
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

    if (isset($data['product'])) {
         $Products= $data['product'];
    }
    
?>
  <div class="panel-heading">
        <h3 class="text-center title_manager">PRODUCT MANAGER</h3>
  </div>
  <a href="/shoez/admin/productedit">
        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm Danh Mục</button>
  </a>
  <div id="table-wrapper">
    <div id="table-scroll">    
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title text" >ID </th>
                    <th class="column-title text">Loai </th>
                    <th class="column-title text">Tên Giày</th>
                    <th class="column-title text">Giá Bán</th>
                    <th class="column-title text">Mô Tả</th>
                    <th class="column-title text">Hình Ảnh </th>
                    <th class="column-title text no-link last" colspan="2"><span class="nobr">Hành Động</span></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($Products as $item) {
                        $maGiay = $item['id_product'];
                        $mahieuGiay = $item['id_brand'];
                        $tenGiay = $item['ten'];
                        $giaBan = number_format($item['gia'],0);
                        $moTa = $item['description'];
                        $img= $item['image'];
                    
                    $table = <<<EOD
                        <tr class="even pointer">
                           
                            <td class="">$maGiay</td>
                            <td class=" ">$mahieuGiay</td>
                            <td class=" ">$tenGiay</i></td>
                            <td class=" "> $giaBan</td>
                            <td class=" ">$moTa</td>
                            <td class="a-right a-right ">
                                <img style="width: 80px;height: 80px;border-radius: 10px;" src="/shoez/public/images/giay/anh1/$img" alt="">
                            </td>
                            <td><a href="/shoez/admin/productedit/$maGiay"><button class="btn btn-warning">Sửa</button></a></td>
                            <td><a href="/shoez/admin/delete/$maGiay"><button class="btn btn-danger" ">Xoá</button></a></td>
                        </tr>
                    </tbody>
                    
                    EOD;
                    echo $table;
                    }
                ?>
               
               
        </table>
    </div>
</div>
</div>