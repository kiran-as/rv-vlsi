<div role="tabpanel" class="tab-pane active" id="faq8">
            <ul class="list-group">
                <?php for($i=0;$i<count($embeddedCorporate);$i++){?>

                <li class="list-group-item">
                    <div class="row clearfix">
                        <div class="col-sm-5">
                           <div class="p-hover">
                  <a href="#" data-toggle="modal" data-target="<?php echo '#'.$embeddedCorporate[$i]['idprograms'];?>"><?php echo $embeddedCorporate[$i]['Title'];?></a>
                            <div class="p-block">
                                <p class="mar-b5">No of Students Placed : <span class="primary-color">50</span></p>
                                <p class="mar-b5">Companies Visits : <span class="primary-color">HCL, Wipro, etc...</span></p>
                                <p class="mar-b0">No of  Vacant Positions : <span class="primary-color">Value Goes Here</span></p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 mar-b0 xs-mar-t10">
                            <select name="program" id="program" class="form-control" >
              <?php for ($k = 0; $k < count($arrprogramdetails); $k++)
                {
                    if ($arrprogramdetails[$k]['idprograms'] == $embeddedCorporate[$i]['idprograms'])
                      { ?>
                <option value="<?php echo $arrprogramdetails[$k]['idprogramcalendar']; ?>">
                  <?php echo $arrprogramdetails[$k]['startmonth']; ?>       
                 </option>         
            <?php }
          } ?> 
                   
        </select>
              </div>
              <div class="col-sm-2 xs-mar-t10">
                  <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $embeddedCorporate[$i]['idprograms'];?>)">JOIN NOW</a>                
              </div>
                    </div>
                </li>
                <?php }?>
                                            
                </ul>                                              
        </div>