<?php
$metaImageUrl = image_url. imagelibrary_image_path.'logo/nie_logo_600X390.jpg';
$imageMetaWidth =600;
$imageMetaHeight =390;
$metaImage = str_replace(' ', "%20", $contentDetails['article_page_image_path']);
if (getimagesize(image_url_no . imagelibrary_image_path . $metaImage)){
	$imagedetails = getimagesize(image_url_no . imagelibrary_image_path.$metaImage);
	$imageMetaWidth = $imagedetails[0];
	$imageMetaHeight = $imagedetails[1];
	$metaImageUrl = image_url.imagelibrary_image_path.$metaImage;
}

?>
<!doctype html>
<html amp>
	<meta charset="utf-8">
	<title><?php echo strip_tags($contentDetails['title']); ?> | Samakalika Malayalam</title>
	<link rel="shortcut icon" href="<?php echo image_url ?>images/FrontEnd/images/favicon.ico" type="image/x-icon" />
	<link rel="canonical" href="<?php echo BASEURL.$contentDetails['url'] ?>"/>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<link rel="preconnect" href="https://cdn.ampproject.org"/>
	<link rel="preload" href="https://cdn.ampproject.org/v0/amp-ad-0.1.js" as="script" />
    <link rel="preload" href="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" as="script" />
	<link rel="dns-prefetch" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<meta name="title" content="<?php echo trim($contentDetails['meta_Title']); ?>" />
	<meta name="description" content="<?php echo strip_tags($contentDetails['meta_description']); ?>" />
	<meta name="keywords" content="<?php echo trim($contentDetails['tags']); ?>" />
	<meta property="og:site_name" content="Samakalika Malayalam" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo trim($contentDetails['meta_Title']); ?>" />
	<meta property="og:description" content="<?php echo trim($contentDetails['meta_description']); ?>" />
	<meta property="og:url" content="<?php echo BASEURL.$contentDetails['url'] ?>" />
	<meta property="og:image" content="<?php echo $metaImageUrl;?>" />
	<meta property="og:image:width" content="<?php echo $imageMetaWidth; ?>" />
	<meta property="og:image:height" content="<?php echo $imageMetaHeight; ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo trim($contentDetails['meta_Title']); ?>" />
	<meta name="twitter:description" content="<?php echo trim($contentDetails['meta_description']); ?>" />
	<meta name="twitter:site" content="Samakalikam" />
	<meta name="twitter:creator" content="@samakalikam" />
	<meta name="twitter:url" content="<?php echo BASEURL.$contentDetails['url'] ?>" />
	<meta name="twitter:image" content="<?php echo $metaImageUrl;?>" />
	<meta name="twitter:image:width" content="<?php echo $imageMetaWidth; ?>" />
	<meta name="twitter:image:height" content="<?php echo $imageMetaHeight; ?>" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans&amp;display=swap">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
    <script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
    <script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
	<script async custom-element="amp-dailymotion" src="https://cdn.ampproject.org/v0/amp-dailymotion-0.1.js"></script>
	<script async custom-element="amp-soundcloud" src="https://cdn.ampproject.org/v0/amp-soundcloud-0.1.js"></script>
	<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
	<script async custom-element="amp-web-push" src="https://cdn.ampproject.org/v0/amp-web-push-0.1.js"></script>
	<script async custom-element="amp-vimeo" src="https://cdn.ampproject.org/v0/amp-vimeo-0.1.js"></script>
	<script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>
	<?php if($contentDetails['section_id']==731):	?>
	<script async custom-element="amp-live-list" src="https://cdn.ampproject.org/v0/amp-live-list-0.1.js"></script> 
	<?php endif; ?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
	<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<?php
	$schemaDescription = stripcslashes(strip_tags($contentDetails['summary_html']));
	$schemaDescription = str_replace(['"' , "'"] ,['\u0022' ,'\u0027'],$schemaDescription);
	$published_date = date('Y-m-d\TH:i:s\+05:30' , strtotime($contentDetails['publish_start_date']));
	$Updated_date = date('Y-m-d\TH:i:s\+05:30' , strtotime($contentDetails['last_updated_on']));
	if ($contentDetails['article_page_image_path'] != '' && getimagesize(image_url_no . imagelibrary_image_path . $contentDetails['article_page_image_path'])){
		$Image 	= str_replace("original","w600X390", $contentDetails['article_page_image_path']);
		$image_path = '';
		$image_path = image_url. imagelibrary_image_path . $Image;
	}else{
		$image_path	   = image_url. imagelibrary_image_path.'logo/nie_logo_600X390.jpg';
	}
	$schemeTitle = strip_tags($contentDetails['title']);
	$schemeTitle = (mb_strlen($schemeTitle) > 105) ? mb_substr($schemeTitle , 0,105) : $schemeTitle;
	?>
	<script type="application/ld+json">
			{
				"@context": "http:\/\/schema.org",
				"@type": "NewsArticle",
				"mainEntityOfPage": {
					"@type": "WebPage",
						"@id": "<?php echo BASEURL.$contentDetails['url']; ?>"
				},
				"headline": "<?php echo $schemeTitle; ?>",
				"description": "<?php echo $schemaDescription; ?>",
				"datePublished": "<?php echo $published_date; ?>",
				"dateModified": "<?php  echo $Updated_date; ?>",
				"publisher": {
					"@type": "Organization",
					"name": "Samakalika Malayalam",
					"logo": {
						"@type": "ImageObject",
						"url": "<?php echo image_url; ?>images/FrontEnd/images/sm-mob-logo.png",
						"width": "450",
						"height": "130"
					}
				},
				"inLanguage" : "ml",
				"keywords" : "<?php echo strip_tags($contentDetails['tags']); ?>",
				"author": {
					"@type": "Person",
					"name": "<?php echo ($contentDetails['author_name']!='') ? $contentDetails['author_name'] : $contentDetails['agency_name']; ?>"
				},
				"image": {
					"@type": "ImageObject",
					"url": "<?php print $image_path ?>",
					"width": "600",
					"height": "390"
				}	
			}		
			</script>
	<style amp-custom>
		body{font-family:'Fira Sans', sans-serif;}
		header{float:left;width:100%;padding:2% 2% 0;}
		header .menu-bar{font-size: 31px;color: #EE1B23;float: left;margin-left: 2%;}
		header .logo_img{float: left;margin-left: 20%;}
		nav{float:left;width:96%;overflow-x:scroll;padding: 2%;display:flex;flex:1;display:flex;background: #3A3A3D; }
		nav a{float: left;margin-right: 15px;font-size: 15px;text-decoration: none;color: #fff;flex: 0 0 auto;position: relative;font-weight: 600;text-transform: uppercase;}
		section{width: 96%;float: left;padding: 2%;}
		.section-name{float: left;margin: 6px 0 8px;background:#EE1B23;color: #fff;padding: 3px 7px 4px;font-size: 14px;    border-radius: 8px;font-weight: 700;}
		.article-title{float: left;margin:0 0 5px;width: 100%;font-size:20px;}
		.published-date{float: left;width: 100%;font-size: 12px;margin: 0 0 15px;color: #DE1409;padding-bottom: 7px;}
		.social-icons , .article-image{float:left;width:100%;margin-bottom: 10px;}
		.social-icons amp-social-share{border-radius: 5px;}
		.article-content{width: 100%;float: left;font-family: 'Fira Sans', sans-serif;line-height: 1.7;font-size: 16px;}
		.tags{float:left;width:100%;margin-bottom: 10px;}
		.tags span{float:left;margin-right: 10px;}
		.tags a{margin: 0px 6px 6px;text-decoration: none;background: #EE1B23;color: #fff;padding: 1px 5px 2px;border-radius: 5px;float:left;}
		.more-from-section{float:left;width:100%;}
		.more-from-section h3{float: left;width: 100%;margin: 2% 0 2%;text-align: center;}
		.more-from-section h3 span{padding-bottom: 3px;}
		.more-stories{float: left;width: 100%;flex: 1;display: flex;overflow-x: scroll;padding: 15px 0 15px;border-top: 2px solid #EE1B23;border-bottom: 2px solid #EE1B23;}
		.more-stories .items{width: 35%;flex: 0 0 auto;margin-right: 4%;border: 1px solid #eee;padding: 2%;border-radius: 8px;}
		.more-stories .items a{float: left;width: 100%;text-decoration: none;color: #000;font-size: 13px;}
		.more-stories .items h4{margin: 3px 0 3px;font-weight: normal;float: left;width: 100%;line-height: 1.3;}
		footer{float: left;width: 96%;padding: 2%;background: #3A3A3D;color: #fff;margin-top: 3%;text-align:center;}
		footer p{margin: 0 0 4px;text-align: center;font-size: 12px;}
		footer a{color: #fff;font-weight: 400;text-decoration: none;font-size: 12px;}
		amp-sidebar{background: #3A3A3D;}
		amp-sidebar ul{float: left;width: 100%;padding: 0 21px 0;}
		amp-sidebar li{list-style: none;margin-bottom: 10px;}
		amp-sidebar li a{font-size: 17px;text-decoration: none;color: #fff;text-transform: uppercase;}
		amp-sidebar .close-event{text-align:right;}
		amp-sidebar .close-event img{margin-top: 6px;}
		.gallery-items{float: left;width: 100%;margin: 0 0 20px;position: relative;}
		.gallery-items img{border-top-right-radius: 8px;border-top-left-radius: 8px;}
		.gallery-items figcaption{background: #000;color: #fff;padding: 3px 8px 3px;font-size: 13px;line-height: 1.4;    border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;}
		.gallery-items div{position: absolute;top: 11px;right: 11px;font-size: 20px;z-index: 9;color: #fff;background: #000000ab;padding: 1px 8px 1px;border-radius: 5px;}
		.gallery-items div span{font-size: 15px;}
		.social-icons-n{text-align: right;margin-right: 5%;margin-top: 1.3%;}
		.refresh-list{background: #09155E; border: none;color: #fff;padding: 10px 14px 10px;border-radius: 5px;position:relative;}
		.live-content{float: left;width: 87%;margin: 1%;background: #fff;padding: 5%;border-radius: 8px;border: 1px solid #ddd;margin-bottom: 6%;position:relative;}
		.live-content .time{float: left;width: 100%;margin-bottom: 5px;color: #6b6565;font-size: 13px;}
		.live-content .content_title{float: left;width: 100%;margin: 10px 0 10px;font-size: 15px;}
		.live-content .content_description{float: left;width: 100%;font-size: 14px;line-height: 1.6;}
		.live-socialicons{position: absolute;top: 0;right: 0;}
		.live-fb{border-bottom-left-radius: 8px;}
		.live-ti{border-top-right-radius: 8px;}
		.live-update-t{margin: 1%;background: #f00;padding: 2% 5% 1%;color: #fff;text-align: center;text-transform: uppercase;}
		.scc{min-height: 70px;position: relative;border-top: 1px solid #ddd;padding: 8px 0 11px;border-bottom: 1px solid #ddd;float: left;margin: 0 0 14px;width:100%;}
		.scc .scc-span{font-size: 7px;color: #a3a1a1;margin-bottom: 8px;width: 100%;float: left;text-align: right;}
		.scc .scc-div{overflow: hidden;width:100%;align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;}
		<?php if($contentType==4): ?>
		amp-youtube{width:100%;height:350px;margin-bottom:15px;}
		<?php endif; ?>
		.align-center-button{display:flex;align-items: center;justify-content:center;flex-direction: row;width:100%}amp-web-push-widget .subscribe{display: flex;flex-direction: row;align-items: center;border-radius:2px;border:1px solid #007ae2;margin:0;padding:8px 15px;cursor:pointer;outline:0;font-size:16px;font-weight:400;background:#0e82e5;color:#fff;-webkit-tap-highlight-color:transparent}amp-web-push-widget .unsubscribe{border-radius:2px;border:1px solid #b3b3b3;margin:0;padding:8px 15px;cursor:pointer;outline:0;font-size:15px;font-weight:400;background:#bdbdbd;color:#555;-webkit-tap-highlight-color:transparent}amp-web-push-widget .subscribe .subscribe-icon{margin-right:10px}amp-web-push-widget .subscribe:active{transform:scale(.99)}
	</style>
	<body>
		<amp-analytics type="googleanalytics">
			<script type="application/json">
			{
				"vars": {
				"account": "UA-91400277-1"
				},
				"triggers": {
					"trackPageview": {
						"on": "visible",
						"request": "pageview"
					}
				}
			}
			</script>
		</amp-analytics>
		<amp-analytics type="comscore"> 
			<script type="application/json">
			{
			"vars": {"c2": "16833363"},
			"extraUrlParams": {"comscorekw": "amp"}
			}
			</script>
		</amp-analytics> 
		<amp-sidebar id="sidebar" layout="nodisplay"  side="right" >
			<div class="close-event">
			<amp-img class="amp-close-image"
			src="<?php echo image_url; ?>images/FrontEnd/images/close_btn.png"
			width="30"
			height="30"
			
			alt="close sidebar"
			on="tap:sidebar.close"
			role="button"
			tabindex="0"></amp-img>
			</div>
			<ul class="">
				<?php
				foreach($menuDetails as $menu):
					echo '<li><a href="'.BASEURL.$menu['URLSectionStructure'].'"><i class="fa fa-caret-right"></i> '.$menu['Sectionname'].'</a></li>';
				endforeach;
				?>
			</ul>
		</amp-sidebar>
		<div style="max-width: 600px; margin: 0 auto">
			<header>
				<a on="tap:sidebar.toggle" class="menu-bar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<a href="<?php echo BASEURL; ?>" class="logo_img"><amp-img src="<?php echo image_url.'images/FrontEnd/images/sm-mob-logo.png'; ?>" alt="" height="38" width="124"></amp-img></a>
				<div class="social-icons-n">
					<a target="_blank" href="https://www.facebook.com/samakalikamalayalam/"><amp-img src="<?php echo image_url.'images/amp-icons/facebook-is1.png'; ?>" alt="" height="24" width="24"></amp-img></a>
					<a target="_blank" href="https://twitter.com/samakalikam"><amp-img src="<?php echo image_url.'images/amp-icons/twitter-is.png'; ?>" alt="" height="24" width="24"></amp-img></a>
					<a target="_blank" href="https://www.instagram.com/samakalikamalayalam/"><amp-img src="<?php echo image_url.'images/amp-icons/instagram-is.png'; ?>" alt="" height="24" width="24"></amp-img></a>
				</div>
			</header>
			<nav>
				<?php
				foreach($menuDetails as $menu):
					if(strtolower($menu['Sectionname'])=='home'){
						$menu['Sectionname'] = '<i class="fa fa-home" aria-hidden="true"></i>';
					}
					echo '<a href="'.BASEURL.$menu['URLSectionStructure'].'">'.$menu['Sectionname'].'</a>';
				endforeach;
				?>
			</nav>
			<section>
				<p class="section-name"><?php echo $contentDetails['section_name']; ?></p>
				<h1 class="article-title"><?php echo stripslashes(strip_tags($contentDetails['title'], '</p>')) ?></h1>
				<p class="published-date"> <?php echo date('jS M Y h:i A',strtotime($contentDetails['publish_start_date'])) ?><?php if($contentDetails['author_name']!=''){ echo '&nbsp;|&nbsp;'.$contentDetails['author_name'];} ?></p>
				<?php
					if(isset($advUnit['after_title']) && $advUnit['after_title']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['after_title'].'</div>';
						echo '</div>';
					}
				?>
				<div class="social-icons">
					<amp-social-share type="email" width="32" height="32"></amp-social-share>
					<amp-social-share type="twitter" width="32" height="32"></amp-social-share>
					<amp-social-share type="facebook" width="32" height="32" data-param-app_id="272592156694146" ></amp-social-share>
					<amp-social-share type="pinterest" width="32" height="32"></amp-social-share>
					<amp-social-share type="tumblr" width="32" height="32"></amp-social-share>
					<amp-social-share type="linkedin" width="32" height="32"></amp-social-share>
					<amp-social-share type="whatsapp" width="32" height="32"></amp-social-share>
				</div>
				<?php
				if($contentDetails['article_page_image_path']!='' && $contentType==2){
					$image = str_replace(' ', "%20", $contentDetails['article_page_image_path']);
					if (getimagesize(image_url_no . imagelibrary_image_path . $image)){
						$imagedetails = getimagesize(image_url_no . imagelibrary_image_path.$image);
						$imagewidth = $imagedetails[0];
						$imageheight = $imagedetails[1];
						echo '<div class="article-image">';
						echo '<amp-img src="'.image_url . imagelibrary_image_path.$image.'" alt="'.strip_tags($contentDetails['article_page_image_alt']).'" height="'.$imageheight.'" width="'.$imagewidth.'" layout="responsive"></amp-img>';
						echo '</div>';
					}
				}
				?>
				<?php if($contentType==2 || $contentType==4): ?>
				<div class="article-content">
					<?php
						$content =  stripslashes($contentDetails['article_page_content_html']);
						$content = preg_replace('/<g[^>]*>/i', '', $content);
						$htmlContent = new domDocument;
						$htmlContent->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
						$htmlContent->preserveWhiteSpace = false; 
						$images = $htmlContent->getElementsByTagName('img');
						foreach($images as $img){
							$imgWidth = $img->getAttribute('width');
							$imgHeight = $img->getAttribute('height');
							if($imgWidth==''){	$img->setAttribute('width','356');	}
							if($imgHeight==''){	$img->setAttribute('height','300');	}
						}
						$content = $htmlContent->saveHTML();
						$content = str_replace(['<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">' ,'<html><body>' , '</body></html>'] ,['','',''] , $content);
						
						$this->amp_library->loadcontent($content);
						$finalcontent =  $this->amp_library->ampHTML();
						if(isset($advUnit['between_article']) && $advUnit['between_article']!='' && $contentType==2){
							$html = new domDocument;
							$html->loadHTML(mb_convert_encoding($finalcontent, 'HTML-ENTITIES', 'UTF-8'));
							$html->preserveWhiteSpace = false; 
							$ptag = $html->getElementsByTagName('p');
							$i=0;
							foreach ($ptag as $p){
								if($i==3){
									$elementhtml = $html->saveHTML($p);
									$advContent = "<span style=\"margin:0;\" class=\"scc-span\">ADVERTISEMENT</span><div class=\"scc-div\">".$advUnit['between_article']."</div>";
									$titleNode = $html->createElement("adv-block-widget-random");
									$titleNode->setAttribute('class','scc');
									$titleNode->nodeValue = $advContent;
									$p->appendChild($titleNode);
								}
								$i++;
							}
							$splittedContent = str_replace(['<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">' ,'adv-block-widget-random'] ,["" ,"div"] , $html->saveHTML());
							$finalcontent =  html_entity_decode($splittedContent);
						}
						if(isset($advUnit['between_article']) && $advUnit['between_article']!='' && $contentType==4){
							$finalcontent .= '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
							$finalcontent .= '<div class="scc-div">'.@$advUnit['between_article'].'</div>';
							$finalcontent .= '</div>';
						}
						echo $finalcontent;
						if($contentType==2){
							if($contentDetails['section_id']==731){
								echo '<h5 class="live-update-t">Live Updates</h5>';
								echo '<amp-live-list layout="container"  data-poll-interval="15000"			  data-max-items-per-page="5" id="amp-live-list-insert-blog">';
								echo '<button update  on="tap:amp-live-list-insert-blog.update">You have updates</button>';
								echo '<div items>';
								$FileName= $contentDetails['content_id'].'.json';
								$path='/var/www/html/dinamani_app/application/views/LIVENOW/';
								$Result=@file_get_contents($path.$FileName);
								$Result=json_decode($Result,true);
								$Result=array_reverse($Result['details']);
								$i=1;
								foreach($Result as $Data){
									if($Data['status']==1){
										$Date=explode(' ',$Data['date']);
										$Date=explode(':',$Date[1]);
										$Date=$Date[0].':'.$Date[1];
										$Time=strtotime($Data['date']);
										$Time=Date('M j',$Time);
										$this->amp_library->loadcontent($Data['content']);
										$Content = $this->amp_library->ampHTML();
										echo '<div id="post'.$i.'"   data-sort-time="'.strtotime($Data['date']).'"  class="blog-item live-content">';
										echo '<div class="time">'.$Date.' '.$Time.'</div>';
										echo '<h3 class="content_title">'.$Data['title'].'</h3>';
										echo '<div class="content_description">'.$Content.'</div>';
										echo '<div class="live-socialicons">';
										echo '<amp-social-share class="live-fb" type="facebook" data-param-app_id="1001847326609171" width="30" height="29" ></amp-social-share>';
										echo '<amp-social-share type="whatsapp" width="30" height="29"  data-param-text="CANONICAL_URL"></amp-social-share>';
										echo '<amp-social-share class="live-ti" type="twitter" width="30" height="29" ></amp-social-share>';
										echo '</div>';
										echo '</div>';
									}
									$i++;
								}
								echo '</div>';
								echo '</amp-live-list>';
							}
						}
					?>
				</div>
				<?php endif; ?>
				
				<?php if($contentType==3): ?>
				<div class="article-content">
					<?php
					$galleryadvs = [];
					if(isset($advUnit['between_gallery_images']) && $advUnit['between_gallery_images']!=''){
						$galleryadvs  = explode(',' , $advUnit['between_gallery_images']);
					}
					$i=1;
					$j=1;
					$ga = 0;
					$galleryCount = count($galleryRelatedDetails);
					foreach($galleryRelatedDetails as $galleryImages):
						if($galleryImages['gallery_image_path']!=''){
							$image = str_replace(' ', "%20", $galleryImages['gallery_image_path']);
							$imagedetails = getimagesize(image_url_no.imagelibrary_image_path.$image);
							$imagewidth = $imagedetails[0];
							$imageheight = $imagedetails[1];
							echo '<figure class="gallery-items">';
							echo '<div>'.$i.' / <span>'.$galleryCount.'</span></div>';
							echo '<amp-img src="'.image_url . imagelibrary_image_path.$image.'" alt="'.strip_tags($galleryImages['gallery_image_alt']).'" height="'.$imageheight.'" width="'.$imagewidth.'" layout="responsive"></amp-img>';
							echo '<figcaption>'.strip_tags($galleryImages['gallery_image_title']).'</figcaption>';
							echo '</figure>';
							$i++;
							if($j==2){
								if(isset($galleryadvs[$ga]) && $galleryadvs[$ga]!=''){
									echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
									echo '<div class="scc-div">'.@$galleryadvs[$ga].'</div>';
									echo '</div>';
								}
								$ga++;
								$j=1;
							}else{
								$j++;
							}
						}
						
					endforeach;
					?>
				</div>
				<?php endif; ?>	
				
				<?php if($contentDetails['tags']!=''): ?>
				<div class="tags">
					<span>Tags : </span>
					<?php
					$Tags=explode(',',$contentDetails['tags']);
					for($i=0;$i<count($Tags);$i++):
						if($Tags[$i]!=''):
							$tag_title = join( "_",( explode(" ", trim($Tags[$i]) ) ) );
							$tag_url_title = mb_ereg_replace('/[^A-Za-z0-9\_]/', '', $tag_title); 
							$TagUrl=BASEURL.'topic/'.$tag_url_title;
							echo '<a href="'.$TagUrl.'">'.$Tags[$i].'</a>';
						endif;
					endfor;
					?>
				</div>
				<?php endif; ?>
				<amp-web-push id="amp-web-push" layout="nodisplay" helper-iframe-url="https://www.samakalikamalayalam.com/helper-iframe.html" permission-dialog-url="https://www.samakalikamalayalam.com/permission-dialog.html" service-worker-url="https://www.samakalikamalayalam.com/service-worker.js" > </amp-web-push> <!-- Subscription widget --> <div class="align-center-button"> <amp-web-push-widget visibility="unsubscribed" layout="fixed" width="250" height="45"> <button class="subscribe" on="tap:amp-web-push.subscribe"> <amp-img class="subscribe-icon" width="18" height="18" layout="fixed" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTYgMjU2Ij48dGl0bGU+UHVzaEFsZXJ0PC90aXRsZT48ZyBpZD0iRm9ybWFfMSIgZGF0YS1uYW1lPSJGb3JtYSAxIj48ZyBpZD0iRm9ybWFfMS0yIiBkYXRhLW5hbWU9IkZvcm1hIDEtMiI+PHBhdGggZD0iTTEzMi4wNywyNTBjMTguNjIsMCwzMy43MS0xMS41MywzMy43MS0yMUg5OC4zNkM5OC4zNiwyMzguNDIsMTEzLjQ2LDI1MCwxMzIuMDcsMjUwWk0yMTksMjAwLjUydjBhNTcuNDIsNTcuNDIsMCwwLDEtMTguNTQtNDIuMzFWMTE0LjcyYTY4LjM2LDY4LjM2LDAsMCwwLTQzLjI0LTYzLjU1VjM1LjlhMjUuMTYsMjUuMTYsMCwxLDAtNTAuMzIsMFY1MS4xN2E2OC4zNiw2OC4zNiwwLDAsMC00My4yMyw2My41NXY0My40NmE1Ny40Miw1Ny40MiwwLDAsMS0xOC41NCw0Mi4zMXYwYTEwLjQ5LDEwLjQ5LDAsMCwwLDYuNTcsMTguNjdIMjEyLjQzQTEwLjQ5LDEwLjQ5LDAsMCwwLDIxOSwyMDAuNTJaTTEzMi4wNyw0NS40MmExMS4zMywxMS4zMywwLDEsMSwxMS4zNi0xMS4zM0ExMS4zMywxMS4zMywwLDAsMSwxMzIuMDcsNDUuNDJabTczLjg3LTE3LjY3LTYuNDUsOS43OGE4My40Niw4My40NiwwLDAsMSwzNi4xNSw1NC43N2wxMS41My0yLjA2YTk1LjIzLDk1LjIzLDAsMCwwLTQxLjIzLTYyLjVoMFpNNjQuNDYsMzcuNTJMNTgsMjcuNzVhOTUuMjMsOTUuMjMsMCwwLDAtNDEuMjMsNjIuNWwxMS41MywyLjA2QTgzLjQ2LDgzLjQ2LDAsMCwxLDY0LjQ1LDM3LjU0aDBaIiBmaWxsPSIjZmZmIi8+PC9nPjwvZz48L3N2Zz4="> </amp-img> Subscribe to Notifications </button> </amp-web-push-widget> </div>
				<?php
					if(isset($advUnit['after_tags']) && $advUnit['after_tags']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['after_tags'].'</div>';
						echo '</div>';
					}
				?>
				<?php if(count($moreStories) > 0): ?>
				<div class="more-from-section">
					<h3><span>MORE FROM THE SECTION</span></h3>
					<div class="more-stories">
						<?php
						foreach($moreStories as $stories):
							$title = stripslashes(strip_tags($stories['title'], '</p>'));
							$image = str_replace(' ', "%20", $stories['article_page_image_path']);
							$image_alt = strip_tags($stories['article_page_image_alt']);
							if (getimagesize(image_url_no . imagelibrary_image_path . $image )&& $image!=''){
								$image = image_url . imagelibrary_image_path. str_replace('/original' ,'/w600X390',$image);
							}else{
								$image = image_url . imagelibrary_image_path. 'logo/nie_logo_600X390.jpg';
							}
							$url = MOBILEURL. str_replace('.html' , '.amp' , $stories['url']);
							echo '<div class="items">';
							echo '<a href="'.$url.'"><amp-img src="'.$image.'" alt="'.$image_alt.'" height="390" width="600" layout="responsive"></amp-img></a>';
							echo '<a href="'.$url.'"><h4>'.$title.'</h4></a>';
							echo '</div>';
						endforeach;
						?>
					</div>
				</div>
				<?php endif; ?>
				<?php
					if(isset($advUnit['between_msection']) && $advUnit['between_msection']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['between_msection'].'</div>';
						echo '</div>';
					}
				?>

				<amp-ad width=1 height=1    type="doubleclick"     data-slot="/3167926/SKP_AMP_Interstitial_1x1"> </amp-ad>
			<amp-sticky-ad layout="nodisplay">
				<amp-ad width="320" height="250" type="doubleclick" data-slot="/3167926/SKP_AMP_Sticky_320x50" rtc-config='{"vendors": { "aps": {"PUB_ID": "600", "PUB_UUID":"c3703fef-358e-4353-a111-eb049ab39167", "PARAMS":{"amp":"1"}} }}'></amp-ad>
			</amp-sticky-ad>
			</section>
			<footer>
				<p>Copyright - samakalikamalayalam.com<?php echo ' '.date('Y') ?> </p>
				<a href="https://www.newindianexpress.com/" rel="follow">The New Indian Express | </a>
				<a href="https://www.dinamani.com/" rel="follow">Dinamani | </a>
				<a href="https://www.kannadaprabha.com/" rel="follow">Kannada Prabha | </a>
				<a href="https://www.edexlive.com/" rel="follow">Edexlive | </a>
				<a href="https://www.indulgexpress.com/" rel="follow">Indulgexpress  | </a>
				<a href="https://www.cinemaexpress.com/" rel="follow">Cinemaexpress | </a>
				<a href="http://www.eventxpress.com/" rel="follow">Event Xpress  </a>
			</footer>
		</div>	
	</body>
</html> 