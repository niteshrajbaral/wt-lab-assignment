<?php
$arr_gces=[
    "non-acedamic"=>[
        ["name"=>"nitesh",
        "add"=>"chinnedada",
        "phone"=>[9856085888,9867695601]
    ],

     [ "name" => "raj",
        "add"=>"vedifarm",
        "phone"=>[9856085888,9867695601]]
],
    "acedamic"=>[
        ["name"=>"hari",
        "add"=>"bharatpur",
        "phone"=>[9856085888,9867695601]
    ],

        ["name"=>"ram",
        "add"=>"biratnagar",
        "phone"=>[9856085888,9867695601]
        ]
    ]
];
foreach ($arr_gces as $staffType => $v1) {
  
    echo "<table border ='1px' cellpadding='5px' style='border-collapse: collapse;'>";
    echo ucfirst($staffType);

    echo "<br><br>";
    echo "<tr >";
    if ($staffType == "academics") {


        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
        echo "<th>Subjects</th>";
    } else {
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
    }
    echo "</tr>";

    foreach ($v1 as $v2 => $v3) {

        echo "<tr>";
        foreach ($v3 as $v4 => $v5) {
        
            if (is_array($v5)) {
                echo "<td>";
                
                foreach ($v5 as $v6 => $v7) {


                    echo " " .  $v7 . " ";
                }

                echo "</td>";
            } else {
                echo "  <td>$v5  </td>";
            }
        }
        echo "</tr>";
    }

    echo "</table> <br><br>";
}


echo "<pre>";
print_r($arr_gces);
echo "<pre>";
?>