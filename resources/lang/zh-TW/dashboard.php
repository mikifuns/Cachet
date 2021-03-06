<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard'          => '儀表板',
    'writeable_settings' => 'The Cachet settings directory is not writeable. Please make sure that <code>./bootstrap/cachet</code> is writeable by the web server.',

    // Incidents
    'incidents' => [
        'title'                    => '事件與排程',
        'incidents'                => '事件',
        'logged'                   => '{0}There are no incidents, good work.|[1]You have logged one incident.|[2,*]You have reported <strong>:count</strong> incidents.',
        'incident-create-template' => '新增模板',
        'incident-templates'       => '事件模板',
        'updates'                  => [
            'title'   => 'Incident updates for :incident',
            'count'   => '{0}Zero Updates|[1]One Update|[2]Two Updates|[3,*]Several Updates',
            'add'     => [
                'title'   => 'Create new incident update',
                'success' => 'Your new incident update has been created.',
                'failure' => 'Something went wrong with the incident update.',
            ],
            'edit' => [
                'title'   => 'Edit incident update',
                'success' => 'The incident update has been updated.',
                'failure' => 'Something went wrong updating the incident update',
            ],
        ],
        'reported_by'              => 'Reported by :user',
        'add'                      => [
            'title'   => '添加事件',
            'success' => 'Incident added.',
            'failure' => 'There was an error adding the incident, please try again.',
        ],
        'edit' => [
            'title'   => '編輯事件',
            'success' => '事件更新成功。',
            'failure' => 'There was an error editing the incident, please try again.',
        ],
        'delete' => [
            'success' => 'The incident has been deleted and will not show on your status page.',
            'failure' => 'The incident could not be deleted, please try again.',
        ],

        // Incident templates
        'templates' => [
            'title' => '事件模板',
            'add'   => [
                'title'   => '添加事件模板',
                'message' => 'You should add an incident template.',
                'success' => 'Your new incident template has been created.',
                'failure' => 'Something went wrong with the incident template.',
            ],
            'edit' => [
                'title'   => '編輯模板',
                'success' => 'The incident template has been updated.',
                'failure' => 'Something went wrong updating the incident template',
            ],
            'delete' => [
                'success' => 'The incident template has been deleted.',
                'failure' => 'The incident template could not be deleted, please try again.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => '排程維護',
        'logged'       => '{0}There has been no Maintenance, good work.|[1]You have logged one schedule.|[2,*]You have reported <strong>:count</strong> schedules.',
        'scheduled_at' => '排程於 :timestamp',
        'add'          => [
            'title'   => 'Add Scheduled Maintenance',
            'success' => 'Schedule added.',
            'failure' => 'Something went wrong adding the schedule, please try again.',
        ],
        'edit' => [
            'title'   => 'Edit Scheduled Maintenance',
            'success' => 'Schedule has been updated!',
            'failure' => 'Something went wrong editing the schedule, please try again.',
        ],
        'delete' => [
            'success' => 'The scheduled maintenance has been deleted and will not show on your status page.',
            'failure' => 'The scheduled maintenance could not be deleted, please try again.',
        ],
    ],

    // Components
    'components' => [
        'components'         => '組件',
        'component_statuses' => '組件狀態',
        'listed_group'       => '屬於:name組',
        'add'                => [
            'title'   => '添加組件',
            'message' => '你應該先新增一個組件。',
            'success' => 'Component created.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'edit' => [
            'title'   => '編輯組件',
            'success' => 'Component updated.',
            'failure' => 'Something went wrong with the component group, please try again.',
        ],
        'delete' => [
            'success' => 'The component has been deleted!',
            'failure' => 'The component could not be deleted, please try again.',
        ],

        // Component groups
        'groups' => [
            'groups'        => '組件組|組件組',
            'no_components' => '您應添加壹個組件分組。',
            'add'           => [
                'title'   => '添加組件分組',
                'success' => 'Component group added.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'edit' => [
                'title'   => '編輯組件分組',
                'success' => 'Component group updated.',
                'failure' => 'Something went wrong with the component group, please try again.',
            ],
            'delete' => [
                'success' => 'Component group has been deleted!',
                'failure' => 'The component group could not be deleted, please try again.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => '效能度量',
        'add'     => [
            'title'   => '添加圖表',
            'message' => 'You should add a metric.',
            'success' => 'Metric created.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'edit' => [
            'title'   => '編輯圖表',
            'success' => 'Metric updated.',
            'failure' => 'Something went wrong with the metric, please try again.',
        ],
        'delete' => [
            'success' => 'The metric has been deleted and will no longer display on your status page.',
            'failure' => 'The metric could not be deleted, please try again.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'          => '訂閱者',
        'description'          => 'Subscribers will receive email updates when incidents are created or components are updated.',
        'description_disabled' => 'To use this feature, you need allow people to signup for notifications.',
        'verified'             => '已認證',
        'not_verified'         => '未認證',
        'subscriber'           => ':email, subscribed :date',
        'no_subscriptions'     => 'Subscribed to all updates',
        'global'               => 'Globally subscribed',
        'add'                  => [
            'title'   => '添加訂閱者',
            'success' => '訂閱者已添加成功.',
            'failure' => 'Something went wrong adding the subscriber, please try again.',
            'help'    => 'Enter each subscriber on a new line.',
        ],
        'edit' => [
            'title'   => '更新訂閱者',
            'success' => '訂閱者信息已更新.',
            'failure' => 'Something went wrong editing the subscriber, please try again.',
        ],
    ],

    // Team
    'team' => [
        'team'        => '團隊',
        'member'      => '成員',
        'profile'     => '個人檔案',
        'description' => '團隊成員可以新增、修改、或更新組件和事件。',
        'add'         => [
            'title'   => '添加團隊成員',
            'success' => 'Team member added.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'edit' => [
            'title'   => '更新配置文件',
            'success' => 'Profile updated.',
            'failure' => 'Something went wrong updating the profile, please try again.',
        ],
        'delete' => [
            'success' => '團隊成員已刪除.',
            'failure' => 'The team member could not be added, please try again.',
        ],
        'invite' => [
            'title'   => '邀請團隊成員',
            'success' => '團隊成員已邀請成功.',
            'failure' => 'The invite could not be sent, please try again.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => '設定',
        'app-setup' => [
            'app-setup'   => '應用程式設定',
            'images-only' => '你只能上載圖片。',
            'too-big'     => '檔案大小過大。請嘗試上載一張大小小於 :size 的圖片。',
        ],
        'analytics' => [
            'analytics' => '第三方統計',
        ],
        'log' => [
            'log' => 'Log',
        ],
        'localization' => [
            'localization' => '國際化',
        ],
        'customization' => [
            'customization' => 'Customization',
            'header'        => 'Custom Header HTML',
            'footer'        => 'Custom Footer HTML',
        ],
        'mail' => [
            'mail'  => 'Mail',
            'test'  => 'Test',
            'email' => [
                'subject' => 'Test notification from Cachet',
                'body'    => 'This is a test notification from Cachet.',
            ],
        ],
        'security' => [
            'security'   => '安全',
            'two-factor' => '下列用戶未使用雙重認證',
        ],
        'stylesheet' => [
            'stylesheet' => '樣式表',
        ],
        'theme' => [
            'theme' => '主題',
        ],
        'edit' => [
            'success' => '設定已儲存。',
            'failure' => '設定儲存失敗。',
        ],
        'credits' => [
            'credits'       => 'Credits',
            'contributors'  => 'Contributors',
            'license'       => 'Cachet is a BSD-3-licensed open source project, released by <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Backers & Sponsors',
            'backers'       => 'If you\'d like to support future development, check out the <a href="https://patreon.com/jbrooksuk" target="_blank">Cachet Patreon</a> campaign.',
            'thank-you'     => 'Thank you to each and every one of the :count contributors.',
        ],
    ],

    // Login
    'login' => [
        'login'      => '登入',
        'logged_in'  => '你已經登錄。',
        'welcome'    => '歡迎回來！',
        'two-factor' => '請輸入驗證碼。',
    ],

    // Sidebar footer
    'help'        => '幫助',
    'status_page' => '狀態頁',
    'logout'      => '登出',

    // Notifications
    'notifications' => [
        'notifications' => '通知',
        'awesome'       => '太好了。',
        'whoops'        => '唉呀。',
    ],

    // Widgets
    'widgets' => [
        'support'          => 'Support Cachet',
        'support_subtitle' => 'Check out our <strong><a href="https://patreon.com/jbrooksuk" target="_blank">Patreon</a></strong> page!',
        'news'             => 'Latest News',
        'news_subtitle'    => 'Get the latest update',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Welcome to your new status page, :username!',
        'message' => '你的狀態頁快準備好了！不過你也許先想調整一下以下設定。',
        'close'   => 'I\'m good thanks!',
        'steps'   => [
            'component'  => '新增組件',
            'incident'   => '新增事件',
            'customize'  => '定制化',
            'team'       => '新增用戶',
            'api'        => '生成 API 密鑰',
            'two-factor' => '雙因素身份驗證',
        ],
    ],

];
