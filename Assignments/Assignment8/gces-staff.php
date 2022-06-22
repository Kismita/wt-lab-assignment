<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 
echo "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGandaki College of Engineering & Science</h1>";

$gcesStaffs = [
	"Academic" => [
		[
			"name" => "Kismita Gurung",
			"address" => "Pokhara",
			"phones" => ["9856011111", "9835423045"],
			"subjects" => ["MFCS", "Logic Circuit"]
		],
		[
			"name" => "Asha Gurung",
			"address" => "Kathmandu",
			"phones" => ["9856022222","9834523440"],
			"subjects" => ["Web Technology", "JAVA"]
		],
		[
			"name" => "Pabi Thapa",
			"address" => "Chitwan",
			"phones" => ["9856033333","98043234454"],
			"subjects" => ["Physics", "PST"]
		]
	],
	"Non-academic" => [
		[
			"name" => "Anusha Gurung",
			"address" => "Mustang",
			"phones" => ["9856044444","9803456234"],
		],
		[
			"name" => "Yukey Pun",
			"address" => "Jomsom",
			"phones" => ["9856055555","98056342345"],
		],
        [
            "name" => "Ram Parsad Ghimire",
			"address" => "Africa",
			"phones" => ["9856044444","98034523556"],
        ],
	]
];

//Table
echo '<table border="2" cellspacing="20" cellpadding="15" bordercolor="Red">';
//Header
echo '<tr bgcolor="Yellow"><th>Type</th><th>Name</th><th>Address</th><th>Phone</th><th>Subjects</th></tr>';
foreach($gcesStaffs as $staffType => $staffDetails){
 
	foreach($staffDetails as $key => $staff ){
		//TR START
	  echo "<tr bgcolor='mediumseagreen'>";
      echo "<td bgcolor='pink'>$staffType</td>";
      echo "<td bgcolor='gray'>$staff[name]</td>";
      echo "<td bgcolor='orange'>$staff[address]</td>";
	  echo "<td>";
      foreach ($staff["phones"] as $phone){
          echo "$phone&nbsp&nbsp&nbsp  </br>";
      }
    echo "</td>";
    echo "<td>";
	
    if(array_key_exists('subjects', $staff)){
		
      foreach ($staff["subjects"] as $subject){
        echo "$subject &nbsp &nbsp &nbsp<br>";
      }
    }
    echo "</td>";
	echo "</tr>";
	//TR END 
  }
}
echo "</table>";
//Table END

?>
</body>
</html>