<h1>Login thành công</h1>
<form action="?controller=product&action=index" method="post">
    <input type="text" name='timkiem'>
    <input type="submit" value="tìm kiếm" name="btn-timkiem">
    <a href="?controller=login&action=logout">Đăng xuất</a>
</form>
<div>
<?php 
    echo '<pre>';
    print_r($products);
    echo '</pre>';
?>
</div>

