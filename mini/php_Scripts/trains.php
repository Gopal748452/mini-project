<?php
class trains_app {
   	
   	public $train_no;
	public $api_key;
	public $url;
	public $train_list;
    
  public function __construct(){
		$this->api_key = 'thvps1200';
  }

public function station_by_name(){
 $this->station_name = $_POST['station_name'];
 $this->url =   'http://api.railwayapi.com/name_to_code/station/'+$this->station_name+'/apikey/'+$this->api_key;
 $this->station_list = file_get_contents($this->url); 
echo  $this->station_list;
}
	public function train_route(){

$this->train_no = $_POST['train_no'];
$this->url = 'http://api.railwayapi.com/route/train/'.$this->train_no .'/apikey/'.$this->api_key;
$this->train_list = file_get_contents($this->url); 
echo  $this->train_list;
	}
}

$obj = new trains_app;
if($_POST['fun'] == 'train_route'){
$obj->train_route();
}
if($_POST['fun'] == 'train_btw_station'){
$obj->train_btw_station();

}

