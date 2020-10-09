<?php

return [
    'Getting Started'            => [
        'url'      => 'docs/getting-started',
        'children' => [
            'Creating Projects On Website' => [
                'url'      => 'docs/getting-started/create-project-website',
                'children' => [
                    'Adding Users To Projects' => 'docs/getting-started/create-project-website#adding-users',
                    'Creating An Experiment'   => 'docs/getting-started/create-project-website#creating-experiment',
                ],
            ],
        ],
    ],
    'Uploading Data'             => [
        'url'      => 'docs/uploading-data',
        'children' => [
            'Uploading Files On Website' => [
                'url'      => 'docs/uploading-data/uploading-files-website',
                'children' => [
                    'Website File Uploads'          => 'docs/uploading-data/uploading-files-website#website-upload',
                    'Globus File Uploads'           => 'docs/uploading-data/uploading-files-website#globus-upload',
                    'Uploading Using A Spreadsheet' => 'docs/reference/spreadsheets',
                ],
            ],
        ],
    ],
    'Publishing'                 => [
        'url'      => 'docs/publishing-data',
        'children' => [
            'Publishing On Website' => 'docs/publishing-data/create-dataset-website',
        ],
    ],
    'Communities' => [
        'url' => 'docs/communities'
    ],
    'Annotating Data'            => [
        'url'      => 'docs/annotating-data',
        'children' => [
            'Uploading Data Using A Spreadsheet' => 'docs/reference/spreadsheets',
        ],
    ],
    'Downloading Published Data' => [
        'url' => 'docs/downloading-datasets',
//        'children' => [
//            'Downloading On Website' => '',
//        ],
    ],
    'Tour'                       => [
        'url' => 'docs/tour',
    ],
    'Glossary'                   => [
        'url'      => 'docs/reference',
        'children' => [
            'Account'          => 'docs/reference/account',
            'Experiments'      => 'docs/reference/experiments',
            'Files'            => 'docs/reference/files',
            'Globus'           => 'docs/reference/globus',
            'Processes'        => 'docs/reference/processes',
            'Projects'         => 'docs/reference/projects',
            'Project Settings' => 'docs/reference/project_settings',
            'Project Users'    => 'docs/reference/project_members',
            'Publishing'       => 'docs/publishing-data/create-dataset-website',
            'Samples'          => 'docs/reference/samples',
            'Spreadsheets'     => 'docs/reference/spreadsheets',
            'Workflows'        => 'docs/reference/workflows',
        ],
    ],
//    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
