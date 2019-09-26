<?php

$content = '<?php

abstract class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $DBName = "rb_test";

    final protected function DB_Connect(bool $flag)
    {
        if ($flag == TRUE) {
            R::setup("mysql:host=" . $this->host . ";dbname=" . $this->DBName, $this->username, $this->password);
            R::useFeatureSet("novice/latest");
        } else if ($flag == FALSE) {
            R::close();
        }
    }
}
';
// $file = fopen('test.php', 'w');
// fwrite($file, $content);
// fclose($file);
