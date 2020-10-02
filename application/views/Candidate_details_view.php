<div class="content-wrapper">
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <p class=has-text-Info style="margin-top: 10px;margin-left:10px;">
        <a href="#" class="title sidebar-toggle is-4  has-text-info" data-toggle="push-menu" role="button">
        <i class="fas fa-bars"></i>
        </a>Candidate Details    
      </p> 
       
      </h1>
    </section>
<section class="content">
	<main role="main" class="container" style="margin-bottom: 60px;">
	    <div class="container">            
	        <div class="columns">
	            
	            	<!-- print the data in left side container -->
	            	<div class="column is-one-fifth " style="padding:50px 30px;float: left;">
                    
						<div id="spec-brief">
							<img src="<?php echo base_url();?>images/phones/<?php echo $row->photo; ?>" id="phone-display">
							<div><br>
	            				<ul class="list-group">
	            					
						  			<li class="list-group-item">
                                        <p class="control">
                                            <a href="<?php echo base_url(); ?>fetch/compare_phones/<?php echo $row->user_id; ?>" class="button is-primary">
                                            Download Resume
                                            </a>
                                        </p>
						  			
						  		</ul>
							</div>
						</div>
	            	</div>
	            	<!-- print the data in right side container -->
	            	<div class="column " style="padding-top:50px; padding-right:150px;">
	            		<!-- print the main features -->
	            		<h3 class=roboto style="font-size: 1.8rem !important;line-height: 40px !important;color:#052429;font-weight: 100;"id="phone-name"><strong class=has-text-primary><?php echo strtoupper($row->first_name);?></strong>&nbsp;<?php echo strtoupper($row->last_name);?></h3>
	            		
						<!-- print the other features using a table -->
	            		
                        <table class="table is-fullwidth is-striped">   
                            <tbody>
                                <tr>
                                    
                                    <th>Work History</th>
                                    <td><?php echo strtoupper($row->worked_with)?></td>
                                </tr>
                                <tr>
                                    
                                    <th>Currently working With</th>
                                    <td><?php echo $row->currently_working_with; ?></td>
                                </tr>
                                <tr>
                                    
                                    <td>Email</td>
                                    <td><?php echo $row->email; ?></td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td><?php echo $row->gender; ?></td>
                                </tr>
                                <tr>
                                    <th rowspan="">Date of Registartion</th>
                                    
                                    <td><?php echo $row->created_on; ?></td>
                                </tr>
                                <tr>
                                    <td>Experiance</td>
                                    <td><?php echo $row->work_exp; ?></td>
                                </tr>
                                <tr>
                                    <td>Interesterd Field</td>
                                    <td><?php echo $row->field_of_interest; ?></td>
                                </tr>
                                <tr>
                                    <th rowspan="">Skills</th>
                                    
                                    <td><?php echo $row->skill; ?></td>
                                </tr>
                            </tbody>
	            			
	            		</table>
	            	</div>
	            
	        </div>
	    </div>
	</main>
</div>
</div>
  </div>
        <div class="hero-body">
            
        </div>
    </section>

</body>