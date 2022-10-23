<?php
    $DEBUG = true;
    
    use dasfdas_Env\EnvReader;
    
    (new EnvReader(dasfdas_dir . '/env/config.env'))->load();
    
    $asdfsdf = getenv(asdfsdf) 
?>