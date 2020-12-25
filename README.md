# 開発実践テキスト

composer -V

composer create-project "laravel/laravel=5.8.*" laravel_app

php artisan -V


コメント

最初のフォルダ階層が違ったため、ルーティングエラー、nginxのdefault.confの以下のroot ~ を修正
server {
    listen 80;

    root  /var/www/html/[laravelファイルのルートファイルの名前]/public;
    index index.php index.html index.htm;

docker-composeを再起動

