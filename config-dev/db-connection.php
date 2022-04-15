<?php

return new PDO("mysql:host=basedatos:3306;dbname=sample", "root", "samplepass", [PDO::ATTR_PERSISTENT => true]);
