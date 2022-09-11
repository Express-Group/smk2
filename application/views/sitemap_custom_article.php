<?xml version="1.0" encoding="utf-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:n="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php
$baseUrl =base_url();
for($i=0;$i<count($articleList);$i++){
	$url =  $baseUrl.str_replace(['&zwnj;' ,'&minus;' ,'&ocirc;' ,'&ldquo;' ,'&rdquo;' ,'&uacute;','&pound;' , '&uuml;'] , '',$articleList[$i]['url']);
	$url = str_replace('.html' ,'.amp',$url);
	$lastUpdatedDate = new DateTime(@$articleList[$i]['last_updated_on']);
?>
<url>
<loc><?php echo $url; ?></loc>
<lastmod><?php echo $lastUpdatedDate->format('Y-m-d\TH:i:s+05:30') ?></lastmod>
<changefreq>monthly</changefreq>
<priority>0.7</priority>
</url>
<?php
}
?>
<?php
for($i=0;$i<count($galleryList);$i++){
	$url =  $baseUrl.str_replace(['&zwnj;' ,'&minus;' ,'&ocirc;' ,'&ldquo;' ,'&rdquo;','&uacute;','&pound;' , '&uuml;'] , '',$galleryList[$i]['url']);
	$url = str_replace('.html' ,'.amp',$url);
	$lastUpdatedDate = new DateTime(@$galleryList[$i]['last_updated_on']);
?>
<url>
<loc><?php echo $url; ?></loc>
<lastmod><?php echo $lastUpdatedDate->format('Y-m-d\TH:i:s+05:30') ?></lastmod>
<changefreq>monthly</changefreq>
<priority>0.7</priority>
</url>
<?php
}
?>
<?php
for($i=0;$i<count($videoList);$i++){
	$url =  $baseUrl.str_replace(['&zwnj;' ,'&minus;' ,'&ocirc;' ,'&ldquo;' ,'&rdquo;','&uacute;' ,'&pound;' , '&uuml;'] , '',$videoList[$i]['url']);
	$url = str_replace('.html' ,'.amp',$url);
	$lastUpdatedDate = new DateTime(@$videoList[$i]['last_updated_on']);
?>
<url>
<loc><?php echo $url; ?></loc>
<lastmod><?php echo $lastUpdatedDate->format('Y-m-d\TH:i:s+05:30') ?></lastmod>
<changefreq>monthly</changefreq>
<priority>0.7</priority>
</url>
<?php
}
?>
</urlset>