<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Halaman Login</title>
</head>
<body>
<div id="body">
    
    <div id="container">
    <b><?php echo validation_errors(); ?></b>
        <div id="data">
        <?php 
        $attributes = array('style' => 'width: 300px;');
        echo form_open('verify_login',$attributes); ?>

   
        <span style="font-weight: bold;">Username</span><br />
        <input type="text" id="username" name="username" style="width: 150px;text-align: center;"/><br />
<span style="font-weight: bold;">Password</span><br />
        <input type="password" id="password" name="password" style="width: 150px;text-align: center; "/><br />
        <input type="submit" name="login" value="Login" style="padding: 5px 0; width: 80px;margin-top: 10px;"/>
    </form>
        </div>
    </div>
</div>
</body>
</body>
</html>

