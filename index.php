<!DOCTYPE html>
<html><head></head><body>
<?php
$env_array =getenv();

echo "<h3>The list of getenv() environment variables with values are :</h3>";

//Print all environment variable names with values

foreach ($env_array as $key=>$value)

{

    echo "$key => $value <br />";

}
    

echo "<h3>The list of $_ENV environment variables with values are :</h3>";

//Print all environment variable names with values

foreach ($_ENV as $key=>$value)

{

    echo "$key => $value <br />";

}

?>
</body></html>
