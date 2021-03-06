<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

$userid=Format::input($_POST['userid']);
?>
<div class="title-block">
    <h3 class="title"><?php echo __('Forgot My Password'); ?></h3>
    <p class="title-description"><?php echo __(
    'Enter your username or email address again in the form below and press the <strong>Login</strong> to access your account and reset your password.');
    ?></p>
</div>
<form action="pwreset.php" method="post" id="clientLogin" role="form">
    <?php csrf_token(); ?>
    <input type="hidden" name="do" value="reset"/>
    <input type="hidden" name="token" value="<?php echo Format::htmlchars($_REQUEST['token']); ?>"/>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="title-block">
                            <h3 class="title"><strong><?php echo Format::htmlchars($banner); ?></strong></h3>
                        </div>
                        <div class="form-group">
                            <label for="username"><?php echo __('Username'); ?>:</label>
                            <input class="form-control" id="username" type="text" name="userid" size="30" value="<?php echo $userid; ?>">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Login">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
