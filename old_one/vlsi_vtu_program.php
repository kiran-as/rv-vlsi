
<div role="tabpanel" class="tab-pane" id="faq3">
  
  <form action='' method='POST' id="homepagetopform"> 
<div class="col-sm-12">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Interested Domain: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="domain" id="domain" value="vlsi" onclick='fnInterestedDomain(this.value);'> VLSI 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="domain" id="domain" value="embedded" onclick='fnInterestedDomain(this.value);'> Embedded 
                    </label>               
                </div>
            </div> 
            <div id='vlsisubdomainDiv' style='display:none'>
<div class="col-sm-12">
                <div class="form-group">
                                <label for="inputEmail3" class="control-label">VLSI Sub Domain: </label>    

                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="(VLSI) linux and scripting"> (VLSI) linux and scripting 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="RTL verification using system verilog/UBM"> RTL verification using system verilog/UBM 
                    </label>   
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="FUll custom layout for deep sub micron nodes">FUll custom layout for deep sub micron nodes 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="ASIC physical design"> RASIC physical design
                    </label>              
                </div>
            </div>     
</div>
<div id='embeddedsubdomainDiv' style='display:none'>
<div class="col-sm-12">
                <div class="form-group"> 
                <label for="inputEmail3" class="control-label">EMBEDDED Sub Domain: </label>    

                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="overview of embedded system design flow"> overview of embedded system design flow
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="device driver development"> device driver development 
                    </label>   
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="RTOS basics">RTOS basics 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="firmware development"> firmware development
                    </label>      
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="BSP">BSP
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="vlsi" id="vlsi" value="Network stack"> Network stack
                    </label>         
                </div>
            </div>  
            </div> 
<div class="col-sm-12">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Target Audience: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="domain" id="domain" value="New college graduates" onclick="fnTargetAudience(this.value);"> New college graduates 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="domain" id="domain" value="Exp" onclick="fnTargetAudience(this.value);"> Exp professionals

                    </label>              
                </div>
            </div>
            <div id='yearsDiv' style='display:none'>
  <div class="form-group">    
    <input type="text" class="form-control" placeholder="Years of Exp" id='years' name='years'>
  </div>
  </div>
  <div class="form-group">  
                  <label for="inputEmail3" class="control-label">Likely to join in </label>    

<select name="like.y_start_date" id="program" class="form-control" >
             
                <option value="within two weeks">Within two weeks</option>       
                 <option value="2 - 4 weeks">2 - 4 weeks</option>      
                  <option value="4 - 12 Weeks">4 - 12 Weeks</option>      
                   <option value="Next quarter">Next quarter</option>        
     
        </select>  </div>  
 <div class="form-group">  
                  <label for="inputEmail3" class="control-label">Likely to join in </label>    

<select name="like.y_start_date" id="program" class="form-control" >
                             <option value="less than one weeks">less than one weeks</option>       

                <option value="less than two weeks">less than two weeks</option>       
                <option value="less than month">less than month</option>       
     
        </select>  </div>  
  <button type="submit" class="btn btn-primary btn-block btn-lg">Contact</button>
</form>                                            
        </div>