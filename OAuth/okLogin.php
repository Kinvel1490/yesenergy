<?php 
    $respUser = "пока не обработано";
    if(isset($_GET['code']) && $_GET['state']=='ok'){
        $opt = array(
            'client_id' => '512002026050',
            'client_secret' => '80C8807915C135754DF5E0CE',
            'code' => $_GET['code'],
            'redirect_uri' => 'http://localhost/add',
            'grant_type' => 'authorization_code'
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
        $resp = file_get_contents('http://api.ok.ru/oauth/token.do?', true, $context);
        $accesstoken = json_decode($resp, true);
    }
    if(isset($accesstoken['access_token'])) {
        $secret = md5($accesstoken['access_token'].'80C8807915C135754DF5E0CE');
        $sig = md5("application_key=CDELODLGDIHBABABAformat=jsonmethod=users.getCurrentUser{$secret}");
        $uopt = array (
            'application_key' => 'CDELODLGDIHBABABA',
            'format' => 'json',
            'method' => 'users.getCurrentUser',
            'sig' => $sig,
            'access_token' => $accesstoken['access_token']
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
        $respUserL = json_decode(file_get_contents('https://api.ok.ru/fb.do', true, $contextUser), true);
        $uname = $respUserL['first_name'];
        $ucity = $respUserL['location']['city'];
        $user_id = 'https://ok.ru/profile/'.$respUserL['uid'];
        $uLName = $respUserL['last_name'];
    }
    
?>