

		<form enctype="multipart/form-data" action="" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
		<input name="uploadedfile" type="file" />		<input type="submit" value="Upload File" />
		</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
echo "<textarea style='width:100%; height:300px;'>
summon villager ~ ~ ~ {Invulnerable:1b,CustomNameVisible:1b,CanPickUpLoot:0b,Profession:5,Career:1,CareerLevel:1,Willing:0b,CustomName:\"{\\\"text\\\":\\\"Player Heads\\\",\\\"color\\\":\\\"red\\\"}\",ArmorItems:[{},{},{},{id:\"minecraft:player_head\",Count:1b,tag:{SkullOwner:{Id:\"5e458058-9f7e-432b-a8ff-3a2e211374bb\",Properties:{textures:[{Value:\"eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvODVlZTg4MjBkMmQ2NWM1NGZlMmFhMmVhZmRlZWVjZTQxNjFiMzlmZjQ1ODE4YTc2NjUzZWE0MThmOWM2NWJiIn19fQ==\"}]}}}}],Attributes:[{Name:generic.knockbackResistance,Base:1.0},{Name:generic.movementSpeed,Base:0.0}],Offers:{Recipes:[";

?>

<?php
include("utils.php");
	
if(!empty($_FILES['uploadedfile']['tmp_name']) && file_exists($_FILES['uploadedfile']['tmp_name'])) {
		
	//var_dump($_FILES);
	$json = file_get_contents($_FILES['uploadedfile']['tmp_name']);
	$json_array = json_decode($json);
	$names_list = [];
	
		for ($i = 0; $i < sizeof($json_array); $i++) {
			array_push($names_list, $json_array[$i]->name);
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
buy:{id:\"minecraft:gold_block\",Count:1b},sell:{id:\"minecraft:player_head\",Count:1b,tag:{display:{Name:\"{\\\"text\\\":\\\"".$username."'s Head\\\"}\"},SkullOwner:{Id:\"".$full_uuid."\",Properties:{textures:[{Value:\"".$texture."\"}]}}}}},";
				
				}
				

				
		}
		
echo "]}}";		
}
echo "</textarea>";
}
?>