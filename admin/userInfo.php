<?php include('include/header.php'); ?>

  <div class="container">
    <!-- Users DataTable -->
    <div class="card mb-3" style="margin-top:30px">
      <div class="card-header">
        <div class="row">
          <div class="col-md-9 font-weight-bold"><i class="fas fa-users"></i> User List</div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Age</th>
                      <th>Current Address</th>
                      <th>Permanent Address</th>
                      <th>Status of Vaccination</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                <tbody>
                <?php
                  $con = mysqli_connect("localhost","root","","fcts") or die(mysql_error());
                  $sql="select * from answer";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re)){
                      $id = $row['id'];
										if($id % 2 ==1 ){
											echo"
                      <tr class='gradeC'>
												<td>".$row['fullname']."</td>
												<td>".$row['age']."</td>
												<td>".$row['localAddress']."</td>
												<td>".$row['country']."</td>
												<td>".$row['statOfVacc']."</td>
												<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
											</tr>";
											}
										else {
											echo"
                        <tr class='gradeU'>
                          <td>".$row['fullname']."</td>
                          <td>".$row['age']."</td>
                          <td>".$row['localAddress']."</td>
                          <td>".$row['country']."</td>
                          <td>".$row['statOfVacc']."</td>
                          <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                        </tr>";
										}
										}
								?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br /><br/><br /><br/>
<?php include('include/footer.php'); ?>
