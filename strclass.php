<?php
ini_set('display_errors',1);
Class CustomStr{

    function mystrlen($str)
	{
		$count = 0;
		$limit=1;
		for($i=0; $i<$limit; $i++)
		{
			if(@$str[$i] != "")
			{
				$count++;
				$limit++;
			}	
			else {
				break;
			}	
		}
		return $count;
	}
    
    function mystr_rev($str)
	{
		//$count = strlen($str);
        $count= $this->mystrlen($str);
  		$str_rev=null;
		for($i=$count-1; $i>=0; $i--)
		{
			$str_rev.=$str[$i];
			$count--;
		}
		return $str_rev;
	}

	function mystr_indexof($str,$fnd)
	{
		//$count = strlen($str);
        $count= $this->mystrlen($str);
        $count_fnd= $this->mystrlen($fnd);
  		$key=null;
		for($i=0; $i<$count; $i++)
		{
			for($j=0; $j<$count_fnd; $j++)
			{
					if( $str[$i] == $fnd[$j]){
						$key=$i; break;
					}
			}
		}
		
		return $key;
	}


}

$c= new CustomStr;
 //echo "STRING LENGTH:".$c->mystrlen('');
 //echo "STRING REVERSE:".$c->mystr_rev('Anand Lagad');
echo "STRING INDEX:".$c->mystr_indexof('ANANDLAGAD','LA');

?>