<?php

$db = parse_url(getenv("DATABASE_URL"));

echo ($db["host"]."///".$db["port"]."///".$db["user"]."///".$db["pass"]."///".$db["path"]);

?>