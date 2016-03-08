<?php
/**
 * Default Theme for Croogo CMS
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link http://www.croogo.org
 */
?>

<?php 
  /*code to get current date*/
   $today = date("j, n, Y");
 $arr = explode(",",$today);
 $curdat = $arr[0];
 //echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
.sphere-logo {line-height: 8px !important; margin-bottom: 2%;margin-top: 0 !important;}
.sphere-logo img { width: 7% !important;}
.gsc-search-box * {
    box-sizing: content-box !important;
    line-height: normal !important;
}
.google-searchs .gsc-control-cse {background: none !important;}
.popup-more-videos{margin-left:10px;}
.list-video {text-align: center;}
.popup-more-videos ul li {width:24%; display:inline-block;}
.Watch-more{text-align:right; width:100%;display:block;}
</style>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<title><?php echo $title_for_layout; ?> &raquo; <?php echo $site['Site']['title']; ?></title>
	
		<?php $meta_robots = $metas[0]['SiteMeta']['robots']; 
			  $meta_keywords = $metas[0]['SiteMeta']['keywords']; 
			  $meta_description = $metas[0]['SiteMeta']['description']; 			
		?>
	
	<meta name="robots" content="<?php echo $meta_robots; ?>" />
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<meta name="description" content="<?php echo $meta_description; ?>" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		 <!--script src="http://code.jquery.com/jquery-latest.min.js"></script-->
	<?php
		//echo $this->Meta->meta();
		echo $this->Layout->feed();
		echo $this->Html->css(array(
			'/croogo/css/reset',
			'/croogo/css/960',
			'/croogo/css/theme',
			'/croogo/css/theme-hotel',
			'/croogo/css/jquery.fancybox.css',
			'/croogo/css/jquery.fancybox-buttons.css',
			'/croogo/css/meticulosity/preloader.css',
			'/croogo/css/meticulosity/style.css',
			'/croogo/css/meticulosity/responsive.css',
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'/croogo/js/jquery/jquery.min',
			'/croogo/js/jquery-1.10.1.min',
			'/croogo/js/jquery/jquery.hoverIntent.minified',
			'/croogo/js/jquery/superfish',
			'/croogo/js/jquery/supersubs',
			'/croogo/js/theme',
			'/croogo/js/fancybox/jquery.fancybox.js',
			'/croogo/js/fancybox/jquery.fancybox.pack.js',
			'/croogo/js/fancybox/helpers/jquery.fancybox-buttons',
			'/croogo/js/fancybox/helpers/jquery.fancybox-media',
		));
		echo $this->Blocks->get('css');
		echo $this->Blocks->get('script');
	?>


	
	 <script src="<?php echo $this->html->url('/', true); ?>croogo/js/jquery.headtacular.min.js"></script>
	 
	 <!--script src="<?php //echo $this->html->url('/', true); ?>croogo/js/jquery.fancybox.js"></script>
	 <script src="<?php //echo $this->html->url('/', true); ?>croogo/js/jquery.fancybox.pack.js"></script-->
	 <script src="<?php echo $this->html->url('/', true); ?>croogo/js/mediaelement-and-player.min.js"></script>
	 
	 
	<script type="text/javascript">
		  jQuery(document).ready(function(){
			var curdat = "<?php echo $curdat;?>";
			//alert(curdat);
			$('.calendar .calld').html(curdat);
			//div1.innerHTML = ball;
		});
    </script>
</head>
<body onunload="">

<?php 
$headerbgimage = $site['Site']['topheader'];
$headerbgcolor = $site['Site']['headercolor'];
$footerbgcolor = $site['Site']['footercolor'];
$headerfontcolor = $site['Site']['headerfontcolor'];
$footerfontcolor = $site['Site']['footerfontcolor'];
$addzonebgcolor = $site['Site']['addzonebgcolor'];
$addzonetitlecolor = $site['Site']['colortitle'];

?>
<?php if($headerbgimage): ?>
<style scoped>
#header1 {
	background: rgba(0, 0, 0, 0) url("<?php echo $this->html->url('/', true); ?>webroot/img/sites/topheader/<?php echo $headerbgimage; ?>") no-repeat scroll 0 0; !important;
	}
</style>	
<?php elseif($headerbgcolor==''||$headerbgcolor=="#FFFFFF" || $headerbgcolor=="#ffffff"):?>
<?php else :?>
<style scoped>
#header1 {
    background: <?php echo $headerbgcolor; ?> !important;
	}
.facebook-icon:hover, .twitter-icon:hover, .pinterest-icon:hover, .gplus-icon:hover, .insta-icon:hover, linkedin-icon:hover, youtube-icon:hover {
background-color: <?php echo $headerbgcolor; ?> !important;}	

.head-bookmarkss .booktext a:hover {color: <?php echo $headerbgcolor; ?> !important;}

</style>

<?php endif; ?>

<?php if($headerfontcolor==''||$headerfontcolor=="#FFFFFF" ||$headerfontcolor=="#ffffff"):?>
<?php else :?>
<style scoped>
.header-content .addresses {
     color: <?php echo $headerfontcolor; ?> !important;
	}
</style>

<?php endif; ?>

<?php if($footerbgcolor==''||$footerbgcolor=="#FFFFFF" || $footerbgcolor=="#ffffff"):?>
<?php else :?>
<style scoped>
#footer {
    background: <?php echo $footerbgcolor; ?> !important;
}
</style>

<?php endif; ?>

<?php if($footerfontcolor=='' || $footerfontcolor=="#FFFFFF" || $footerfontcolor=="#ffffff"):?>
<?php else :?>
<style scoped>
#footer a {
     color: <?php echo $footerfontcolor; ?> !important;
	}
</style>

<?php endif; ?>

<?php if($addzonebgcolor=='' || $addzonebgcolor=="#000000"):?>
<?php else :?>
<style scoped>

.deals-offer .deals-titles {
      background: <?php echo $addzonebgcolor; ?> !important;
	}
</style>

<?php endif; ?>


<?php if($addzonetitlecolor=='' || $addzonetitlecolor=="#FFFFFF" || $addzonetitlecolor=="#ffffff"):?>
<?php else :?>
<style scoped>
.deals-offer .deals-titles span {
     color: <?php echo $addzonetitlecolor; ?> !important;
	}
</style>

<?php endif; ?>



	<div id="wrapper">
			
		<header>
			<div class="headerss">				
				<div id="header1" class="container_16">						
					<div class="header-content">
						<div class="container">								
							<div class="rewardss">
								<?php if(isset($site['Site']['short_note'])): ?>
						
									<?php echo $site['Site']['short_note']; ?>

								<?php endif; ?>
							</div>						
							<h1 class="site-title">
								<a href="<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>">
								<?php //var_dump($site['Site']['logo']);?>
								  <?php if($site['Site']['logo']!=NULL): ?>
									<img alt="<?php echo $site['Site']['title']; ?>"  src="<?php echo $this->html->url('/', true); ?>webroot/img/sites/logo/<?php echo $site['Site']['logo']; ?> " />
									<?php endif; ?>
								</a>													
								<address class="addresses">
									<?php echo $site['Site']['title']; ?><span> | </span><?php echo $site['Site']['address1']; ?>
									<br>
									<?php echo $site['Site']['city']; ?>, <?php echo $site['Site']['state']; ?> <?php echo $site['Site']['zipcode']; ?><span> | </span><?php echo $site['Site']['phone']; ?>
								</address>
					
							</h1>
							<div class="reward-google">
								<div class="google-search">
									<div class="google-searchs" style="background:none;">
										<script type="text/javascript">
									
											(function() {
												var cx = '002940498371667252341:vyi-bmzhbju';
												var gcse = document.createElement('script');
												gcse.type = 'text/javascript';
												gcse.async = true;
												gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
													'//cse.google.com/cse.js?cx=' + cx;
												var s = document.getElementsByTagName('script')[0];
												s.parentNode.insertBefore(gcse, s);
											})();

											jQuery(document).ready(function(){
												setTimeout(function(){
														removesearchstyle();
													},2000);
											});
										</script>
										<gcse:search></gcse:search>

									</div>
								</div>
						
							</div>					
						</div>				
					</div>					
					<div class="clear"></div>
				</div>			
			</div>			
		</header>	
		<?php //debug($site); ?>
		<div class="headet-top-book">
			<div class="container">	
				<div class="head-bookmarkss">						
					<div class="social-icon small-6">						
							<div class="reservation-rate">
							
									<?php if(isset($site['Site']['reservation'])): ?>
										<?php if($site['Site']['reservation'] != ""): ?>
										<div class="reservationn calendar">
											<span class="calld"></span>
											<span class="reserves">
											    <a target="_blank" href="<?php echo $site['Site']['reservation']; ?>">Reservations</a>
											</span>
										</div>
										<?php endif; ?>
									<?php endif; ?>							
									<?php if(isset($site['Site']['widget'])): ?>
										<?php if($site['Site']['widget'] != ""): ?>
										<div class="web-rates">
											<?php echo $site['Site']['widget']; ?>
										</div>	
										<?php endif; ?>
									<?php endif; ?>	
									
									<?php if($site['Site']['facebookkey']!=NULL || $site['Site']['twitterkey']!=NULL || $site['Site']['pinterestkey']!=NULL || $site['Site']['googlepluskey']!=NULL || $site['Site']['instagramkey']!=NULL || $site['Site']['linkedinkey']!=NULL || $site['Site']['other2']!=NULL || $site['Site']['other3']!=NULL ): ?>
								<div id="socialmedia">
									<ul class="social-icons clearfix">	
<?php //debug($site);?>									
										<?php if(isset($site['Site']['facebookkey'])): ?><li><?php echo $site['Site']['facebook']; ?></li><?php endif; ?>	
										<?php if(isset($site['Site']['twitterkey'])): ?><li><?php echo $site['Site']['twitter']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['pinterestkey'])): ?><li><?php echo $site['Site']['pinterest']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['googlepluskey'])): ?><li><?php echo $site['Site']['googleplus']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['instagramkey'])): ?><li><?php echo $site['Site']['instagram']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['linkedinkey'])): ?><li><?php echo $site['Site']['linkedin']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['other2'])): ?><li><?php echo $site['Site']['other2']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['other3'])): ?><li><?php echo $site['Site']['other3']; ?></li><?php endif; ?>
									</ul>	
								</div>
								<?php endif; ?>	
								
								<div class="flightss reservationn">			
									<span class="calld"></span><span class="flightss-img"> 
										<a target="_blank" href="http://www.flightview.com/flighttracker/">Check my Flight</a>
									</span>
								</div>								
							</div>			
					</div>
					<div class="syncph-state">
						<div class="social-state">
							<div class="small-6 alineright bold commontext">
								<?php										
									$city=$site['Site']['city'];
									$string = preg_replace('/\s+/', '', $city);
									$zipcodee=$site['Site']['zipcode'];
									$zipcodee = preg_replace('/\s+/', '', $zipcodee);
								?>
								<?php
									$country="US"; //Two digit country code
									$url="http://api.openweathermap.org/data/2.5/weather?q=".$string.",".$country."&APPID=57a714934d023fc803aa5fe2b6554933";
									//echo $url;
									$json=file_get_contents($url);
									$data=json_decode($json,true);
									$temp = $data['main']['temp'];
									$cityid = $data['id'];
									$f=round((($temp - 273.15) * 1.8) + 32);
									$siteurl = "http://openweathermap.org/city/".$cityid;
								?>
									<a class="tempurl" href="<?php echo $siteurl; ?>" target="_blank">
											<span class="temps"><?php echo $f ?>&deg; F </span>
									</a>

							</div>		
						</div>						
					</div>						
				</div>															
			</div>
		</div>
			
		<div id="tog-div"><a href="#" id="tog">Menu</a></div>
		<div class="headet-top-book mobile" id="tog-mob">
				<div class="container">	
					<div class="head-bookmarkss">						
					<div class="social-icon small-6">						
							<div class="reservation-rate">
									<?php if(isset($site['Site']['reservation'])): ?>
										<?php if($site['Site']['reservation'] != ""): ?>
										<div class="reservationn calendar">
											<span class="calld"></span>
											<span class="reserves">
											    <a target="_blank" href="<?php echo $site['Site']['reservation']; ?>">Reservations</a>
											</span>
										</div>
										<?php endif; ?>
									<?php endif; ?>							
									<?php if(isset($site['Site']['widget'])): ?>
										<?php if($site['Site']['widget'] != ""): ?>
										<div class="web-rates">
											<?php echo $site['Site']['widget']; ?>
										</div>	
										<?php endif; ?>
									<?php endif; ?>	
									<?php if($site['Site']['facebookkey']!=NULL || $site['Site']['twitterkey']!=NULL || $site['Site']['pinterestkey']!=NULL || $site['Site']['googlepluskey']!=NULL || $site['Site']['instagramkey']!=NULL || $site['Site']['linkedinkey']!=NULL || $site['Site']['other2']!=NULL || $site['Site']['other3']!=NULL ): ?>
								<div id="socialmedia">
									<ul class="social-icons clearfix">	
<?php //debug($site);?>									
										<?php if(isset($site['Site']['facebookkey'])): ?><li><?php echo $site['Site']['facebook']; ?></li><?php endif; ?>	
										<?php if(isset($site['Site']['twitterkey'])): ?><li><?php echo $site['Site']['twitter']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['pinterestkey'])): ?><li><?php echo $site['Site']['pinterest']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['googlepluskey'])): ?><li><?php echo $site['Site']['googleplus']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['instagramkey'])): ?><li><?php echo $site['Site']['instagram']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['linkedinkey'])): ?><li><?php echo $site['Site']['linkedin']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['other2'])): ?><li><?php echo $site['Site']['other2']; ?></li><?php endif; ?>
										<?php if(isset($site['Site']['other3'])): ?><li><?php echo $site['Site']['other3']; ?></li><?php endif; ?>
									</ul>	
								</div>
								<?php endif; ?>
								<div class="flightss reservationn">			
									<span class="calld"></span><span class="flightss-img"> 
										<a target="_blank" href="http://www.flightview.com/flighttracker/">Check my Flight</a>
									</span>
								</div>								
							</div>			
					</div>
					<div class="syncph-state">
						<div class="social-state">
							<div class="small-6 alineright bold commontext">
									<?php										
									$city=$site['Site']['city'];
									$string = preg_replace('/\s+/', '', $city);
									$zipcodee=$site['Site']['zipcode'];
									$zipcodee = preg_replace('/\s+/', '', $zipcodee);
								?>
								<?php
									$country="US"; //Two digit country code
									$url="http://api.openweathermap.org/data/2.5/weather?q=".$string.",".$country."&APPID=57a714934d023fc803aa5fe2b6554933";
									//echo $url;
									$json=file_get_contents($url);
									$data=json_decode($json,true);
									$temp = $data['main']['temp'];
									$cityid = $data['id'];
									$f=round((($temp - 273.15) * 1.8) + 32);
									$siteurl = "http://openweathermap.org/city/".$cityid;
								?>
									<a class="tempurl" href="<?php echo $siteurl; ?>" target="_blank">
											<span class="temps"><?php echo $f ?>&deg; F </span>
									</a>

							</div>		
						</div>						
					</div>						
				</div>														
				</div>
		</div>
			
		<div id="main" class="container_16">
						
			<div id="content" class="home-content container">
				<div class="categoriess1 row">
						<?php if(isset($_GET['sub'])): ?>
							<?php if(isset($categorytitle)): ?>
								<div class="cat-title">
									<h1><?php echo $categorytitle; ?></h1>	
								</div>
							<?php endif; ?>
						<?php else: ?>
							<?php if(count($catstatus) > 0): ?>
								<div class="cat-title">
									<h1 style="text-transform: none;font-size:30px;">Local Food and Attractions</h1>	
								</div>
							
							<?php endif; ?>
						<?php endif; ?>				
						<ul>
							<?php $counter=1; ?>
					
							<?php foreach ($categories as $cat): ?>		

								<?php //debug($cat); 
							
								$arrs = $cat['Term']['termusername'];							
								$arr11 = unserialize(urldecode($arrs)); 
								
								//debug($arr11);
								
								if($arrs){								
									$termsids = [];
									foreach($arr11 as $newkey=>$arr13){
											//debug($arr13);
										if(is_array($arr13) && isset($arr13['siteid'])){											
												if($arr13['siteid'] == $site['Site']['id']){
												
													$termsids[] = $arr13;
												}											
											}																		
											else{											
													if($newkey == 'siteid' && $arr13 == $site['Site']['id']){														
														$termsids[] = $arr11;																
													}
											}
									}
								
									//debug($termsids);
								}
															
								?>	
							
								<?php if(isset($_GET['sub'])): ?>								
								<?php if($cat['Term']['id'] == in_array($cat['Term']['id'], $parentsssid)): ?>
								<?php if($cat['Term']['status'] == 1): ?>
								<li class="categoryy1 col-md-6 col-lg-4 wow fadeInUp animated first" data-wow-duration="3s">
								
								<?php if($cat['Term']['targeturl']): ?>
								
									<a href="<?php echo $cat['Term']['targeturl']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<?php else: ?>
									<a href="<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<?php endif; ?>

									<div class="title">

									<?php if($cat['Term']['image'] || $cat['Term']['image'] !=""): ?>
									<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/<?php echo $cat['Term']['image']; ?>" />
									<?php else: ?>
									<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/placeholder.png" />
									<?php endif; ?>
									
									</div>
								</li>
								<?php endif; ?>
							<?php else: ?>

								<?php if($cat['Term']['status'] == 1): ?>
								<li class="categoryy1 col-md-6 col-lg-4 wow fadeInUp animated first">			
									<?php if($cat['Term']['targeturl']): ?>									
										<a href="<?php echo $cat['Term']['targeturl']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<?php else: ?>
										<a href="<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/showads?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<?php endif; ?>
									<div class="title">
										<?php if($cat['Term']['image'] || $cat['Term']['image'] !=""): ?>
											<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/showads?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/<?php echo $cat['Term']['image']; ?>" />
										<?php else: ?>
											<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/showads?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/placeholder.png" />
										<?php endif; ?>									
									</div>
								</li>
								<?php endif; ?>
								
							<?php endif; ?>							
								
							<?php else: ?>

							<?php if($arrs && $termsids): ?>
								<?php if($cat['Term']['status'] == true && $cat['Term']['termusername'] == null || $cat['Term']['status'] == true && $termsids[0]['status'] ==1): ?>
								<li class="categoryy1 col-md-6 col-lg-4 wow fadeInUp animated first">
									<a href="<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<div class="title">									
										<?php if($cat['Term']['image'] || $cat['Term']['image'] !=""): ?>
										<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/<?php echo $cat['Term']['image']; ?>" />
										<?php else: ?>
										<img alt="<?php echo $cat['Term']['title']; ?>"  onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/placeholder.png" />
										<?php endif; ?>									
									</div>
								</li>
								<?php endif; ?>
								
								<?php else: ?>
								
								
								<?php if($cat['Term']['status'] == true): ?>
								<li class="categoryy1 col-md-6 col-lg-4 wow fadeInUp animated first">
									<a href="<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>"><?php echo $cat['Term']['title']; ?></a>
									<div class="title">									
										<?php if($cat['Term']['image'] || $cat['Term']['image'] !=""): ?>
										<img alt="<?php echo $cat['Term']['title']; ?>" onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/<?php echo $cat['Term']['image']; ?>" />
										<?php else: ?>
										<img alt="<?php echo $cat['Term']['title']; ?>"  onclick=" window.location.assign('<?php echo $this->html->url('/', true); ?><?php echo $site['Site']['slug']; ?>/?sub=<?php echo $cat['Term']['id'];?>&store=<?php echo $site['Site']['id']; ?>')" src="<?php echo $this->html->url('/', true); ?>webroot/img/category/logo/placeholder.png" />
										<?php endif; ?>									
									</div>
								</li>
								<?php endif; ?>
								
								<?php endif; ?>
								
								
							<?php endif; ?>
							<?php
								$counter++;		
									endforeach; ?>	
						</ul>
				</div>
				<!--div class="clear"></div-->
				<?php if($sphereresults): ?>
				<div class="outbrain-contents">
				
						<div class="outbrain-titles">
								<span><?php echo "What&apos;s trending"; ?></span>
						</div>
				
						<div class="outbrainss">
							<ul>
							<?php if(isset($sphereresults['items'])): ?>
								<?php foreach($sphereresults['items'] as $key=>$sph): ?>									
								<li> 
									<a href="<?php echo $sph['_actions']['click']; ?>" target="_blank">
										<?php if(isset($sph['thumbnail'])): ?>
										<img src="<?php echo $sph['thumbnail']; ?>" style="width:223px;height:158px;" alt="image">
										<?php endif; ?>
										<?php if(isset($sph['document']['categories'][0]['name'])): ?>
										<span class="ttss"><?php echo $sph['document']['categories'][0]['name']; ?></span>
										<?php endif; ?>
									</a>
									<?php if($sph['document']['title']): ?>
									<?php if(isset($sph['document']['title'])): ?>
										<?php $title = strlen($sph['document']['title']) > 52 ? substr($sph['document']['title'],0,50)."..." : $sph['document']['title']; ?>	
										<div class="bb-text"><?php echo $title; ?>
										<?php if(isset($sph['document']['site']['name'])): ?>
										<?php $author = strlen($sph['document']['site']['name']) > 30 ? substr($sph['document']['site']['name'],0,28)."..." : $sph['document']['site']['name']; ?>
										<br/><span class="author" style="font-size: 11px !important;"> <?php echo $author; ?></span>
										<?php endif; ?>
										</div>
										
									<?php endif; ?>
									<?php else: ?>
									<?php if(isset($sph['document']['description'])): ?>
										<?php $description = strlen($sph['document']['description']) > 52 ? substr($sph['document']['description'],0,50)."..." : $sph['document']['description']; ?>								
										<div class="bb-text"><?php echo $description; ?>
										<?php if(isset($sph['document']['site']['name'])): ?>
										<?php $author = strlen($sph['document']['site']['name']) > 30 ? substr($sph['document']['site']['name'],0,28)."..." : $sph['document']['site']['name']; ?>
										<br/><span class="author" style="font-size: 11px !important;"> <?php echo $author; ?></span>
										<?php endif; ?>
										
										</div>
									<?php endif; ?>
									
									<?php endif; ?>
									
									
								</li>
		   
								<?php endforeach; ?>
							<?php endif; ?>
							</ul>
						</div>
										<!--<div class="sphere-logo">
										<span>powered by </span>
										<img src="<-?php echo $this->html->url('/', true); ?>webroot/img/sphere-logo.png" alt="Sphere">
										</div>-->						
				</div>	
				<?php endif; ?>					
				<div class="deals-offer" id="offers">
					<div class="deals-contents">
						<ul>
							<div id="shotsByPlayerIdss">
								<?php if(isset($_GET['sub'])): ?>
									<?php if($site['Site']['zone4']): ?>
										<li class="text-image addzone4 first col-md-6 wow fadeInUp" data-wow-duration="2s">
										
										<?php 
										 $img = (string)$site['Site']['zone4'];
										 
										 $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										?>
										<?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone4']; ?>" ></a>
											<?php else: 
										echo $site['Site']['zone4']; 
										endif;
										?>
										</li>
									<?php endif; ?>
									<?php if($site['Site']['zone5']): ?>
										<li class="text-image addzone5 col-md-6 wow fadeInUp" data-wow-duration="2s">
										
										<?php 
										 $img = (string)$site['Site']['zone5'];
										 
										 $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										?>
										<?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone5']; ?>" ></a>
										<?php else: 
										echo $site['Site']['zone5']; 
										endif;
										?>
										</li>
									<?php endif; ?>
									<?php if($site['Site']['zone6']): ?>
										<li class="text-image addzone6 last col-md-6 wow fadeInUp" data-wow-duration="2s">
										
										<?php 
										 $img = (string)$site['Site']['zone6'];
										 
										 $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										?>
										<?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone6']; ?>" ></a>
										<?php else: 
										echo $site['Site']['zone6']; 
										endif;
										?>
										</li>	
									<?php endif; ?>
								<?php else: ?>
									<?php if($site['Site']['zone1']): ?>
										<li class="text-image addzone1 first col-md-6 wow fadeInUp" data-wow-duration="2s">
										
										<?php 
										 $img = (string)$site['Site']['zone1'];
										 
										 $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										?>
										<?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone1']; ?>" ></a>
										<?php else: 
										echo $site['Site']['zone1']; 
										endif;
										?>	
										</li>
									<?php endif; ?>
									<?php if($site['Site']['zone2']): ?>
										<li class="text-image addzone2 col-md-6 wow fadeInUp" data-wow-duration="2s">
									  <?php 
										 $img = $site['Site']['zone2'];
										  $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										 ?>
										 <?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone2']; ?>" ></a>
											<?php else :
											echo $site['Site']['zone2']; 
											endif; ?>
										</li>
									<?php endif; ?>
									<?php if($site['Site']['zone3']): ?>
										<li class="text-image addzone3 last col-md-6 wow fadeInUp" data-wow-duration="2s">
										  <?php 
										 $img = $site['Site']['zone3'];
										  $file_headers = @get_headers($img);
										  //var_dump($file_headers);
										 ?>
										<?php if($file_headers[0]=='HTTP/1.1 200 OK'): ?>
											<a href="#" target="_blank"><img alt="ads" src="<?php echo $site['Site']['zone3']; ?>" ></a>
											<?php else :
											echo $site['Site']['zone3']; 
											endif; ?>
										</li>	
									<?php endif; ?>			
								<?php endif; ?>					
							</div>
						</ul>
					</div>			
				</div>													
			</div>
			<div class="clear"></div>														
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="grid_8 left">
						<a href="<?php echo $this->html->url('/', true); ?>">&copy; 2015 Deep Blue Communications, All Rights Reserved.</a>
					</div>
					<div class="grid_811 right">
						<ul>
							<li><a href="<?php echo $this->html->url('/', true); ?>page/privacy-policy" target="_blank">Privacy Policy</a></li>
							<span>|</span>
							<li><a href="<?php echo $this->html->url('/', true); ?>page/terms-of-use" target="_blank">Term of Use</a></li>
							<span>|</span>
							<li><a href="<?php echo $this->html->url('/', true); ?>contact" target="_blank">Contact Us</a></li>
						</ul>				
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</footer>
		<?php //debug($site['Site']['video_box']); ?>
				
			<?php if($site['Site']['video_box'] == true || $site['Site']['youtube_box'] == true): ?>

				<?php
		
					if (!isset($_COOKIE['popup'])): ?>
			 <?php   setcookie('popup', 1, strtotime('+1 Day'));

				?>
<!-- 					<a title="video title" href="<?php //echo $site['Site']['video_url']; ?>" style="display:none" class="fancy_video" controls="true" id="fancy_video">
					</a> -->
	

<div class="videoplaypopup">&nbsp;<a href="javascript:void(0)" id="stop-video"><img class="closimgbt" src="http://dbc.meticulosity.com/webroot/img/close.png" onclick="videoplaypopupclose();"></a>
			<?php 
					if($site['Site']['video_box'] == true){ 
						$video = $site['Site']['video_url']; 
					?>
					
					<video id="Video"  width="500" height="315" controls><source src="<?php echo $video; ?>" type="video/mp4"></video>
				
					<?php	
					}
					
					else { 
						$video = $site['Site']['youtube']; 
						?>
					<iframe id='Video' width="500" height="315" src="<?php echo $video; ?>?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>	
	
					<?php	
					}
				
				 $small_video1= $site['Site']['small_video_url1'];
				 $small_video2= $site['Site']['small_video_url2'];
				 $small_video3= $site['Site']['small_video_url3'];
				 $small_video4= $site['Site']['small_video_url4'];
				?>
				<iframe style='display:none;' id='Video_more_small' width="500" height="315" src="" frameborder="0" allowfullscreen></iframe>	
		iv class="popup-more-videos" style="width:500">
				<ul class ="list-video">
				<?php if (isset($small_video1) && $small_video1!=''){
					

					 $video_pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
					$youtube_id1 = (preg_replace($video_pattern, '$1', $small_video1));
					$small_videourl1= "https://www.youtube.com/embed/".$youtube_id1;
					?>
				<li>
					<a href="<?php echo $small_videourl1; ?>?rel=0&showinfo=0&autoplay=1">
					<img class ="Video-more" src="http://img.youtube.com/vi/<?php echo $youtube_id1; ?>/default.jpg" alt="">
					</a>
				</li>
				<?php }  ?>
				<?php if (isset($small_video2) && $small_video2!=''){
					$video_pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
					$youtube_id2 = (preg_replace($video_pattern, '$1', $small_video2));
					$small_videourl2= "https://www.youtube.com/embed/".$youtube_id2;
					?>
				<li><a href="<?php echo $small_videourl2; ?>?rel=0&showinfo=0&autoplay=1">
				<img class ="Video-more" src="http://img.youtube.com/vi/<?php echo $youtube_id2; ?>/default.jpg" alt="">
				</a></li>
				<? }?>
				<?php if (isset($small_video3) && $small_video3!=''){
					$video_pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
					$youtube_id3 = (preg_replace($video_pattern, '$1', $small_video3));
					$small_videourl3= "https://www.youtube.com/embed/".$youtube_id3;

					?>
				<li><a href="<?php echo $small_videourl3; ?>?rel=0&showinfo=0&autoplay=1">
				<img class ="Video-more" src="http://img.youtube.com/vi/<?php echo $youtube_id3; ?>/default.jpg" alt="">
				</a></li>
				<?php }?>
				<?php if (isset($small_video4)&& $small_video4!=''){
					$video_pattern = '~(?:http|https|)(?::\/\/|)(?:www.|)(?:youtu\.be\/|youtube\.com(?:\/embed\/|\/v\/|\/watch\?v=|\/ytscreeningroom\?v=|\/feeds\/api\/videos\/|\/user\S*[^\w\-\s]|\S*[^\w\-\s]))([\w\-]{11})[a-z0-9;:@#?&%=+\/\$_.-]*~i';
					$youtube_id4 = (preg_replace($video_pattern, '$1', $small_video4));
				
					$small_videourl4= "https://www.youtube.com/embed/".$youtube_id4;
					
					?>
				<li><a href="<?php echo $small_videourl4; ?>?rel=0&showinfo=0&autoplay=1">
				<img class ="Video-more" src="http://img.youtube.com/vi/<?php echo $youtube_id4; ?>/default.jpg" alt="">
				</a></li>
				<?php } ?>
				</ul>
			</div>
		<div class="Watch-more"><a style="color:#00AFE4" target="_blank" href="https://www.youtube.com">Watch More...</a></div>
	
</div>

<div onclick="videoplaypopupclose();" class="videoplaypopupoverlay">&nbsp;</div>

			
				
			<?php endif; ?>
			<?php endif; ?>			
		
		
	</div>
		<?php
			echo $this->Blocks->get('scriptBottom');
			echo $this->Js->writeBuffer();
		?>
		<script type="text/javascript" version="<?php echo time(); ?>">
			function checkDoM(){
				var state = document.readyState;
				//console.log(state);
				if( state === 'complete') {
							 $('#shotsByPlayerIdss img').each(function(){
							
							  if($(this).width()<300){
								//console.log('check');
								$(this).parent().css('left',(300-$(this).width())/2);
								$(this).parent().css('top',(250-$(this).height())/2);
								$(this).parent().css('position', 'relative');
							  }
							});	
				}
				else setTimeout(checkDoM, 100);
			}

				function removesearchstyle(){
							
					$(".gsc-control-cse").each(function(){
								
						$(this).css("background","none");

					});
					for(i=0;i<10;i++){
						$(".categoryy1 a").each(function(){
									//$(this).css("left",(($(".categoryy1").width() - $(this).outerWidth())/2));
						});	
					}
						
				}	
				function videoplaypopupclose(){
					
					jQuery('.videoplaypopup, .videoplaypopupoverlay').hide();
					<?php if($site['Site']['video_box'] == true): ?>
					$("#Video").get(0).pause(); 
					<?php endif; ?>
					<?php if($site['Site']['youtube_box'] == true): ?>
					jQuery('#Video').attr('src','');
					<?php endif; ?>
				}				
			$(document).ready(function(){
					$('.headerss').headtacular({ scrollPoint: 50, parentOffset: false, showScrollPoint: false });
					var stickyRibbonTop = $('.headerss').offset().top;

							$(window).scroll(function(){
						if( $(window).scrollTop() > stickyRibbonTop ) {
							   $('.site-description').addClass('mini-site-desc');
						} else {
							  $('.site-description').removeClass('mini-site-desc');
						}
						});				
					setTimeout(function(){
								$(".categoryy1 a").each(function(){
									//$(this).css("left",(($(".categoryy1").width() - $(this).outerWidth())/2));
								});	
					},	5000);	
				
					var i = 1;
						$('.outbrainss ul li').each(function(i, j) {
						   $(this).addClass('categoriess'+i);
						});			
				$("#tog").click(function(){
					$("#tog-mob").slideToggle("slow");
				});
					checkDoM();	
				<?php if($site['Site']['video_box'] == true || $site['Site']['youtube_box'] == true): ?>
					checkvideoload();
				<?php endif; ?>
				
				<?php if($this->params['controller'] == 'sites' && $this->params['action'] == 'view' && !preg_match('/sub/',$_SERVER['QUERY_STRING'])): ?>
				
					jQuery(".videoplaypopup").show();
					jQuery(".videoplaypopupoverlay").show();				
					jQuery(".videoplaypopup").css('left', (jQuery(document).width()-jQuery(".videoplaypopup").width())/2);
					<?php if($site['Site']['video_box'] == true): ?>
						$("#Video").get(0).play(); 
					<?php endif; ?>
					
					<?php endif; ?>
					
					<?php //else: ?>
						/* <?php if($site['Site']['video_box'] == true || $site['Site']['youtube_box'] == true): ?>
							<?php if($site['Site']['video_box'] == true): ?>
							  $("#Video").get(0).pause(); 
							<?php endif; ?>   
							<?php if($site['Site']['youtube_box'] == true): ?>
							   jQuery('#Video').attr('src','');
							<?php endif; ?> 
						<?php endif; ?>  */   					
					<?php //endif; ?>
				
				
				
				function checkvideoload(){
					video=document.getElementById('Video');
					if(video.readyState > 1){
						
						jQuery(".videoplaypopup").css('left', (jQuery(document).width()-jQuery(".videoplaypopup").width())/2);
					
					}else{
						setTimeout(checkvideoload,100);
					}
				}
				
				jQuery("#stop-video").click(function(){
				<?php if($site['Site']['video_box'] == true): ?>
				  $("#Video").get(0).pause(); 
				<?php endif; ?>   
				<?php if($site['Site']['youtube_box'] == true): ?>
				   jQuery('#Video').attr('src','');
				<?php endif; ?>      
				 jQuery('#Video_more_small').attr('src','');
				 });
				 
				jQuery(".list-video li .Video-more").each(function( index, element ) {
					jQuery(this).click(function(event){
						event.preventDefault();
						jQuery("#Video").hide();
						jQuery("#Video_more_small").show();
						var videoURL = jQuery(this).parent().attr('href');
						jQuery('#Video_more_small').prop('src',videoURL);
					});
				});
			});

		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>	


			

</body>

</html>