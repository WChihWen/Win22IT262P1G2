<?php
class TemperatureConversion {
    public $temp;
    public $type;  
    // Methods
    function set_Temperature($Temperature) {
        $this->temp = $Temperature;
    }
    function get_Temperature() {
        return $this->temp;
    }

    function set_ConvertType($ConvertType) {
        $this->type = $ConvertType;
    }
    function get_ConvertType() {
        return $this->type;
    }

    function get_convertResult(){
        switch ($this->type) {    
            case 'CtoF':
                $this->result = round(9 / 5 * ($this->temp) + 32, 2);                 
                break;
            case 'CtoK':
                $this->result = round($this->temp + 273, 2);                               
                break;
            case 'FtoC':
                $this->result = round(5 / 9 * ($this->temp - 32), 2);                                
                break;         
            case 'FtoK':
                $this->result = round(5 / 9 * ($this->temp - 32) + 273, 2);                         
                break;
            case 'KtoC':
                $this->result = round($this->temp - 273, 2);                                      
                break;
            case 'KtoF':
                $this->result = round(9 / 5 * ($this->temp - 273) + 32, 2);                         
                break;            
        }
        return $this->result;
    }    
}
