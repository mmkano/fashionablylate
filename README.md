# fashionablylate

##環境構築

Dockerビルト
1.git clone リンク
2.docker-compose up -d -build

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3.env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

##使用技術
*PHP 7.4.9
*Laravel 8.0
*MySQL 8.0

##ER図
![ER図](images/er.png)

##URL
開発環境:http://localhost/
phpMyAdmin:http://localhost:8080/
