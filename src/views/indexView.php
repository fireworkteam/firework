<h1>Добро пожаловать!</h1>
<p>

</p>
<?php

foreach($data as $row)
{
    print_r("<br>Name: " . $row['name'] . "<br>Age: " . $row['age'] . "<br>");
}

?>