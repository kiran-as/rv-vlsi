<div role="tabpanel" class="tab-pane" id="faq2">
            <ul class="list-group">
                <?php for($i=0;$i<count($vlsiPT);$i++){?>

                <li class="list-group-item">
                    <div class="row clearfix">
                        <div class="col-sm-5">
                           <div class="p-hover">
                  <a href="#" data-toggle="modal" data-target="<?php echo '#'.$vlsiPT[$i]['idprograms'];?>"><?php echo $vlsiPT[$i]['Title'];?></a>
                            <div class="p-block">
                                <p class="mar-b5">No of students per batch : <span class="primary-color"><?php echo $vlsiPT[$i]['no_of_students'];?></span></p>
                                <p class="mar-b5">Course Duration: <span class="primary-color"><?php echo $vlsiPT[$i]['course_duration'];?></span></p>
                                <p class="mar-b0">Placement statistics:  <span class="primary-color"><?php echo $vlsiPT[$i]['placement'];?></span></p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 mar-b0 xs-mar-t10">
                            <select name="program" id="program" class="form-control" >
              <?php for ($k = 0; $k < count($arrprogramdetails); $k++)
                {
                    if ($arrprogramdetails[$k]['idprograms'] == $vlsiPT[$i]['idprograms'])
                      { ?>
                <option value="<?php echo $arrprogramdetails[$k]['idprogramcalendar']; ?>">
                  <?php echo $arrprogramdetails[$k]['startmonth']; ?>       
                 </option>         
            <?php }
          } ?> 
                   
        </select>
              </div>
              <div class="col-sm-2 xs-mar-t10">
                  <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $vlsiPT[$i]['idprograms'];?>)">JOIN NOW</a>                
              </div>
                    </div>
                </li>
                <?php }?>
                                            
                </ul>                                              
        </div>