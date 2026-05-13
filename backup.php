<?php

$backup_file =
'backup_'.date("Y-m-d").'.sql';

system(
"mysqldump -u root saif_textiles > $backup_file"
);

echo "Backup Created";

?>