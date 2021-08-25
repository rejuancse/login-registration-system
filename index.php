<?php 
include('lib/User.php'); 
include('layouts/header.php'); 
Session::checkSession();

$user = new User();
$userdata = $user->getUserData();
$loginmsg = Session::get("loginmsg");

?>

<!-- UserList -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(isset($loginmsg)) {
                        echo $loginmsg;
                    }
                    Session::set("loginmsg", NULL);
                ?>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h2>User list 
                            <span class="pull-right"><strong>Welcome! </strong>
                            <?php 
                                $name = Session::get("name");
                                if(isset($name)) {
                                    echo $name;
                                }
                            ?>
                            </span>
                        </h2>
                    </div>

                    <!-- Table -->
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email Addrress</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($userdata) { $i = 0; ?>
                                    <?php foreach($userdata as $data) { $i++; ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="profile.php?id=<?php echo $data['id']; ?>">View</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
