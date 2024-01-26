<?php
    if(is_array($tk)){
        extract($tk);
    }


?>
<div class="row">
            <div class="row headerAdmin">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row mb10">
                        Mã Tài khoản: <br>
                        <input type="number" name="makh" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập: <br>
                    <input type="text" name="user" id="" value="<?php if(isset($user)&&($user!="")) echo $user;?>">
            </div>

            <div class="row mb10">
                        Password: <br>
                    <input type="password" name="pass" id="" value="<?php if(isset($pass)&&($pass!="")) echo $pass;?>">
            </div>

            <div class="row mb10">
                        Email: <br>
                    <input type="email" name="email" id="" value="<?php if(isset($email)&&($email!="")) echo $email;?>">
            </div>

            <div class="row mb10">
                        Address: <br>
                    <input type="text" name="address" id="" value="<?php if(isset($address)&&($address!="")) echo $address;?>">
            </div>
            <div class="row mb10">
                        Tel: <br>
                    <input type="text" name="tel" id="" value="<?php if(isset($tel)&&($tel!="")) echo $tel;?>">
            </div>

            <div class="row mb10">
                        ROLE: <br>
                    <input type="text" name="role" id="" value="<?php if(isset($role)&&($role!="")) echo $role;?>">
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhat" value="Cập nhật" id="">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
            </div>

            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;


?>
            </form>
        </div>
    </div>
    </div>