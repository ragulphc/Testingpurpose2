<?php
    $DEBUG = true;
    
    use dfas_Env\EnvReader;
    
    (new EnvReader(dfas_dir . '/env/config.env'))->load();
    
    $afsd = getenv(afsd); 


?>