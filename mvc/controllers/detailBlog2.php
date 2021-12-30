<?php
    class DetailBlog2 extends Controller{

        
        

        function Show()
        {
            $this ->getView('master1', [
                'Page'=>'detailblog2'
            ]);
        }

    }
?>