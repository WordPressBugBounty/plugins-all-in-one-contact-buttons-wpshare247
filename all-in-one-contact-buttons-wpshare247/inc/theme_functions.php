<?php
/**
 * @class   WS247_aio_ct_button_Theme
 */
 
if( !class_exists('WS247_aio_ct_button_Theme') ):
	class WS247_aio_ct_button_Theme{
		/**
		 * Constructor
		 */
		function __construct() {
			$this->init();
		}
		
		public function init(){
			add_action('wp_footer', array($this, 'wle_contact_icons_display'), 99999, 0);
		}
		
		function wle_contact_icons_display(){
			$shake_hotline = Ws247_aio_ct_button::class_get_option('shake_hotline');
			$hide_shake_hotline = Ws247_aio_ct_button::class_get_option('hide_shake_hotline');
			$shake_hotline_pos = Ws247_aio_ct_button::class_get_option('shake_hotline_pos'); 
			$icons_pos = Ws247_aio_ct_button::class_get_option('icons_pos'); 
			
			$company_zalo = Ws247_aio_ct_button::class_get_option('company_zalo'); 
			$stt_email = Ws247_aio_ct_button::class_get_option('stt_email'); 
			$stt_hotline = Ws247_aio_ct_button::class_get_option('stt_hotline'); 
			$icon_google_map = Ws247_aio_ct_button::class_get_option('icon_google_map'); 
			$icon_fb_messenger = Ws247_aio_ct_button::class_get_option('icon_fb_messenger'); 

			$company_tiktok = Ws247_aio_ct_button::class_get_option('company_tiktok'); 
			$text_company_tiktok = Ws247_aio_ct_button::class_get_option('text_company_tiktok'); 
			$hide_company_tiktok = Ws247_aio_ct_button::class_get_option('hide_company_tiktok'); 

			$company_instagram = Ws247_aio_ct_button::class_get_option('company_instagram'); 
			$text_company_instagram = Ws247_aio_ct_button::class_get_option('text_company_instagram'); 
			$hide_company_instagram = Ws247_aio_ct_button::class_get_option('hide_company_instagram');

			$company_telegram = Ws247_aio_ct_button::class_get_option('company_telegram'); 
			$text_company_telegram = Ws247_aio_ct_button::class_get_option('text_company_telegram'); 
			$hide_company_telegram = Ws247_aio_ct_button::class_get_option('hide_company_telegram'); 
			
			$text_fb_messenger = Ws247_aio_ct_button::class_get_option('text_fb_messenger');
			$text_company_zalo = Ws247_aio_ct_button::class_get_option('text_company_zalo'); 
			$text_stt_email = Ws247_aio_ct_button::class_get_option('text_stt_email'); 
			$text_stt_hotline = Ws247_aio_ct_button::class_get_option('text_stt_hotline'); 
			$text_icon_google_map = Ws247_aio_ct_button::class_get_option('text_icon_google_map');
			
			$hide_company_zalo = Ws247_aio_ct_button::class_get_option('hide_company_zalo'); 
			$hide_stt_email = Ws247_aio_ct_button::class_get_option('hide_stt_email'); 
			$hide_stt_hotline = Ws247_aio_ct_button::class_get_option('hide_stt_hotline'); 
			$hide_icon_google_map = Ws247_aio_ct_button::class_get_option('hide_icon_google_map'); 
			$hide_icon_fb_messenger = Ws247_aio_ct_button::class_get_option('hide_icon_fb_messenger'); 
			
			$primary_color = Ws247_aio_ct_button::class_get_option('primary_color');
			$hover_color = Ws247_aio_ct_button::class_get_option('hover_color'); 
			$text_color = Ws247_aio_ct_button::class_get_option('text_color');   
			$text_contact_color = Ws247_aio_ct_button::class_get_option('text_contact_color'); 
			
			$text_contact = Ws247_aio_ct_button::class_get_option('text_contact'); 
			if(!$text_contact){ $text_contact = __('Contact', WS247_AIO_CT_BUTTON_TEXTDOMAIN); } 
			
			$shake_hotline_bottom = (int)Ws247_aio_ct_button::class_get_option('shake_hotline_bottom');
			$icons_bottom = (int)Ws247_aio_ct_button::class_get_option('icons_bottom'); 
			
			$talkto_embed = Ws247_aio_ct_button::class_get_option('talkto_embed');
			
			
			$hide_icons = Ws247_aio_ct_button::class_get_option('hide_icons'); 

			$zalo_ring = Ws247_aio_ct_button::class_get_option('is_zalo_shake_hotline'); 

			$hide_text_icons = Ws247_aio_ct_button::class_get_option('hide_text_icons'); 
			$container_style = Ws247_aio_ct_button::class_get_option('container_style');
			$ft_color_1 = Ws247_aio_ct_button::class_get_option('ft_color_1');
			$ft_color_2 = Ws247_aio_ct_button::class_get_option('ft_color_2');
			$icons_verticle = Ws247_aio_ct_button::class_get_option('icons_verticle');

			$is_hide_first = Ws247_aio_ct_button::class_get_option('is_hide_first');

			$icon_text_on_left = Ws247_aio_ct_button::class_get_option('icon_text_on_left');

			if($shake_hotline && $hide_shake_hotline != 'on'){

				$shake_hotline_t = 'tel:'.esc_attr($shake_hotline);

				if($zalo_ring){
					$shake_hotline_t = esc_attr($shake_hotline);
					$shake_hotline = 'Zalo';
				}
			?>
				<style>
                	.phonering-alo-phone {
						<?php 
						if($shake_hotline_pos==2){
							echo 'right:110px;';
						}else{
							echo 'left:-50px;';
						}
						?>
					}
                </style>
				<div class="hotline <?php if($shake_hotline_pos==2){ echo 'hotline-on-right'; } ?>">
					<div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
                    	<span class="number"><a href="<?php echo $shake_hotline_t; ?>"><i class="fas fa-caret-left"></i><?php echo esc_attr($shake_hotline); ?></a></span>
						<div class="phonering-alo-ph-circle"></div>
						<div class="phonering-alo-ph-circle-fill"></div>
						<div class="phonering-alo-ph-img-circle <?php if($zalo_ring){ ?>zalo-ring<?php } ?>">
							<a class="pps-btn-img" href="<?php echo $shake_hotline_t; ?>"></a>
						</div>
					</div>
				</div>
			<?php
			}
			?>
            
            <style>
				<?php 
				if($primary_color):
				?>
				.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle, .phonering-alo-phone:hover .phonering-alo-ph-img-circle,
            	.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle, #phonering-alo-phoneIcon .number a,
				#phonering-alo-phoneIcon .number a, #ft-contact-icons .item span.ab {
					background-color: <?php echo esc_attr($primary_color); ?>;
				}
				.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle, .phonering-alo-phone:hover .phonering-alo-ph-circle,
				.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
					border-color: <?php echo esc_attr($primary_color); ?>;
				}
				#phonering-alo-phoneIcon .number i, #ft-contact-icons .item span.ab i{
					color: <?php echo esc_attr($primary_color); ?>;
				}
				<?php 
				endif;
				?>
				
				<?php 
				if($hover_color):
				?>
				#ft-contact-icons .item a:hover span.ab,.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle, .phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle, #phonering-alo-phoneIcon:hover .number a{
					background-color:<?php echo esc_attr($hover_color);?>;
				}
				.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle, 
				.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle, #phonering-alo-phoneIcon:hover .number a{
					border-color: <?php echo esc_attr($hover_color);?>;
				}
				#phonering-alo-phoneIcon:hover .number i, #ft-contact-icons .item a:hover span.ab i{
					color: <?php echo esc_attr($hover_color);?>;
				}
				<?php 
				endif;
				?>
				
				<?php 
				if($text_color):
				?>
					#ft-contact-icons li span.ab label, #ft-contact-icons .item span.ab label
, #phonering-alo-phoneIcon .number a{
						color:<?php echo esc_attr($text_color); ?> !important;
					}
				<?php 
				endif;
				?>
				
				<?php 
				if($shake_hotline_bottom):
				?>
					.phonering-alo-phone{
						bottom:<?php echo esc_attr($shake_hotline_bottom);?>px;
					}
				<?php 
				endif;
				?>
				
				<?php 
				if($icons_bottom):
				?>
					.show-all-icon, #ft-contact-icons{
						bottom:<?php echo esc_attr($icons_bottom); ?>px;
					}
				<?php 
				endif;
				?>
				
				<?php 
				if($text_contact_color):
				?>
					.show-all-icon, .show-all-icon i{
						color:<?php echo esc_attr($text_contact_color); ?>;
					}
				<?php 
				endif;
				?>
				
            </style>
            
            <script>
            	document.addEventListener("DOMContentLoaded", (event) => {
            		//---------
            		document.getElementById("ws247-aio-ct-button-show-all-icon").addEventListener("click", function(e){ 
            			var eicons = document.getElementById("ft-contact-icons");

						if (eicons.classList.contains('active')) {
						    document.getElementById("ft-contact-icons").classList.remove('active');
							document.getElementById("ws247-aio-ct-button-show-all-icon").classList.remove('hide-me');
						}else{
							document.getElementById("ft-contact-icons").classList.add('active');
							document.getElementById("ws247-aio-ct-button-show-all-icon").classList.add('hide-me');
						}
						return;
					});


            		//---------
					document.getElementById("js-hide-all-icon-e").addEventListener("click", function(){ 
						document.getElementById("ws247-aio-ct-button-show-all-icon").click();
						return;
					});
				});
            </script>
			<div id="ws247-aio-ct-button-show-all-container" class="<?php if($icons_verticle) echo 'aio-fixed-bt-mb'; ?>">
			<?php 
			if($hide_icons != 'on'){
				if(!$is_hide_first){
					$hide_def = 'hide-me';
					$active_def = 'active';
				}

				if($container_style) { 
					
					if($container_style=='ft-pn-sn' && $ft_color_1 && $ft_color_2){
						?>
						<style type="text/css">
							#ft-contact-icons-out-m.ft-pn-sn{
							    background-image: linear-gradient(120deg, <?php echo $ft_color_1; ?> 0%, <?php echo $ft_color_2; ?> 100%);
							}
						</style>
						<?php
					}

					$container_style .= ' aio-has-border'; 
				}
			?>
            <a id="ws247-aio-ct-button-show-all-icon" href="#" class="<?php echo $hide_def;?> js-show-all-icon show-all-icon <?php if($icons_pos!=2) echo 'contact-icons-right'; ?>"><span><?php echo esc_attr($text_contact);?></span><i class="fas fa-long-arrow-alt-up"></i></a>
			<div id="ft-contact-icons" class="<?php echo $active_def;?> <?php if($icons_pos!=2) echo 'contact-icons-right'; ?>">
				<div id="ft-contact-icons-out-m" class="<?php echo $container_style; ?> all-ft-animation <?php if($icon_text_on_left) echo 'ft-icon-left'; ?>">
            	<?php 
				if($company_zalo && $hide_company_zalo != 'on'){
					$zalo_link = 'https://zalo.me/'.esc_attr($company_zalo);
					if(strpos($company_zalo, "http") !== false){
						$zalo_link = $company_zalo;
					}
				?>
				<div class="ws247-icon-zalo item">
					<a target="_blank" href="<?php echo esc_attr($zalo_link); ?>">
                    	<span class="icon"></span>
                        <?php 
						if($text_company_zalo && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_company_zalo); ?></label></span>
                        <?php 
						}
						?>
                    </a>
                    
				</div>
				<?php 
				}
				?>
                
				<?php 
				if($icon_fb_messenger && $hide_icon_fb_messenger != 'on'){
				?>
				<div class="ws247-icon-messenger item">
					<a target="_blank" href="<?php echo esc_attr($icon_fb_messenger); ?>">
                    	<span class="icon"></span>
                        <?php 
						if($text_fb_messenger && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_fb_messenger); ?></label></span>
                        <?php 
						}
						?>
                    </a>
                    
				</div>
				<?php 
				}
				?>
                
                <?php 
				if($stt_hotline && $hide_stt_hotline != 'on'):
				?>
				<div class="ws247-icon-phone item">
					<a href="tel:<?php echo esc_html($stt_hotline);?>" target="_blank">
                    	<span class="icon"><i class="fas fa-phone" aria-hidden="true"></i></span>
                        <?php 
						if($text_stt_hotline && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_stt_hotline); ?></label></span>
                        <?php 
						}
						?>
                    </a>
                   	
				</div>
				<?php 
				endif;
				?>
				
				
				
				<?php 
				if($stt_email && $hide_stt_email != 'on'):
				?>
				<div class="ws247-icon-envelope item">
					<a href="mailto:<?php echo esc_html($stt_email);?>" target="_blank">
                    	<span class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                        <?php 
						if($text_stt_email && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_stt_email); ?></label></span>
                        <?php 
						}
						?>
                    </a>
                    
				</div>
				<?php 
				endif;
				?>
				
				
				
				
				<?php 
				if($icon_google_map && $hide_icon_google_map != 'on'):
				?>
				<div class="ws247-icon-map item">
					<a href="https://maps.google.com/maps?q=<?php echo esc_html($icon_google_map);?>&hl=vi&ie=UTF8" target="_blank">
                    	<span class="icon"><i class="fas fa-map-marker" aria-hidden="true"></i></span>
                        <?php 
						if($text_icon_google_map && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_icon_google_map); ?></label></span>
                        <?php 
						}
						?>
                    </a>
					
                </div>
				<?php 
				endif;
				?>

				<?php 
				if($company_tiktok && $hide_company_tiktok != 'on'):
				?>
				<div class="wp247-icon-tiktok item">
					<a href="mailto:<?php echo esc_html($company_tiktok);?>" target="_blank">
                    	<span class="icon"><i class="fa-brands fa-tiktok"></i></span>
                        <?php 
						if($text_company_tiktok && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_company_tiktok); ?></label></span>
                        <?php 
						}
						?>
                    </a>
				</div>
				<?php 
				endif;
				?>
				
				<?php 
				if($company_instagram && $hide_company_instagram != 'on'):
				?>
				<div class="wp247-icon-instagram item">
					<a href="mailto:<?php echo esc_html($company_instagram);?>" target="_blank">
                    	<span class="icon"><i class="fa-brands fa-instagram"></i></span>
                        <?php 
						if($text_company_instagram && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_company_instagram); ?></label></span>
                        <?php 
						}
						?>
                    </a>
				</div>
				<?php 
				endif;
				?>

				<?php 
				if($company_telegram && $hide_company_telegram != 'on'):
				?>
				<div class="wp247-icon-telegram item">
					<a href="mailto:<?php echo esc_html($company_telegram);?>" target="_blank">
                    	<span class="icon"><i class="fa-brands fa-telegram"></i></span>
                        <?php 
						if($text_company_telegram && $hide_text_icons !='on'){
						?>
                        <span class="ab"><i class="fas fa-caret-left"></i> <label><?php echo esc_attr($text_company_telegram); ?></label></span>
                        <?php 
						}
						?>
                    </a>
				</div>
				<?php 
				endif;
				?>

				</div>
                
                <div class="item"><a href="#" id="js-hide-all-icon-e" class="js-hide-all-icon"><span class="icon"><i class="fas fa-times"></i></span></a></div>
				
			</div>
            
            <?php 
			if($talkto_embed){
				echo $talkto_embed;
			}
			?>
            </div>

			<?php
			}
		}

	
	//End class------------------------
	}
	
	//Init
	$WS247_aio_ct_button_Theme = new WS247_aio_ct_button_Theme();
	
endif;