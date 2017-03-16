<?php
    function goToProductDetail($productId)
    {
		    header('Location: /layout/user/chi-tiet-san-pham/chi-tiet-san-pham.php?productId='.$productId);
        exit;
    }
?>
