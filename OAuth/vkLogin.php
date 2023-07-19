<?php 
    $respUser = "пока не обработано";
    if(isset($_GET['code']) && $_GET['state']=='vk'){
        $opt = array(
            'client_id' => '51697826',
            'client_secret' => '15lk8rvSFlGTyJnk7AUj',
            'code' => $_GET['code'],
            'redirect_uri' => 'http://localhost/add'
        );
        $r = urldecode( http_build_query($opt));
        $postOpts = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $r,
            )   
        );
        $context = stream_context_create($postOpts);
        $resp = file_get_contents('https://oauth.vk.com/access_token?', true, $context);
        $accesstoken = json_decode($resp, true);
    }
    if(isset($accesstoken['access_token'])) {
        $uopt = array (
            'user_ids' => $accesstoken['user_id'],
            'access_token' => $accesstoken['access_token'],
            'fields' => 'first_name,city',
            'v' => '5.131'
        );
        $ruser = urldecode(http_build_query($uopt));
        $postOptsUser = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $ruser
            )   
        );
        $contextUser = stream_context_create($postOptsUser);
        $respUserL = &$respUser;
        $respUserL = json_decode(file_get_contents('https://api.vk.com/method/users.get', true, $contextUser), true);
        $uname = $respUserL['response'][0]['first_name'];
        $ucity = $respUserL['response'][0]['city']['title'];
        $user_id = 'https://vk.com/id'.$respUserL['response'][0]['id'];
        $uLName = $respUserL['response'][0]['last_name'];
    }
    
?>