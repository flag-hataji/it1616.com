<?php
Configure::write('Security.salt', 'GC2LCYk1WEfaSWQJbfbURAZXb2Gjib8OD0dTOALB');
Configure::write('Cache.disable', false);
Configure::write('Session.save', 'cake');
Configure::write('BcEnv.siteUrl', 'http://test.it1616.com/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.mobile', true);
Configure::write('BcApp.smartphone', true);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 1);
Configure::write('App.baseUrl', '');
?>