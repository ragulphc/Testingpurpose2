<?php
    $DEBUG = true;
    
    use ADSCASD_Env\EnvReader;
    
    (new EnvReader(adscasd_dir . '/env/config.env'))->load();
    
    $ADSCASD = getenv(ADSCASD) 
?>