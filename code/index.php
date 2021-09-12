<?php
    $filename = get_client_ip() . '.txt';
    echo 'User address : '. get_client_ip() . ' <-- user ip was set to ' . get_client_ip() . '<br />';
    counter();
    echo 'Hits : '.file_get_contents($filename) . '<br />';

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

 
function counter(){		//function counter
	global $filename;	//set global variabel $filename
 
	if(file_exists($filename)){		//jika file counter.txt ada
		$value = file_get_contents($filename);	//set value = nilai di notepad
	}else{		//jika file counter.txt tidak ada maka akan membuat file counter.txt
		$value = 0;		//kemudian set value = 0
	}
 
	file_put_contents($filename, ++$value);		//menuliskan kedalam file counter.txt value+1
}
 
 
?>