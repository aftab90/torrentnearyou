<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>

<?php
/* Method 1 */
//    $url = "compress.zlib://https://kat.cr/usearch/Monsoon%20Mangoes%20malayalam/";
    $url = "https://kat.cr/usearch/Monsoon%20Mangoes%20malayalam/";
//    $handle = fopen($url, "r");
//    if($handle)
//    {
//        /* iterating to find the sizes of the torrents */
//        while (($line = fgets($handle)) !== false)
//        {
//            echo $line;
//        }
//    }
//    else{
//        echo "could not open the URL!";
//    }

/* Method 2 */
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url
, CURLOPT_HEADER => 0
, CURLOPT_RETURNTRANSFER => 1
, CURLOPT_ENCODING => 'gzip'
));
echo curl_exec($ch);
?>