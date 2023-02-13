<?php

class m0002_add_password
{
    public function up()
    {
        $db = \boomee\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL;");
    }

    public function down()
    {
        $db = \boomee\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password;");
    }
    
    
}

