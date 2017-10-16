<?php
echo "多维数组<br>";
$demo[0][0]="A1";
$demo[0][1]="A2";
$demo[0][2]="A3";

$demo[1][0]="B1";
$demo[1][1]="B2";
$demo[1][2]="B3";

for($row=0;$row<2;$row++){
	for($column=0;$column<3;$column++){
		echo $demo[$row][$column];
	}
	echo '<br>';
}

echo '<hr>';

$products=array(array('TIR','Tires','100'),
	            array('OIL','Oil','10'),
	            array('SPK','spark plugs','4')
	);

for($row=0;$row<3;$row++){
	for($column=0;$column<3;$column++){
		echo $products[$row][$column];
	}
	echo '<br>';
}

echo '<hr>';

$pro=array(array('Code'=>'TIR',
				 'Description'=>'Tires',
				 'Prices'=>'100'),
	       array('Code'=>'OIL',
	             'Description'=>'Oil',
	             'Prices'=>'10'),
	       array('Code'=>'SPK',
	        	 'Description'=>'spark plugs',
	        	 'Prices'=>'4')
	);

for($row=0;$row<3;$row++){
		echo $pro[$row]['Code'].
		     $pro[$row]['Description'].
		     $pro[$row]['Prices'].'<br>';
}

echo '<hr>';

$categories = array(array( 
	                      array('TIR','Tires','100'),
	                      array('OIL','Oil','10'),
	                      array('SPK','spark plugs','4')
	          ),
	                array(
	                	  array('VAN_TIR','Tires','120'),
	                      array('VAN_OIL','Oil','15'),
	                      array('VAN_SPK','spark plugs','6')
	          ),
	                array(
	                	  array('TRK_TIR','Tires','125'),
	                      array('TRK_OIL','Oil','17'),
	                      array('TRK_SPK','spark plugs','9')
              )
       );
for($layer=0;$layer<3;$layer++){//层
   for($row=0;$row<3;$row++){//行
	  for($column=0;$column<3;$column++){//列
	  	 echo $categories[$layer][$row][$column];
	  	      }
	  	echo '<br>';
	     }
	  echo "<br>";
	}
