<?php
$otherPage = 'takanoyuri_harajyuku';
$profileUrl = "https://www.instagram.com/$otherPage/?__a=1";

$iterationUrl = $profileUrl;
$tryNext = true;
$limit = 1;
$found = 0;
while ($tryNext) {
    $tryNext = false;
    $response = file_get_contents($iterationUrl);
    if ($response === false) {
        break;
    }
    $data = json_decode($response, true);	
	
    if ($data === null) {
        break;
    }
    $media = $data['graphql']['user']["edge_owner_to_timeline_media"]['edges'];
	
	echo "<ul class='clearfix'>";
    foreach($media as $item){
        if($limit <= 8){
    		echo "<li><a href='https://www.instagram.com/p/".$item["node"]["shortcode"]."?taken-by=takanoyuri_harajyuku' target='_blank'>
    		        <span><em>".$item["node"]["edge_media_to_caption"]["edges"][0]['node']['text']."</em></span>
    				<img src='".$item["node"]["display_url"]."' alt =''>
    		</a></li>";
            $limit++;
        }
		else{
            break;
        }
	};
	echo "</ul>";    
    
}
?>