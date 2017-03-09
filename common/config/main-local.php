  return [
    'components' => [
        'db' => [
        'class' => '\yii\db\Connection',
        'dsn' => 'mysql:host=SQL5.FREEMYSQLHOSTING.NET;dbname=sql9162918',
        'username' => 'sql9162918',
        'password' => 'mC9WPAgU67',
        'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
    // Add this to get debug and gii to work
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
             // permits any and all IPs
             // you should probably restrict this
            'allowedIPs' => ['*']
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
             // permits any and all IPs
             // you should probably restrict this
            'allowedIPs' => ['*']
        ]
    ]
