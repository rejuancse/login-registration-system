<?php include('layouts/header.php'); ?>

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
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-label" for="name">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="John Deo"/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="username">username</label>
                                    <input type="text" id="username" name="username" class="form-control" value="username"/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="email@gmail.com"/>
                                </div>

                                <div class="pt-1 mb-5 pb-1">
                                    <button class="btn btn-success" type="submit" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
