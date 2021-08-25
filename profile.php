<?php 
include('lib/User.php'); 
include('layouts/header.php');
Session::checkSession();

if(isset($_GET['id'])) {
    $userid = (int)$_GET['id'];
}
$user = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $updateusr = $user->updateUserProfile($userid, $_POST);
}
?>

<!-- UserList -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h2>User Profile <span class="pull-right"><a href="index.php" class="btn btn-success">Back</a></h2>
                    </div>

                    <div class="panel-body">
                        <div style="width: 520px; margin: 0 auto">
                            <?php 
                                if($updateusr) {
                                    echo $updateusr;
                                } 
                            ?>
                            <?php $userdata = $user->getUserByID($userid); ?>
                            <?php if($userdata) { ?>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $userdata->name; ?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="username">username</label>
                                        <input type="text" id="username" name="username" class="form-control" value="<?php echo $userdata->username; ?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $userdata->email; ?>"/>
                                    </div>

                                    <?php 
                                    $sessID = Session::get("id");
                                    if($userid == $sessID) { ?>
                                        <div class="pt-1 mb-5 pb-1">
                                            <button class="btn btn-success" type="submit" name="update">Update</button>
                                            <a class="btn btn-info" href="changepass.php?id=<?php echo $userid; ?>">Update Password</a>
                                        </div>
                                    <?php } ?>
                                </form>
                            <?php } ?>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
