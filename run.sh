ps -ef|grep "serve"|grep grep -v|awk '{print $2}'|xargs kill -9
nohup php artisan serve > server.log 2>&1 &
