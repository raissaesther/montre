<?php if( $style == '1' ): ?>

<section class="<?php echo esc_attr(wp_kses_post($class));?> pricing-section">
	<div class="auto-container">

		<div class="tabs-box">
			
			<div class="row clearfix">
				<div class="content-column pull-right col-md-4 col-sm-12 col-xs-12">
					<div class="inner-column">
						<div class="sec-title">
							<span class="title"><?php echo wp_kses_post($subtitle);?></span>
							<h2><?php echo wp_kses_post($ttitle);?></h2>
						</div>
						<ul class="tab-buttons btn-box">
							<li data-tab="#pricing-tab-1" class="tab-btn active-btn"><?php echo wp_kses_post($tab);?></li>
							<li data-tab="#pricing-tab-2" class="tab-btn"><?php echo wp_kses_post($tab1);?></li>
						</ul>
						<p><?php echo wp_kses_post($text);?></p>
					</div>
				</div>

				<div class="table-column col-md-8 col-sm-12 col-xs-12">
					<div class="inner-column tabs-content">
						<div class="tab active-tab" id="pricing-tab-1">
							<div class="row clearfix">
								<!-- Pricing Table -->
								
								<?php foreach( $atts['month'] as $key => $item ): ?>
								
								<div class="pricing-table col-md-6 col-sm-6 col-xs-12">
									<div class="inner-box ">
										<div class="table-header">
											<span><?php echo wp_kses_post($item->title); ?></span>
											<p><?php echo wp_kses_post($item->subtitle); ?></p>
											<h3 class="price"><sup><?php echo wp_kses_post($item->currency); ?></sup><?php echo wp_kses_post($item->amount); ?></h3>
										</div>
										<div class="table-content">
											<ul>
											
											<?php $fearures = explode("\n", ($item->feature_str));?>
											<?php foreach($fearures as $feature):?>
											
												<li><?php echo wp_kses_post($feature ); ?></li>
												
												<?php endforeach;?>
											</ul>
										</div>
										<div class="table-footer">
											<a href="<?php echo esc_url($item->page_link); ?>" class="theme-btn btn-style-two"><?php echo wp_kses_post($item->btn); ?></a>
										</div>
									</div>
								</div>
								
								<?php endforeach; ?>
							</div>
						</div>

						<div class="tab" id="pricing-tab-2">
							<div class="row clearfix">
								<!-- Pricing Table -->
								
								<?php foreach( $atts['year'] as $key => $item ): ?>
								
								<div class="pricing-table col-md-6 col-sm-6 col-xs-12">
									<div class="inner-box">
										<div class="table-header">
											<span><?php echo wp_kses_post($item->title); ?></span>
											<p><?php echo wp_kses_post($item->subtitle); ?></p>
											<h3 class="price"><sup><?php echo wp_kses_post($item->currency); ?></sup><?php echo wp_kses_post($item->amount); ?></h3>
										</div>
										<div class="table-content">
											<ul>
											
											<?php $fearures = explode("\n", ($item->feature_str));?>
											<?php foreach($fearures as $feature):?>
												<li><?php echo wp_kses_post($feature ); ?></li>
												<?php endforeach;?>
											</ul>
										</div>
										<div class="table-footer">
											<a href="<?php echo esc_url($item->page_link); ?>" class="theme-btn btn-style-two"><?php echo wp_kses_post($item->btn); ?></a>
										</div>
									</div>
								</div>
								
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php if( $style == '2' ): ?>

<section class="<?php echo esc_attr(wp_kses_post($class));?> pricing-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo wp_kses_post($subtitle);?></span>
                <h2><?php echo wp_kses_post($ttitle);?></h2>
            </div>

            <div class="tabs-box">
                <div class="tabs-content">
                    <div class="tab active-tab" id="pricing-tab-1">
                        <div class="row clearfix">
                            <!-- Pricing Table -->
                            
							<?php foreach( $atts['month'] as $key => $item ): ?>
							
							<div class="pricing-table <?php if($item->taged == false) echo 'taggedxx'; else echo 'tagged'; ?> col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="table-header">
                                        <span><?php echo wp_kses_post($item->title); ?></span>
                                        <p><?php echo wp_kses_post($item->subtitle); ?></p>
                                        <h3 class="price"><sup><?php echo wp_kses_post($item->currency); ?></sup><?php echo wp_kses_post($item->amount); ?></h3>
                                    </div>
                                    <div class="table-content">
                                        <ul>
                                            <?php $fearures = explode("\n", ($item->feature_str));?>
												<?php foreach($fearures as $feature):?>
                                                    <li><?php echo wp_kses_post($feature ); ?></li>
                                                    <?php endforeach;?>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <a href="<?php echo esc_url($item->page_link); ?>" class="theme-btn btn-style-two"><?php echo wp_kses_post($item->btn); ?></a>
                                    </div>
                                </div>
                            </div>
							
							<?php endforeach; ?>
                        </div>
                    </div>

                    <div class="tab" id="pricing-tab-2">
                        <div class="row clearfix">
                            
							<?php foreach( $atts['year'] as $key => $item ): ?>
							
							<!-- Pricing Table -->
                            <div class="pricing-table <?php if($item->taged == false) echo 'taggedxx'; else echo 'tagged'; ?> col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="table-header">
                                        <span><?php echo wp_kses_post($item->title); ?></span>
                                        <p><?php echo wp_kses_post($item->subtitle); ?></p>
                                        <h3 class="price"><sup><?php echo wp_kses_post($item->currency); ?></sup><?php echo wp_kses_post($item->amount); ?></h3>
                                    </div>
                                    <div class="table-content">
                                        <ul>
                                            <?php $fearures = explode("\n", ($item->feature_str));?>
												<?php foreach($fearures as $feature):?>
                                                    <li><?php echo wp_kses_post($feature ); ?></li>
                                                    <?php endforeach;?>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <a href="<?php echo esc_url($item->page_link); ?>" class="theme-btn btn-style-two"><?php echo wp_kses_post($item->btn); ?></a>
                                    </div>
                                </div>
                            </div>
							
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <ul class="tab-buttons btn-box">
                    <li data-tab="#pricing-tab-1" class="tab-btn active-btn"><?php echo wp_kses_post($tab);?></li>
                    <li data-tab="#pricing-tab-2" class="tab-btn"><?php echo wp_kses_post($tab1);?></li>
                </ul>

            </div>
        </div>
    </section>

<?php endif; ?>