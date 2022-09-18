<?php include('include/header.php'); ?>
<html>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-6" style="padding-left:5px;">Hello!
        <p class="lead text-primary ont-weight-bold"><?php echo $_SESSION['fullname']; ?></p>
      </h1><hr class="my-4">
        <p style="text-align: justify;">Instructions: Please answer the following questions honestly and provide the needed requirements for you to be fully register
        in our database. The information you will provide will be used to trace person who has been exposed to COVID-19, your
        participation in this project is crucial to help minimize the spread of the virus. Rest Assured that all personal information
        will be kept strictly confidential. Please fill-out all fields, thank you.</p>
          <div class=col>
            <form name="form" method="post">

              <div class="form-group">
                <label> 1. How old are you?
                  <input type="number" name="age" class="form-control" min="10" max="100" required>
                </label>
              </div>

              <div class="form-group">
                <label> 2. Where country were you from?
                  <input type="text" name="country" class="form-control" required>
                </label>
              </div>

              <div class="form-group">
                <label> 3. Where are you currently residing in Nabua?
                  <select class="form-control" id="address" name="localAddress" required>
                    <option value selected></option>
                    <option>Angustia</option>
                    <option>Antipolo Old</option>
                    <option>Antipolo Young</option>
                    <option>Bustrac</option>
                    <option>Inapatan</option>
                    <option>Dolorosa</option>
                    <option>Duran</option>
                    <option>La Purisima</option>
                    <option>La Opinion</option>
                    <option>Paloyon Oriental</option>
                    <option>Paloyon Proper</option>
                    <option>Salvacion</option>
                    <option>San Antonio Poblacion</option>
                    <option>San Antonio Ogbon</option>
                    <option>San Esteban</option>
                    <option>San Isidro</option>
                    <option>Malawag</option>
                    <option>San Jose</option>
                    <option>San Juan</option>
                    <option>San Miguel</option>
                    <option>San Nicolas</option>
                    <option>Sta. Cruz</option>
                    <option>Santiago Old</option>
                    <option>Sto. Domingo</option>
                    <option>Tandaay</option>
                  </select>
                </label>
               </div>

              <div class="form-group">
                <label>4. Status of Vaccination</label>
                <div class="radio">
                  <label><input type="radio" name="statOfVacc" value="Fully Vaccinated" required> Fully Vaccinated</label><br />
                  <label><input type="radio" name="statOfVacc" value="First Dose" required> First Dose</label><br />
                  <label><input type="radio" name="statOfVacc" value="Unvaccinated" required> Unvaccinated</label>
                </div>
                <label>If vaccinated, what brand of vaccine?<br /> (if not, just kindly select 'N/A')
                <select class="form-control" name="vaccBrand" required>
                  <option>Sinovac</option>
                  <option>Pfizer</option>
                  <option>Astrazeneca</option>
                  <option>Janssen</option>
                  <option>Moderna</option>
                  <option>Sputnik</option>
                  <option>Sinopharm</option>
                  <option>N/A</option>
                </select></label>
              </div>

              <div class="form-group">
                <label>5. Are you currently experiencing or have you previously
                experienced any of the following symptoms? Like<strong> loss of Taste, loss of smell, shortness of breath,
                cough and fever?</strong>*</label>
                <div class="radio">
                  <label><input type="radio"  name="symp" value="Yes" required> Yes</label><br />
                  <label><input type="radio"  name="symp" value="No" required> No</label><br />
                </div>
                <label>If yes, what of the ffg. symptoms mentioned above, have you experienced?(if not, just kindly put 'N/A')</label>
                <input type="text" name="symptoms" required>
              </div>

              <div class="form-group">
                <label>6. When did you start experiencing these symptoms?</label>
                <div class="radio">
                  <label><input type="radio" name="dateSymptoms" value="Today"> Today</label><br />
                  <label><input type="radio" name="dateSymptoms" value="Less than a week ago"> Less than week ago</label><br />
                  <label><input type="radio" name="dateSymptoms" value="1-2 weeks ago"> 1-2 weeks ago</label><br />
                  <label><input type="radio" name="dateSymptoms" value="2-3 weeks ago"> 2-3 weeks</label><br />
                  <label><input type="radio" name="dateSymptoms" value="3+ weeks ago"> 3+ weeks ago</label><br />
                  <label><input type="radio" name="dateSymptoms" value="Didnt experienced any symptoms"> Didn't experienced any symptoms</label>
                </div>
              </div>

              <div class="form-group">
                <label>7. Do you have any chronic medical conditions? If yes please <br /> provide the medical condition you have<br />
                  If not, just kindly input 'N/A'
                <input type="text" class="form-control" name="medCondition">
                </label>
              </div>

              <div class="form-group">
                <label>8. Travel History within this past 2 weeks (eiher foreign or local) <br />(if no travel history w/in past 2 weeks, kindly put 'N/A')
                  <input type="text" name="travelHistory" class="form-control" required>
                </label>
              </div>

              <div class="form-group">
                <label>9. When was your last travel?(either foreign or local)
                  <input type="date" name="dateOfTravel" class="form-control" required>
                </label>
              </div>

              <div class="form-group">
                <label>10. Have you been in close contact with someone who has been exposed?</label>
                  <div class="radio">
                    <label><input type="radio" name="exposed" value="Yes" required> Yes</label><br />
                    <label><input type="radio" name="exposed" value="No" required> No</label><br />
                  </div>
                  <label>If yes, whom you with?(If none, just kindly put 'N/A')</label>
                  <div class="row">
                    <div class="table-responsive-sm">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Relationship</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><textarea type="text" class="form-control" name="exposedName" placeholder="Name1, Name2, Name3 ..." required></textarea></td>
                        <td><textarea type="text" class="form-control" name="exposedrel" placeholder="Relation to Name1, Relation to Name2, Relation to Name3 ..."required></textarea></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                  </div>
                  </div>

              <div class="form-group">
                <label>11. How do you travel locally in Nabua Camarines Sur? Check all that apply:</label>
                <div class="radio">
                  <label><input type="radio" value="Personal Bicycle"> Personal Bicycle</label><br />
                  <label><input type="radio" value="Private Vehicle"> Private Vehicle</label><br />
                  <label><input type="radio" value="Tricycle"> Tricycle</label><br />
                  <label><input type="radio" value="Car"> Car</label><br />
                  <label><input type="radio" value="Jeep"> Jeep</label>
                </div>
                <label>If others, please specify</label>
                <input type="text" name="vehicle" id="">
              </div><br /><br />

                 <div class="row">
                  <h6><strong>HUMAN VERIFICATION: </strong></h6>
                </div>
                <div class="row">
                    <p>  Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p>
                </div>
                <div class="row">
						        <p>Enter the random code
                      <input type="text" class="form-control" name="code1" title="random code" required/>
                      <input type="hidden" name="code" value="<?php echo $Random_code; ?>" required/>
                    </p>
                </div><br />
                  <div class="row">
                    <div class="col-md-2">
                      <button type="reset" class="btn btn-success btn-block border border-dark">Reset</button>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" name="submit" class="btn btn-success btn-block border border-dark">Submit</button>
                    </div>
                  </div>
    <?php
        if(isset($_POST['submit'])){
          $code1=$_POST['code1'];
          $code=$_POST['code'];
          if($code1!="$code")
          {
          $msg="Invalide code";
          }
        $conn = mysqli_connect("localhost", "root", "", "fcts");
        if($conn === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          $sql = "INSERT INTO answer
          VALUES ('', '$_POST[age]',
                      '$_SESSION[fullname]',
                      '$_SESSION[email]',
                      '$_POST[country]',
                      '$_POST[localAddress]',
                      '$_POST[statOfVacc]',
                      '$_POST[vaccBrand]',
                      '$_POST[symp]',
                      '$_POST[symptoms]',
                      '$_POST[dateSymptoms]',
                      '$_POST[medCondition]',
                      '$_POST[travelHistory]',
                      '$_POST[dateOfTravel]',
                      '$_POST[exposed]',
                      '$_POST[exposedName]',
                      '$_POST[exposedrel]')";

        if(mysqli_query($conn, $sql)){
            echo "<script type='text/javascript'> alert('Successfully Submitted!')</script>";
        }
        else{
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn); }
    ?>
      </form>
      </div>
    </div>
  </div>
</body><br /><br /><br />
<?php include('include/footer.php'); ?>
</html>
