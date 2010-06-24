<?php
R('')->controller('test')->action('index')->on('GET');
R('admin')->controller('admin')->action('index')->on('GET');
R('admin/login')->controller('admin')->action('login')->on('GET');
R('admin/dologin')->controller('admin')->action('dologin')->on('POST');
?>