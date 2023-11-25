<?php
    foreach($kq as $value){
        ?>
      
            <section class="conten-items">
                <form action="cart.php" method="post">
                <img src="image/<?php echo $value['anh-sp'] ?>"   width=100 height=100>
                <section class="price">
                    <section>
                        <p><?php echo $value['ten-sp'] ?></p>
                        <span><?php echo $value['gia'] ?>Đ</span>
                   </section>
                   <section>
                    <input type="hidden" name="image" value="<?php echo $value['anh-sp']; ?>" >
                    <input type="hidden" name="name" value="<?php echo $value['ten-sp'] ?>" >
                    <input type="hidden" name="price" value="<?php echo $value['gia'] ?>" >
                    <input type="hidden" name="masp" value="<?php echo $value['ma-sp'] ?>" >
                    <input type="hidden" name="sl" value="<?php echo $value['soluong'] ?>" >
                    <button class="mua" name ="mua" value="mua" >Mua ngay</button>
                   </section>
                </section></form>
            </section>
        <?php
    }
    ?>