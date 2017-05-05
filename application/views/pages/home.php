<head>
	<title>Logi</title>
</head>
<p>Welcome to Logi, an SES focused logistics resource planning system</p>

<div class="row">
                        <div class="col-md-12">
                            <div class="calendar"> 
								<div class="panel-title">
                                    <div class="caption"> 
                                        <span class="">&nbsp;</span>
                                    </div>
                                </div>							
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12"> 
										
											<i class="fa fa-arrows-alt fa-fw"></i><?php echo lang('categories_draggable_title'); ?> 
											
											<div class="overflow" id="helper">
												<div class="fc-view-container" id='external-events'></div> 
											</div>
											<p>
												<input type='checkbox' id='drop-remove' />
												<label for='drop-remove'><?php echo lang('categories_draggable_removable'); ?></label>
											</p>  
									
										
                                        </div>
                                        <div class="col-md-9 col-sm-12"> 
											<div id='loading' class="alert alert-info" style='display:none;'>
												<?php echo lang('calendar_loading_title'); ?> <br />
												<progress></progress>		
											</div> 					
											<div id="calendar" class="has-toolbar" ></div>	 
											<div class="pull-left"><i class="fa fa-globe fa-fw"></i><span id="timezone"></span></div>
											<div class="pull-right"><div class="hero hero-moment"><i class="fa fa-clock-o fa-fw"></i><span id="digiclock"></span><span id="ampm"></span></div></div> 
											
											<div class="form-group col-md-12 text-center"> 					
												<div class="col-md-12 popover-markup"> 
												<a href="#" class="trigger btn btn-default text-center" data-placement="top"><?php echo lang('calendars'); ?></a> 
													<div class="head hide text-center"> <?php echo lang('show_calendars_schedules'); ?> </div> 
													<div class="content hide">
													<h5><a id="filter_refresh" class="btn text-center"> <?php echo lang('show_all_calendars_schedules'); ?>  </a></h5>
													<hr> 
													<h5 ><?php echo lang('submenu_select_groups'); ?></h5>	 
													<?php if(!empty($currentGroups)): ?>  
													<div class="pull-overflow text-center"> 	
													<?php foreach($currentGroups as $group): ?>  
														<div class="form-group"> 
															<div class="input-group">  
																<input class="filter_groups" id="filter_groups" type="checkbox" name="filter_groups[]" value="<?php echo $group->id;?>" > 
																<?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
															</div> 
														</div>																		
													<?php endforeach?> 
													</div>																		
													<?php endif?> 		
													<hr> 
													<h5 ><?php echo lang('submenu_select_categories'); ?></h5>	
													<?php if(!empty($userCategories)): ?>  
													<div class="pull-overflow text-center"> 		
													<?php foreach($userCategories as $category): ?>  
														<div class="form-group"> 
															<div class="input-group">  
																<input class="filter_category" id="filter_category" type="checkbox" name="filter_category[]" value="<?php echo $category['category_id'];?>" > 
																<?php echo htmlspecialchars($category['category_name'],ENT_QUOTES,'UTF-8');?>
															</div> 
														</div>																		
													<?php endforeach?> 
													</div>																		
													<?php endif?> 		
													<hr> 
													<h5 ><?php echo lang('submenu_select_sources'); ?></h5>		 
													<?php if(!empty($userSources)): ?>  
													<div class="pull-overflow text-center"> 		
													<?php foreach($userSources as $source): ?>   
														<div class="form-group"> 
															<div class="input-group">  
																<input class="filter_sources" id="filter_sources" type="radio" name="filter_sources[]" value="<?php echo $source['source_url'];?>" > 
																<?php echo htmlspecialchars($source['source_name'],ENT_QUOTES,'UTF-8');?>
															</div> 
														</div>	
													<?php endforeach?> 
													</div>																		
													<?php endif?>  
													</div>
												</div>					 
											</div>												
                                        </div>
										<!-- /.col-md-12 .col-lg-12 -->	
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- /.col-md-12 -->
                    </div>
					<!-- /.row -->