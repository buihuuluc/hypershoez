<?php
    if (isset($data['user'])) {
        $user = $data['user'];
        
    }
?>

<h1>Chào Mừng <?=$user['username']?></h1>
<h3><a href="/shoez/sigin/Logout">Đăng xuất</a></h3>