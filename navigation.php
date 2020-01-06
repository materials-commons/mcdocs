<?php

return [
    'Getting Started' => [
        'url'      => 'docs/getting-started',
        'children' => [
            'Spreadsheets'     => 'docs/spreadsheets',
            'Publishing'       => 'docs/publishing',
            'Using Globus'     => 'docs/globus',
//            'Projects'     => 'docs/projects',
            'Projects'         => [
                'url'      => 'docs/projects',
                'children' => [
                    'Settings' => 'docs/project_settings',
                    'Members'  => 'docs/project_members',
                ],
            ],
            'Experiments'      => 'docs/experiments',
            'Files'            => 'docs/files',
            'Samples'          => 'docs/samples',
            'Processes'        => 'docs/processes',
            'Workflows'        => 'docs/workflows',
            'Account'          => 'docs/account',
        ],
    ],
//    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
