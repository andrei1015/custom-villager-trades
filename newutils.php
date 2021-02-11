

		<form enctype="multipart/form-data" action="" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
		Choose a file to upload: <input name="uploadedfile" type="file" /><br />
		<input type="submit" value="Upload File" />
		</form>


<?php
//echo "summon villager ~ ~ ~ {Invulnerable:1b,CustomNameVisible:1b,CanPickUpLoot:0b,Profession:5,Career:1,CareerLevel:1,Willing:0b,CustomName:\"{\\\"text\\\":\\\"Player Heads\\\",\\\"color\\\":\\\"red\\\"}\",ArmorItems:[{},{},{},{id:\"minecraft:player_head\",Count:1b,tag:{SkullOwner:{Id:\"5e458058-9f7e-432b-a8ff-3a2e211374bb\",Properties:{textures:[{Value:\"eyJ0ZXh0dXJlcyI6eyJTS0lOIjp7InVybCI6Imh0dHA6Ly90ZXh0dXJlcy5taW5lY3JhZnQubmV0L3RleHR1cmUvODVlZTg4MjBkMmQ2NWM1NGZlMmFhMmVhZmRlZWVjZTQxNjFiMzlmZjQ1ODE4YTc2NjUzZWE0MThmOWM2NWJiIn19fQ==\"}]}}}}],Attributes:[{Name:generic.knockbackResistance,Base:1.0},{Name:generic.movementSpeed,Base:0.0}],Offers:{Recipes:[";

?>

<?php
include("utils.php");
	function formatUUID($uuid) {
        $uid = "";
        $uid .= substr($uuid, 0, 8)."-";
        $uid .= substr($uuid, 8, 4)."-";
        $uid .= substr($uuid, 12, 4)."-";
        $uid .= substr($uuid, 16, 4)."-";
        $uid .= substr($uuid, 20);
        return $uid;
    }
	
	/*function get_texture($uuid) {
		$get_texture_url = curl_init();
		curl_setopt_array($get_texture_url, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => 'https://sessionserver.mojang.com/session/minecraft/profile/' . $uuid ,
   		CURLOPT_USERAGENT => 'andrei'
		));
		$texture_execute = curl_exec($get_texture_url);
		$texture_decode = json_decode($texture_execute);
		print_r($texture_execute);
		//array_push($texture_array, $texture_decode['properties']);
		print_r($texture_execute['properties']);
		//$texture = $texture_array[0]['value'];
		//echo json_decode($texture);
	}*/
	
	
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
		$profile = ProfileUtils::getProfile($names_list[$y]);
			if ($profile != null) {
				$profile = $profile->getProfileAsArray();
				//print_r($profile);
				$name = $profile['username'];
				$uuid = $profile['uuid'];
				//$texture = $profile['properties'];
				//print_r($texture);
				echo $uuid;
				//get_texture($uuid);
				//echo $uuid;
				//$texture = json_decode(base64_decode($profile['properties'][0]['value']), true);
				//print_r($texture);
				//$final_texture = $texture['textures']['SKIN']['url'];
				//echo $final_texture;
				/*echo "
	
	{rewardExp:0b,maxUses:2147483647,
buy:{id:\"minecraft:gold_block\",Count:1b},sell:{id:\"minecraft:player_head\",Count:1b,tag:{display:{Name:\"{\\\"text\\\":\\\"".$name."'s Head\\\"}\"},SkullOwner:{Id:\"".$uuid."\",Properties:{textures:[{Url:\"".$final_texture."\"}]}}}}},
	
	";*/
				
				}
				

				
		}
		
//echo "]}}";		
}
?>