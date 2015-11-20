<?php
    $this->load->view('template/header');
    print_r($data);
    print_r($budget);
?>

<div ng-controller="HouseDamageCtrl">
<form ng-submit="AddHouseDamage(data)" method="post" role="form" name="newHouseForm" novalidate>
            <div class="row form-row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 text">
                            <h2>House Damage</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 label text-right"> Name of Owner:</div>
                <div class="col-lg-3 "> 
                <input type="text" class="form-control" value="<?php echo $data['name'];?>" name="name" id="" placeholder="Name" ng-model="data.name" required>
                </div>
                </div>
                      

                     <div class="row">
                      <div class="col-lg-2 text-right label">Father Name:</div>
                <div class="col-lg-3 "> 
                   <input type="text" class="form-control" name="fathername" value="<?php echo $data['father_name'];?>"id="" placeholder="Father Name" ng-model="data.fathername">
                
                </div>
                </div>
                <div class="row">
                      <div class="col-lg-2 text-right label">Date of Incident:</div>
                <div class="col-lg-3 "> 
                <p><input type="date" class="form-control" name="incidentdate" value="<?php echo $data['date_of_incident'];?>" ng-model="data.incidentdate"></p>
                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Cnic Number:</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="cnic" id="" value="<?php echo $data['cnic'];?>" placeholder="CNIC Number" ng-model="data.cnicnumber">
                </div>
                </div>
                
                <div class="row">
                <div class="col-lg-2 text-right label">District</div>
                <div class="col-lg-3 "> 
                       <input type="text" class="form-control" name="district" id="" placeholder="District" ng-model="data.district" required value="<?php echo $data['district'];?>">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label"> Address:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="address" id="" value="<?php echo $data['address'];?>"placeholder="Address" ng-model="data.address">
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Reason For Damage:</div>
                <div class="col-lg-3 ">
                       <input type="text" class="form-control" name="reason" id="" value="<?php echo $data['reason'];?>" placeholder="Reason" ng-model="data.reason">
                       </div>
                       </div>
                <div class="row">
                    <div class="col-sm-2 text-right label">Budget</div>
                    <div class="col-sm-3">
                        <select name="budget" required="required">
                        <?php 
                        foreach ($budget as $b) {
                        ?>
                            <option
                            <?php 
                            if($data['b_id']==$b->b_id)
                                echo 'selected';
                            ?>
                            ><?php echo $b->b_amount;?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">House Damage:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="housedamage" value="full" 
                <?php
                if($data['damage_type'] == "full")
                echo 'checked';
                ?>
                > Fully Damage
                 <input type="radio" name="housedamage" value="partial" 
                 <?php
                if($data['damage_type'] == "partial")
                echo 'checked';
                ?>
                > Partially Damage

                
                </div>
                </div>

                    <div class="row">
                      <div class="col-lg-2 text-right label">Halqa patwari:</div>
                     <div class="col-lg-3 "> 
                  <input type="radio" name="halqapatwari" value="yes"
                  <?php
                if($data['patwari'] == "yes")
                echo 'checked';
                ?>
                  >Yes
                 <input type="radio" name="halqapatwari" value="no" 
                 <?php
                if($data['patwari'] == "no")
                echo 'checked';
                ?>
                  >No

                
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Rep of MPA:</div>
                <div class="col-lg-3 "> 
                 <input type="radio" name="repofmpa" value="yes" 
                 <?php
                if($data['rep_mpa'] == "yes")
                echo 'checked';
                ?>
                 > Yes
                 <input type="radio" name="repofmpa" value="no" 
                 <?php
                if($data['rep_mpa'] == "no")
                echo 'checked';
                ?>
                 > No

                </div>
                </div>

                 <div class="row">
                      <div class="col-lg-2 text-right label">Tehsildar:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="tehsildar" value="yes" 
                <?php
                if($data['tehsildar'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="tehsildar" value="no" 
                <?php
                if($data['tehsildar'] == "no")
                echo 'checked';
                ?>
                 > No
   
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local School Headmaster:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="localschoolheadmaster" value="yes" 
                <?php
                if($data['headmaster'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="localschoolheadmaster" value="no" 
                 <?php
                if($data['headmaster'] == "no")
                echo 'checked';
                ?>
                 > No

                      
                </div>
                </div>

                <div class="row">
                <div class="col-lg-2 text-right label">Local Imam Masjid:</div>
                <div class="col-lg-3 "> 
                <input type="radio" name="localimammasjid" value="yes" 
                <?php
                if($data['headmaster'] == "yes")
                echo 'checked';
                ?>
                > Yes
                 <input type="radio" name="localimammasjid" value="no" 
                 <?php
                if($data['headmaster'] == "no")
                echo 'checked';
                ?>
                 > No

                      
                </div>
                </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-4">
            <button type="submit" class="btn btn-success" ng-disabled="newHouseForm.$invalid">Add to list</button>
                    </div>
                </div>
        </form>
        </div>
        <script>
          $( ".datepicker" ).datepicker();
        </script>
<?php
$this->load->view('template/footer');

?>