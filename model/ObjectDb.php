<?php
class ObjectDb
{
    
    //constructor
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    //hydrate
    public function hydrate(array $data)
    {
		foreach($data as $key => $value)
        {
            if (preg_match("#[A-Za-z_]#", $key))
            {
                
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method))
                {
                    $this->$method($value);
                }
            }
            
            
            
        }
    }
    
}
