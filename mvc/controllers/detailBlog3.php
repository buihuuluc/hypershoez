<?php
    class DetailBlog3 extends Controller{

        
        

        function Show()
        {
            $this ->getView('master1', [
                'Page'=>'detailblog3'
            ]);
        }

    }
?>