<?php
class A implements Serializable{	
    public function serialize ()	{ 
        $serialized = array(); 
        foreach($this as $prop => $val) { 
            $serialized[$prop] = $val; 
        }	
        return serialize($serialized); 
   }	
   public function unserialize($serialized)	{
        foreach(unserialize($serialized) as $prop => $val) {	
             $this->$prop = $val;	
        }	
        return true;	
   }
}
class B extends A{	public $A;}
class C extends A{	public $A;	public $B;}
$oC = new C();
$oC->A = new A();
$oC->B = new B();
$oC->B->A = $oC->A;
echo $oC->A === $oC->B->A ? "yes" : "no", "\n";
$ser = serialize($oC);
$new_oC = unserialize($ser);
echo $new_oC->A === $new_oC->B->A ? "yes" : "no", "\n"; 
