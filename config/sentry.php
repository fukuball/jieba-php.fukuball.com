<?php

return array(
    'dsn' => 'https://84409e6d7ecf4884bb1dd34e08674a4c:94c959b156074b7f9db5ea9065fb40d4@sentry.io/121206',

    // capture release as git sha
    // 'release' => trim(exec('git log --pretty="%h" -n1 HEAD')),

    // Capture bindings on SQL queries
    'breadcrumbs.sql_bindings' => true,
);
