<?php 
include('layouts/header.php'); 
include('lib/User.php'); 
$user = new User();
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
                                <tr>
                                    <th scope="row">001</th>
                                    <td>Mark Lee</td>
                                    <td>Otto</td>
                                    <td>mark@mdo.com</td>
                                    <td>
                                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>
                                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>
                                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
