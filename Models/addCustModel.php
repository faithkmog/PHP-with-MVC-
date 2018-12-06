<?php

class Admin {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
    public function getVehicle()
    {
        $vehicle = "select  dv_reg_no, concat(dv_reg_no,' ',make,' ',model,' ',series) as vehicle"
            ." from tbldealer de, tbladministrator ad, dealer_vehicle dv, tblmake ma, tblmodel mo, tblseries se, tblvehicle v"
            ." where v.s_series_id = se.series_id"
            ." and v.m_make_id = ma.make_id"
            ." and v.m_model_id = mo.model_id"
            ." and dv.v_vehicle_id = v.v_vehicle_id"
            ." and ad.d_dealer_id = de.d_dealer_id"
            ." and dv.d_dealer_id = de.d_dealer_id";
			
        $db = Db::getInstance();
        $list = array();
        
        $execute = $db->query($vehicle);
        
        foreach ($execute->fetchAll() as $veh)
        {
            $list[]= new Admin($veh['dv_reg_no'],$veh['vehicle']);
        }
        return $list;
    }
    
       public function getFeature()
    {
        $feature = "select f_feature_id, f_feature_desc from tblfeature";
        $db = Db::getInstance();
        $list = array();
        
        $execute = $db->query($feature);
        
        foreach ($execute->fetchAll() as $feat)
        {
            $list[]= new Admin($feat['f_feature_id'],$feat['f_feature_desc']);
        }
        return $list;
    }
    
    public static function addFeature($feature, $vehicle)
    {
         $sql = "insert into dv_feature(f_feature_id, dv_reg_no)"
         ." values ('$feature', '$vehicle')";
         $db = Db::getInstance();
         $execute = $db->query($sql);
         
         
         
    }
    
    public static function getSpecificCar()
    {
              $sql = "select v_vehicle_id, concat(make,' ',model,' ',series) AS VEHICLE"
                   ." from tblmake ma, tblmodel mo, tblseries se, tblvehicle ve"
                   ." where ma.make_id = ve.m_make_id"
                   ." and mo.model_id = ve.m_model_id"
                   ." and se.series_id = ve.s_series_id";
                   
              $db = Db::getInstance();
              $sqlExecute = $db->query($sql);
              $list = array();
              
              foreach ($sqlExecute->fetchAll() as $data)
              {
                 $list[] = new Admin($data['v_vehicle_id'], $data['VEHICLE']); 
              }
              return $list;
    }
    
    public static function addAcar($reg, $veId, $dealeId, $dvPrice, $mileage, $image,$colour, $year  )
    {
        $sql = "insert into dealer_vehicle (dv_reg_no,v_vehicle_id, d_dealer_id, dv_price, dv_mileage, dv_image, dv_colour, dv_year) "
        . "values ('$reg',$veId,$dealeId,'$dvPrice','$mileage','$image','$colour','$year')" ;
        
        $db = Db::getInstance();
        try 
        {
            $execute = $db->query($sql);
        } 
        catch (Exception $ex) 
        {
          
            echo '<td>';
            echo '<font color=blue size 1>  CHECK THE FOLLOWING ERROR</font><br>';
            echo '<font color = red size =3>**please choose the different registration</font> ';
            echo '</td>';
        }
       
        
    }
    
  
    
   

}

