<?php

// Martin Robertson, 20210930
// mansionhouseprojects@gmail.com

/*
Brief says "code to generate the output should be done in PHP"

so I generated HTML markup here, instead of delegating to the client-side JS - which I would have preferred.
data source purely providing data & leaving render to the requesting presentation layer.

example of a 'data only' JSON resultset
[
	{"copy":"1", "colour":"white"},
	{"copy":"2", "colour":"white"},
	{"copy":"Coating Damage", "colour":"yellow"},
]
*/

function inspect($n)
{
	if ($n % 15 == 0) { return "<li><span style='background-color:red;'>Coating Damage and Lightning Strike</span></li>"; }
	if ($n %  3 == 0) { return "<li><span style='background-color:yellow'>Coating Damage</span></li>"; }
	if ($n %  5 == 0) { return "<li><span style='background-color:orange'>Lightning Strike</span></li>"; }
                        return "<li><span style='background-color:white'>$n</span></li>";

//	if ($n % 15 == 0) { return Array("copy"=>"Coating Damage and Lightning Strike", "colour"=>"red"); }
//	if ($n %  3 == 0) { return Array("copy"=>"Coating Damage",                      "colour"=>"yellow"); }
//	if ($n %  5 == 0) { return Array("copy"=>"Lightning Strike",                    "colour"=>"orange"); }
//	                    return Array("copy"=>$n,                                    "colour"=>"white");
}

// I love anonymous array maps, reducing memory overhead;
// happy to concede this maybe better written long form for ease of maintenance
echo json_encode(array_map('inspect', range(1,100,1)));

?>