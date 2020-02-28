<?php

return [
    'Getting Started'            => [
        'url'      => 'docs/getting-started',
        'children' => [
            'Creating Projects On Website' => [
                'url' => 'docs/getting-started/create-project-website',
                'children' => [
                    'Adding Users To Projects' => 'docs/getting-started/create-project-website#adding-users',
                    'Creating An Experiment' => 'docs/getting-started/create-project-website#creating-experiment'
                ]
            ],
        ],
    ],
    'Uploading Data'             => [
        'url'      => 'docs/uploading-data',
        'children' => [
            'Uploading Files On Website' => [
                'url' => 'docs/uploading-data/uploading-files-website',
                'children' => [
                    'Website File Uploads' => 'docs/uploading-data/uploading-files-website#website-upload',
                    'Globus File Uploads' => 'docs/uploading-data/uploading-files-website#globus-upload',
                ]
            ],
        ],
    ],
    'Publishing'                 => [
        'url'      => 'docs/publishing-data',
        'children' => [
            'Publishing On Website' => '',
        ],
    ],
    'Annotating Data'            => [
        'url'      => 'docs/annotating-data',
        'children' => [
            'Creating Provenance Via Spreadsheet' => '',
        ],
    ],
    'Downloading Published Data' => [
        'url'      => 'docs/downloading-datasets',
        'children' => [
            'Downloading On Website' => '',
        ],
    ],
    'Reference'        => [
        'url'      => 'docs/getting-started-old',
        'children' => [
            'Spreadsheets' => 'docs/spreadsheets',
            'Publishing'   => 'docs/publishing',
            'Using Globus' => 'docs/globus',
//            'Projects'     => 'docs/projects',
            'Projects'     => [
                'url'      => 'docs/projects',
                'children' => [
                    'Settings' => 'docs/project_settings',
                    'Members'  => 'docs/project_members',
                ],
            ],
            'Experiments'  => 'docs/experiments',
            'Files'        => 'docs/files',
            'Samples'      => 'docs/samples',
            'Processes'    => 'docs/processes',
            'Workflows'    => 'docs/workflows',
            'Account'      => 'docs/account',
        ],
    ],
//    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
