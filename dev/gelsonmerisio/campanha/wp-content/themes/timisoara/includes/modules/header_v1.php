<?php $options = _WSH()->option();
$meta = _WSH()->get_meta('_bunch_header_settings');
timisoara_bunch_global_variable(); ?>


    <!-- Main Header-->
    <header class="main-header header-style-two">

        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo">
						<?php if(timisoara_set($options, 'logo')): ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(timisoara_set($options, 'logo')); ?>" alt="<?php esc_attr_e('logo2', 'timisoara');?>" title="<?php esc_attr_e('Title', 'timisoara');?>"></a>
                        <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php esc_attr_e('Image', 'timisoara');?>"></a>
                        <?php endif; ?></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                 <?php 
	  $header = timisoara_set($meta, 'meta_menu_style'); 
	 
	  $header = (timisoara_set($_GET, 'meta_menu_style')) ? timisoara_set($_GET, 'meta_menu_style') : $header;
	  switch($header){
	  	case "2":
			get_template_part('includes/modules/bread/menu2');
			break;
		default:
			get_template_part('includes/modules/bread/menu1');
		}
?>	
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Right Info-->
                        <div class="info-options">
                        	<!--Info Block-->
                            <div class="info-block clearfix">
                                <?php if(timisoara_set($options, 'header_search_show')):?>
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="search-form">
                                                   <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form">
                                                        <div class="form-group">
                                                            
															<input type="search" name="s" placeholder="<?php echo esc_attr(timisoara_set($options, 'search_textx')); ?>">
                                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
								<?php endif ; ?>
                            </div>
                        </div>
                    </div>
                    <!--Nav Outer End-->
            	</div>    
            </div>
        </div>
    </header>
    <!--End Main Header -->