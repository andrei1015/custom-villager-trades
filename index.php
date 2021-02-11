<?php
include("header.html");
?>

<body>
<div class="container">
<div class="row justify-content-center logo-image">
<div class="logo">
<a href="advanced.php">
<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxwYXRoIGQ9Ik00MiwxMkgxOEM4LjA3NSwxMiwwLDIwLjA3NSwwLDMwczguMDc1LDE4LDE4LDE4aDI0YzkuOTI1LDAsMTgtOC4wNzUsMTgtMThTNTEuOTI1LDEyLDQyLDEyeiBNNDIsNDZIMTggICBDOS4xNzgsNDYsMiwzOC44MjIsMiwzMHM3LjE3OC0xNiwxNi0xNmgyNGM4LjgyMiwwLDE2LDcuMTc4LDE2LDE2UzUwLjgyMiw0Niw0Miw0NnoiIGZpbGw9IiNEODAwMjciLz4KCTxwYXRoIGQ9Ik0xOCwxN2MtNy4xNjgsMC0xMyw1LjgzMi0xMywxM3M1LjgzMiwxMywxMywxM3MxMy01LjgzMiwxMy0xM1MyNS4xNjgsMTcsMTgsMTd6IE0xOCw0MWMtNi4wNjUsMC0xMS00LjkzNS0xMS0xMSAgIHM0LjkzNS0xMSwxMS0xMXMxMSw0LjkzNSwxMSwxMVMyNC4wNjUsNDEsMTgsNDF6IiBmaWxsPSIjRDgwMDI3Ii8+Cgk8cGF0aCBkPSJNNDguMjkzLDI1LjI5M0w0MSwzMi41ODZsLTMuMjkzLTMuMjkzYy0wLjM5MS0wLjM5MS0xLjAyMy0wLjM5MS0xLjQxNCwwcy0wLjM5MSwxLjAyMywwLDEuNDE0bDQsNCAgIEM0MC40ODgsMzQuOTAyLDQwLjc0NCwzNSw0MSwzNXMwLjUxMi0wLjA5OCwwLjcwNy0wLjI5M2w4LThjMC4zOTEtMC4zOTEsMC4zOTEtMS4wMjMsMC0xLjQxNFM0OC42ODQsMjQuOTAyLDQ4LjI5MywyNS4yOTN6IiBmaWxsPSIjRDgwMDI3Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
advanced off</a>
</div>
</div>
		<div class="row">
		<div class="col">
<div class="isa_success">
<div class="title">Info</div>
	<ul>
		<li>I strongly recommend copying what you fill in the fields to a file, in case you need to regenerate</li>
		<li>Everything gets randomized</li>
		<li>When listing minecraft IDs, player names, quantities or anything, the <strong>space after each comma</strong> is very important!</li>
		<li>Scroll for the generated command</li>
		<li>Generating might take a while. And I mean it. Give it a bit of time.</li>
		<li>Invalid data (even the format) will display some php error (I did close to zero error handling on this side) and generate an invalid/incomplete command</li>
	</ul>
</div>
</div>

		<div class="col">
		<form enctype="multipart/form-data" action="" method="POST" class="form-style-7">
		<ul>
			<li>
				<label for="villagername">Villager's Name</label>
				<span class="tooltips"><span class="action"></span><span class="text">This is the name of the villager, which will appear above his head and in the trading UI. The UI seems to be able to display 27 characters, more and you'll have nasty text ouside of the box</span></span>
				<input type="text" name="villagername" value="Custom Heads Villager"/>
				
			</li>
			<li>
				<label for="villagercolor">Villager Name's Color</label>
				<span class="tooltips"><span class="action"></span><span class="text">The color given to the Villager's name</span></span>
				<select name="villagercolor">
					<option value="dark_red">Dark Red</option>
					<option value="red">Red</option>
					<option value="gold" selected>Gold</option>
					<option value="yellow">Yellow</option>
					<option value="dark_green">Dark Green</option>
					<option value="green">Green</option>
					<option value="aqua">Aqua</option>
					<option value="dark_aqua">Dark Aqua</option>
					<option value="dark_blue">Dark Blue</option>
					<option value="blue">Blue</option>
					<option value="light_purple">Light Purple</option>
					<option value="dark_purple">Dark Purple</option>
					<option value="white">White</option>
					<option value="gray">Gray</option>
					<option value="dark_gray">Dark Gray</option>
					<option value="black">Black</option>
				</select>
				
			</li>
		<li>
				<label for="villagercolor">Villager's Face</label>
				<span class="tooltips"><span class="action"></span><span class="text">Go to <a href="https://minecraft-heads.com/" target="_blank"> a site like this</a> and paste the yellow marked ID and the texture value from the Other > <a href="images/mcheads.png" target="_blank">Value</a> field</span></span>
				<input type="text" placeholder="Villager Face ID" name="villagerfaceid" value="846d87ec-e66f-4e90-9190-2d8de87746c0"/>
				<input type="text" placeholder="Villager Face Value" name="villagerface" value="eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvNGUyODQ2MGI3MDZkYzZhNDg1ZGVmNjNjNTU2MTljZGIxMWE5NjVhYWVhYTNhOTllNTUzODljYTRjZjkifX19"/>
				
		</li>
		<li>
				<label for="villagercusto">Customize your Villager</label><br />
				<input type="checkbox" id="silent" name="silent" value="silent" checked /> Silent?
				<input type="checkbox" id="visible_name" name="visible_name" value="visible_name"/> Custom Name visible?
				<input type="checkbox" id="persistent" name="persistent" value="persistent" checked /> Persistent?
				<input type="checkbox" id="invulnerable" name="invulnerable" value="invulnerable" checked /> Invulnerable?<br />
				Profession (<a href="https://minecraft.gamepedia.com/Villager#Professions_and_careers" target="_blank">color</a> of his robes):
				<select name="villagerprofession">
					<option value="0">Farmer</option>
					<option value="1">Librarian</option>
					<option value="2" selected>Priest</option>
					<option value="3">Blacksmith</option>
					<option value="4">Butcher</option>
					<option value="5">Nitwit</option>
				</select>
		</li>
		<li>
				<label for="villagercolor">Villager's Buy</label>
				<span class="tooltips"><span class="action"></span><span class="text">Each time you generate the command these two are randomised. For each trade the villager will ask for a random amount of a random block from the above lists</span></span>
				<input type="text" placeholder="All the blocks that a villager can ask from you" name="villager_buy_ids" value="cobblestone, stone, diorite, andesite, granite, gold_block, iron_block"/>
				<input type="text" placeholder="Quantity for the above" name="villager_buy_quantity" value="1, 2, 3, 4, 5, 6, 7, 8"/>
		</li>
		<li>
				<label for="villagercolor">Your custom trades</label>
				<span class="tooltips"><span class="action"></span><span class="text">The file is stored only while being processed. When the page refreshes and you get your command, poof, it's gone :)</span></span><br />
				whitelist.json file:<br /> <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
				<input name="uploadedfile" type="file" value="whitelist.json"/><br />
				<span>OR</span><span class="tooltips"><span class="action"></span><span class="text">Here you can list player names manually. This is ignored if you upload a whitelist file. Pay attention to the commas and spaces please.</span></span><br />
				<input type="text" placeholder="Player names" name="player_names" value="andrei1015, Thelmon, BlaziusBB"/>
				<!--OR
				<input type="hidden" name="MAX_FILE_SIZE1" value="100000" />
				<input name="customheadsfile" type="file" />-->
		</li>
				<span class="justify-content-center"><input type="submit" value="Fetch me my custom villager" class="btn btn-lg btn-primary justify-content-center mx-auto"/></span>
		</ul>
		</form>
			</div>
			
	</div>		
<?php
if (!isset($_POST['villagerprofession'])) {
echo '<div class="row justify-content-center"><form class="form-style-7">';
echo '<li><label for="villagercolor">Your custom villager will appear here:</label>';
echo "<textarea style='width:100%; height:300px;'>";
echo "</textarea>";
echo "</form>";
}

?>
			
<?php
include("utils.php");
function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
}
$GUID = getGUID();
										if (isset($_POST['silent']))
											$silent = "1";
										else
											$silent = "0";
											
										if (isset($_POST['visible_name']))
											$visible_name = "1";
										else
											$visible_name = "0";
											
										if (isset($_POST['persistent']))
											$persistent = "1";
										else
											$persistent = "0";
											
										if (isset($_POST['invulnerable']))
											$invulnerable = "1";
										else
											$invulnerable = "0";
										
										
		if (isset($_POST['villagerprofession']))
		$profession = $_POST['villagerprofession'];
		
if (!empty($_FILES['uploadedfile']['tmp_name']) && file_exists($_FILES['uploadedfile']['tmp_name']) || (isset($_POST['player_names']) && $_POST['player_names'] != "")) {
echo '<div class="row justify-content-center"><form class="form-style-7">';
echo '<li><label for="villagercolor">Your custom villager is ready: </label><span class="tooltips"><span class="action"></span><span class="text">It\'s huge, you\'ll need a command block. /give @p minecraft:command_block, paste, press, presto! Haha.. I\'ll show myself out.</span></span>';
echo "<textarea style='width:100%; height:300px;'>
summon villager ~ ~ ~ {Silent:".$silent."b,Invulnerable:".$invulnerable."b,CustomNameVisible:".$visible_name."b,PersistenceRequired:".$persistent."b,Profession:".$profession.",Career:1,CareerLevel:200,CustomName:\"{\\\"text\\\":\\\"".$_POST['villagername']."\\\",\\\"color\\\":\\\"".$_POST['villagercolor']."\\\",\\\"italic\\\":\\\"true\\\"}\",
ArmorItems:[{},{},{},{id:\"minecraft:player_head\",Count:1b,tag:{SkullOwner:{Id:\"".$_POST['villagerfaceid']."\",Properties:{textures:[{Value:\"".$_POST['villagerface']."\"}]}}}}],Attributes:[{Name:generic.knockbackResistance,Base:1.0},{Name:generic.movementSpeed,Base:0.0}],Offers:{Recipes:[";

?>

<?php

//$blocks_array = ["minecraft:cobblestone", "minecraft:stone", "minecraft:coal_block", "minecraft:iron_block", "minecraft:gold_block", "minecraft:andesite", "minecraft:diorite", "minecraft:netherrack", "minecraft:quartz_block", "minecraft:slime_block", "minecraft:rose_red", "minecraft:sand", "minecraft:sign"];
$blocks_array = $_POST['villager_buy_ids'];
$blocks_to_buy = explode(', ', $blocks_array);
$quantity_array = $_POST['villager_buy_quantity'];
$quantity = explode(', ', $quantity_array);
if((!empty($_FILES['uploadedfile']['tmp_name']) && file_exists($_FILES['uploadedfile']['tmp_name'])) || isset($_POST['player_names'])) {
	$player_list = "";	
	//var_dump($_FILES);
	if(!empty($_FILES['uploadedfile']['tmp_name']) && file_exists($_FILES['uploadedfile']['tmp_name'])) {
	$json = file_get_contents($_FILES['uploadedfile']['tmp_name']);
	$json_array = json_decode($json);
	$names_list = [];
	
	for ($i = 0; $i < sizeof($json_array); $i++) {
			array_push($names_list, $json_array[$i]->name);
			//print_r($names_list);
		
		}
	} elseif (isset($_POST['player_names'])){
		$get_names = $_POST['player_names'];
		//print_r($get_names);
		$names_list = explode(', ', $get_names);
		//print_r($names_list);
	}
	
	
		for ($y = 0; $y < count($names_list); $y++) {
			$uuid = MojangAPI::getUuid($names_list[$y]);
			$full_uuid = MojangAPI::formatUuid($uuid);
			$username = MojangAPI::getUsername($uuid);
			$profile = MojangAPI::getSessionProfile($uuid);
			$texture = $profile['properties'][0]['value'];
			
		
				if ($username != null || $texture != null) {
				echo "{rewardExp:0b,maxUses:2147483647,
buy:{id:\"minecraft:".array_rand(array_flip($blocks_to_buy), 1)."\",Count:".array_rand(array_flip($quantity), 1)."b},sell:{id:\"minecraft:player_head\",Count:1b,tag:{display:{Name:\"{\\\"text\\\":\\\"".$username."'s Head\\\"}\"},SkullOwner:{Id:\"".$full_uuid."\",Properties:{textures:[{Value:\"".$texture."\"}]}}}}},";
				
				}
				

				
		}
		
echo "]}}";		
}
echo "</textarea>";
echo '</li>';
echo "</form>";
}

elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_FILES['uploadedfile']['tmp_name']) && !file_exists($_FILES['uploadedfile']['tmp_name']) && !isset($player_list)) {echo "<div class='isa_error message'>You did not give me any data to work with!</div>";
}
?>
</div>
<div class="row justify-content-center">
	
<?php
include("info_footer.html");
?>

</div>
</body>
</html>