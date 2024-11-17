<?php
$port = getenv('PORT') ?: 8005; 
echo "Hello, World! This message is generated using PHP without dockerfile.";


$server = "0.0.0.0:$port"; 
echo "Server running on port $port...\n";
?>
