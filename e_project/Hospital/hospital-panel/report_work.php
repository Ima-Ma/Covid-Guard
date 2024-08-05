<?php
include("connection.php");
include("header.php");
?>
<table class="table table-responsive-sm borderd-dark">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>CNIC</th>
                                            <th>Date Of Birth</th>
                                            <th>Location</th>
                                            <th>Post Code</th>
                                            <th>Vaccine</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        <tr>
                                           <?php
                                            $ID = $_GET["id"];
                                           $sql = "select * from report where id = $ID";
                                           $result = mysqli_query($conn , $sql);
                                           while($rows = mysqli_fetch_assoc($result)){
                                           ?>
                                            <td><?php echo $rows['id'] ?></td>
                                            <td><?php echo $rows['first_name'] ?></td>
                                            <td><?php echo $rows['email'] ?></td>
                                            <td><?php echo $rows['cnic_number'] ?></td>
                                            <td><?php echo $rows['dob'] ?></td>
                                            <td><?php echo $rows['location'] ?></td>
                                            <td><?php echo $rows['post_code'] ?></td>
                                            <td><?php echo $rows['vaccine'] ?></td>
                                            <td><?php echo $rows['status'] ?></td>
                                          </tr>
                                           <?php } ?>
                                    </tbody>
                                </table>


                                <?php

include("footer.php");
?>