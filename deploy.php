<?php
$build_dir = __DIR__ . '/build';

exec("scp -v -P2221 -r $build_dir/* docs.mydataninja.com@docs.mydataninja.com:/home/docs.mydataninja.com");
