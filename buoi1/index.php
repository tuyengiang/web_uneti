<?php 
    if(isset($_POST["dangnhap"])){
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $ngay=$_POST["ngaysinh"];
        $thang=$_POST["thangsinh"];
        $nam=$_POST["namsinh"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chu</title>
</head>
<body>
    The input <br>
    <br>
    <form>
        <input type="text"><br>
        <input type="password"><br>
        <textarea></textarea><br>
        <input type="submit" value="Dang nhap">
        <button type="submit">
        Submit
        </button>
        <button type="button">Button</button>
        <br>
        select,option,radio,checkbox <br>

        * select: cho phep chon 1 list danh sach type dropdown<br>
        <br>
    </form>


    <h4>Dang nhap</h4>
    <form action="" method="post">
        <label>Ten dang nhap</label>
        <input type="text" name="username">
        <labe>Mat khau</labe>
        <input type="password" name="password">
        <label>Ngay sinh</label>
        <select name="ngaysinh">
            <option>-- Ngay sinh --</option>
            <?php for($i=1; $i<=31;$i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i;  ?></option>
            <?php endfor; ?>
        </select>

        <select name="thangsinh">
            <option>-- Thang sinh --</option>
            <?php for($i=1; $i<=12;$i++): ?>
                    <option value="<?php echo $i;?>"><?php echo $i;  ?></option>
            <?php endfor; ?>
        </select>

        <select name="namsinh">
            <option>-- Nam Sinh --</option>
            <?php for($i=1990; $i<=Date('Y');$i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i;  ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit" name="dangnhap">Dang nhap</button>
        <button name="giang" type="submit">Dang nhap 2</button>
</form>
    <br>Ten dang nhap: <?php if(isset($user)){ echo $user; }else{ echo "NUll"; }?>

    <br>Mat khau: <?php if(isset($pass)){ echo $pass; }else{ echo "NUll"; }?>

    <br>Ngay sinh: <?php if(isset($ngay)){ echo $ngay; }else{ echo "NUll"; }?>

    <br>Thang sinh: <?php if(isset($thang)){ echo $thang; }else{ echo "NUll"; }?>
    
    <br>Nam sinh: <?php if(isset($nam)){ echo $nam; }else{ echo "NUll"; }?>

</body>
</html>