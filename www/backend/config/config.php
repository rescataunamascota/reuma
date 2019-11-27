<?php
	define("DB_HOST","localhost");
	define("DB_USUARIO", "root");
	define("DB_CONTRASENA", "tiz%F6bTUikbWQ");
	define("DB_NOMBRE", "reuma");
   define("DB_CHARSET","utf8");
   define("DB_EXEC", 'c:\AppServ\MySQL\bin\mysqldump');
   define("DB_BACKUP",  
      constant("DB_EXEC") . 
      ' --no-defaults -u ' . 
      constant("DB_USUARIO") .
      ' -p' . 
      constant("DB_CONTRASENA") .' ' . 
      constant("DB_NOMBRE") . ' > '
   );
?>