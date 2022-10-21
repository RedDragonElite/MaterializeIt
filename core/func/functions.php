<?php

// Example Function
function sayHello()
{
    echo "Hello u lel";
}

// Convert Text to Slug
function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}
//echo create_slug('does this thing work or not');
//returns 'does-this-thing-work-or-not'
	
// Get current Page URL
function current_url()
{
	$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$validURL = str_replace("&", "&amp;", $url);
	return $validURL;
}
	
# How to use:
# echo "Currently you are on: ".current_url();

//This code iterats through $_SERVER and finds the most reliable IP address to return 
//The only address you can really trust is REMOTE_ADDR, because it is the source IP of the TCP connection and cant be changed my spoofing/changing an http header.
//While it is technically possible to bidirectionally spoof ID Addressed at the Border Gate way level, but you would have to have control over an ISP to do so. 


function whatsMyIP()
{ 
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    return $ip;
                }
            }
        }
    }
}

# HOW YOU USE IT!!!
//$users_ip = whatsMyIP();

//echo $users_ip; // Output IP address [Ex: 123.12.41.42]

?>
