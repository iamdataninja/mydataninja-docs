<?php

$build_dir = __DIR__ . '/build';
$dir_name = 'build';
date_default_timezone_set('Asia/Tbilisi');

$date = date('Y-m-d-H-i-s', strtotime('now'));
$filename = "$date-deploy.zip";

exec("rm ./$dir_name/*.zip");
exec("cd $dir_name && zip -r $filename ./");
exec("scp -v -P2221 -r $build_dir/$filename docs.mydataninja.com@docs.mydataninja.com:/home/docs.mydataninja.com");
exec("ssh -p 2221 docs.mydataninja.com@docs.mydataninja.com 'unzip -o /home/docs.mydataninja.com/$filename -d /home/docs.mydataninja.com/'");
