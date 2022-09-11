<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap_controller extends CI_Controller {

	public function __construct() 
	{		
		parent::__construct();
		$CI = &get_instance();
		//setting the second parameter to TRUE (Boolean) the function will return the database object.
		$this->live_db = $CI->load->database('live_db', TRUE);
		
		$CI = &get_instance();
		//setting the second parameter to TRUE (Boolean) the function will return the database object.
		$this->archive_db = $CI->load->database('archive_db', TRUE);
		$this->load->library("memcached_library");
	} 
	public function sitemap(){
		header('Content-type: application/xml');
		if(count($_GET) ==0){
			$data =[];
			echo $this->load->view("sitemap_custom",$data,true);
			exit;
		}else{
			if(count($_GET) ==3){
				$year = $_GET['yyyy'];
				$month = $_GET['mm'];
				$date = $_GET['dd'];
				$startDate = $year.'-'.$month.'-'.$date.' 00:00:00';
				$endDate = $year.'-'.$month.'-'.$date.' 23:59:59';
				$archiveArticleList = $archiveGalleryList = $archiveVideoList = [];
				$articleQuery = "SELECT url , last_updated_on FROM article WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW() AND section_id NOT IN(715,711) ORDER BY last_updated_on DESC";
				if(!$this->memcached_library->get($articleQuery) && $this->memcached_library->get($articleQuery) == ''){
					$liveArticleList = $this->live_db->query($articleQuery)->result_array();
					$this->memcached_library->add($articleQuery,$liveArticleList);
				}else{
					$liveArticleList = $this->memcached_library->get($articleQuery);
				}
				
				$archiveTableName ='article_'.$year;
				if($this->archive_db->table_exists($archiveTableName)){

					$articleArchiveQuery ="SELECT url , last_updated_on FROM ".$archiveTableName." WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW() AND section_id NOT IN(715,711) ORDER BY last_updated_on DESC";
					if(!$this->memcached_library->get($articleArchiveQuery) && $this->memcached_library->get($articleArchiveQuery) == ''){
						$archiveArticleList = $this->archive_db->query($articleArchiveQuery)->result_array();
						$this->memcached_library->add($articleArchiveQuery,$archiveArticleList);
					}else{
						$archiveArticleList = $this->memcached_library->get($articleArchiveQuery); 
					}
				}
				$data['articleList'] = array_merge($liveArticleList ,$archiveArticleList);
				
				$galleryQuery = "SELECT url , last_updated_on FROM gallery WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW()  ORDER BY last_updated_on DESC";
				if(!$this->memcached_library->get($galleryQuery) && $this->memcached_library->get($galleryQuery) == ''){
					$liveGalleryList = $this->live_db->query($galleryQuery)->result_array();
					$this->memcached_library->add($galleryQuery,$liveGalleryList);
				}else{
					$liveGalleryList = $this->memcached_library->get($galleryQuery);
				}
				$archiveGalleryTableName ='gallery_'.$year;
				if($this->archive_db->table_exists($archiveGalleryTableName)){
					$galleryArchiveQuery ="SELECT url , last_updated_on FROM ".$archiveGalleryTableName." WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW() ORDER BY last_updated_on DESC";
					if(!$this->memcached_library->get($galleryArchiveQuery) && $this->memcached_library->get($galleryArchiveQuery) == ''){
						$archiveGalleryList = $this->archive_db->query($galleryArchiveQuery)->result_array();
						$this->memcached_library->add($galleryArchiveQuery,$archiveGalleryList);
					}else{
						$archiveGalleryList = $this->memcached_library->get($galleryArchiveQuery);
					}
				}
				$data['galleryList'] = array_merge($liveGalleryList ,$archiveGalleryList);
				$videoQuery = "SELECT url , last_updated_on FROM video WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW()  ORDER BY last_updated_on DESC";
				if(!$this->memcached_library->get($videoQuery) && $this->memcached_library->get($videoQuery) == ''){
					$liveVideoList = $this->live_db->query($videoQuery)->result_array();
					$this->memcached_library->add($videoQuery,$liveVideoList);
				}else{
					$liveVideoList = $this->memcached_library->get($videoQuery);
				}
				$archiveVideoTableName ='video_'.$year;
				if($this->archive_db->table_exists($archiveVideoTableName)){
					$videoArchiveQuery ="SELECT url , last_updated_on FROM ".$archiveVideoTableName." WHERE publish_start_date BETWEEN '".$startDate."' AND '".$endDate."' AND status='P' AND publish_start_date < NOW() ORDER BY last_updated_on DESC";
					if(!$this->memcached_library->get($videoArchiveQuery) && $this->memcached_library->get($videoArchiveQuery) == ''){
						$archiveVideoList = $this->archive_db->query($videoArchiveQuery)->result_array();
						$this->memcached_library->add($videoArchiveQuery,$archiveVideoList);
					}else{
						$archiveVideoList = $this->memcached_library->get($videoArchiveQuery);
					}
				}
				$data['videoList'] = array_merge($liveVideoList ,$archiveVideoList);
				echo $this->load->view("sitemap_custom_article",$data,true);
			}
		}
	}
	public function new_sitemap() {
		header('Content-type: application/xml');
		$LatestNews=@$this->input->get('latest');
		$CacheID = "SITEMAP- SELECT title,publish_start_date,tags,last_updated_on,url FROM article ORDER BY publish_starte_date desc LIMIT 1000";
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$this->live_db->select("title,publish_start_date,tags,last_updated_on,url,article_page_image_path");
			$this->live_db->from("article");
			//$this->live_db->where("publish_start_date < NOW()");	
			$this->live_db->where("publish_start_date < NOW() AND publish_start_date > NOW() - INTERVAL 48 HOUR AND status='P'");	
			$this->live_db->order_by("last_updated_on","desc");
			$this->live_db->limit("1000");	
			$get = $this->live_db->get();	
			$live_result = $get->result_array();						
			$this->memcached_library->add($CacheID,$live_result);
		}else{	
			$live_result = $this->memcached_library->get($CacheID);
		}
		$data['new_articles'] = $live_result; 
		$data['xml_type'] = "new_sitemap";
		echo $this->load->view("new_sitemap_view",$data,true);		
	}	
}?>