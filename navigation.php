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
                    'Website File Uploads' => 'docs/uploading-data/uploading-files-website#website-upload',
                    'Globus File Uploads'  => 'docs/uploading-data/uploading-files-website#globus-upload',
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
    'Annotating Data'            => [
        'url'      => 'docs/annotating-data',
        'children' => [
            'Creating Provenance Via Spreadsheet' => 'docs/reference/spreadsheets',
        ],
    ],
    'Downloading Published Data' => [
        'url'      => 'docs/downloading-datasets',
        'children' => [
            'Downloading On Website' => '',
        ],
    ],
    'Reference'                  => [
        'url'      => 'docs/reference',
        'children' => [
            'Spreadsheets' => 'docs/reference/spreadsheets',
            'Publishing'   => 'docs/reference/publishing',
            'Using Globus' => 'docs/reference/globus',
//            'Projects'     => 'docs/projects',
            'Projects'     => 'docs/reference/projects',
            'Project Settings'    => 'docs/reference/project_settings',
            'Project Users'     => 'docs/reference/project_members',
            'Experiments' => 'docs/reference/experiments',
            'Files'       => 'docs/reference/files',
            'Samples'     => 'docs/reference/samples',
            'Processes'   => 'docs/reference/processes',
            'Workflows'   => 'docs/reference/workflows',
            'Account'     => 'docs/reference/account',
        ],
    ],
//    'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
];
