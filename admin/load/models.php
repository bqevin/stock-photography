<?php
include_once('../core/init.php');
$user = DB::getInstance()->query("SELECT * FROM users");
// if (Session::exists('success')) {
//     echo "<p>";
//     echo Session::flash('success');
//     echo "</p>";
// }
$user = new User;
?>  
                <div class="row">
                    <div class="col-md-12">
                     <h2>Registered Models</h2>   
                        <h5>Welcome <?php echo $user->data()->name; ?> , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Registered Ivertise Africa Model(s) : <?php echo DB::getInstance()->query("SELECT * FROM users WHERE model='model'")->count(); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Username</th>
                                             <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $index = 1;
                                    $users = DB::getInstance()->query("SELECT * FROM users WHERE model='model'");
                                    if (!$users->count()) {
                                    echo "No User(s)!";
                                    }else{
                                        //echo $users->first()->username;
                                        foreach ($users->results() as $users) {
                                            echo'<tr> <td>',$index++,'</td><td>',$users->name,'</td><td>',$users->username,'</td><td>'
                                            ,$users->email,'</td></tr>';
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

        </div>