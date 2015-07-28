To connect local mysql DB

Step:01 Goto ".env" file of the root folder and find the DB_HOST=localhost, DB_DATABASE=laraveldb, DB_USERNAME=moin, DB_PASSWORD=moin123 and modify according to your connection settings.

Step:02 Then Goto "Config/database.php" and find 'default' => env('DB_CONNECTION', 'mysql') just have a look "DB_CONNECTION" is assigned as  'mysql' or not.

Step:03 If everything is ok You r ready to connect.
