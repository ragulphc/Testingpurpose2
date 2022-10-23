<?php
    $DEBUG = true;
    
    use adsfasdf_Env\EnvReader;
    
    (new EnvReader(adsfasdf_dir . '/env/config.env'))->load();
    
    $asdfsd = getenv(asdfsd) 
?>