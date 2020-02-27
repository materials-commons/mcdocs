---
title: Spreadsheets
description: Getting started with MaterialsCommons
extends: _layouts.documentation
section: content
---

# Overview

This getting started guide will take you through project creation, adding data, setting up your workflow,
sharing and publishing your results. Materials Commons gives you a way to collaborate within your project,
create experiments and track your progress. When you are all done you can pick a subset of your data
and publish. You can assign a DOI, put that in a paper and give others easy access to your data.

Materials Commons makes use of Globus to handle large scale uploads and downloads in a reliable fashion.
Within Materials Commons you can easily share subsets of your data (we call them datasets). This allows
you to organize your data, validate it and finally publish it to a wider audience.

# First Steps
Everything in Materials Commons starts with a project. A project allows you to set up the list of collaborators
you are sharing your files with. It's where you set up your experiments, create your datasets, and publish your
data from. You can set up many projects in Materials Commons, allowing you to separate who you share your data with.

# Creating A Project

When you first login to Materials Commons you will be presented with a list of all your projects. To create your
first project press the "Create Project" link in the projects list page. This will prompt you to enter a name
and optional description for your project.

![Create Project](/assets/img/create-project.png)

Once you have created a project it will appear in your list of projects. Clicking on the project will take
you to the project home page.

![Project Home](/assets/img/project_home_page.png)

All pages for your project share the left side navbar. The navbar gives you quick access to the various parts
of your project, such as files, datasets, the samples and processes in your project, and other features.

Once you have created a project you can set up who has access to it.

# Setting Project Access

To add collaborators to your project click on the "Users" link in the sidebar. Then click on "Modify Users" to add or
remove users.

![Users Page](/assets/img/project-members-page.png)

The users page allows you to add and remove users from your project. **Only users who already have a Materials Commons Account
can be added as collaborators**.

![Modify Users Page](/assets/img/modify-users-page.png)

To add new users to your project select from the list on the left. To remove existing users click on the trash can next to their name in 
the right hand list. Only the project owner can add/remove users from a project.

The next step is to upload your files into Materials Commons.

# Uploading Data

## Overview

Materials Commons provides a variety of ways to upload your files. For quick uploads of a couple of files that aren't too large
you can use the Materials Common UI to upload these. We also provide a Globus interface to reliably upload large files or
large sets of files. Lastly, if you would prefer to work from the command line the Materials Commons CLI command (mc) provides
a way to script your uploads.

Materials Commons also provides integration with PRISMS Center computational tools. If you are using one of these tools
then the files from your computational runs will be automatically uploaded to Materials Commons.

### Materials Commons UI Uploader

The Materials Commons UI provides a way for creating directories and uploading files onto the Materials Commons server.
You can access this functionality from the sidebar by clicking on the "Files" link for your project.


This will take you to a page that allows you to explore your files and directories. Clicking on the "+ Add Files" link
will bring you to page where you can upload one or more files. The files will be uploaded into the Materials Commons directory you were
viewing when you selected the "+ Add Files" link.

![Files](/assets/img/files.png)

Click in or drag files into the box. Once you have selected files click on the green "Upload" button to
upload the files to Materials Commons. After your files are uploaded you will be returned to the last directory you
were viewing.

![Upload Files](/assets/img/upload-files.png)

### Globus

If you have a large transfer then you can use Globus to upload files into your project. Globus is designed to reliably handle large file transfers.
If you haven't used Globus before head over to http://globus.org to get started.

To upload files into your project click on the link "Globus Upload" in the sidebar.

This will create a one time link that you can upload files to. It will then bring up a dialog with a link to the Globus UI, 
with this directory selected.


# Creating Your First Experiment

The project home page contains a list of all your experiments. The next section will go over creating experiments from a spreadsheet.

To create an experiment click on the "+ Create Experiment" link. This will bring up a dialog to enter a name and
optional description for your new experiment.

## Loading A Spreadsheet

If you have already uploaded a spreadsheet then the create experiment page will also present a dropdown of spreadsheets
you can load.

![Create Experiment From Spreadsheet](/assets/img/create-experiment-from-spreadsheet.png)

Materials Commons supports loading spreadsheets to create experiments. This has the advantage of working with your existing
data. With a few small modifications to your spreadsheet Materials Commons can create your samples, processes and even your
workflow.

To get started [click here](spreadsheets#overview).

## Create a Workflow

MaterialsCommons allows you to create workflows to describe your processing steps. These workflows are flowcharts with
a small number of node types. Each experiment can have any number of workflows associated. To create a new workflow
go to your experiment, select the Workflows tab, and click on the "+ New Workflow" link.

![Experiment Page](/assets/img/experiment-page.png)

The workflow creation page contains a text area where you can right out the rules for your workflow. The language for
the rules is explained on the page when you click on the "Show Workflow Help" link. 

![Create Workflow](/assets/img/create-workflow.png)

The rules are as follows:

Workflows are specified using a simple language. Each step in your workflow is separated
by a '->'. Conditional steps have names that contain a '?' in them.

You **must not** have spaces between nodes. The following is invalid (because there is a space before
    and after the '->'.
```
   Heat Treatment -> Analyze
```
   
When specifying a step you can optionally give a direction in parathensis. When specifying
a conditional step, you can specify the text on the connecting arrow. Below is the code and result for
an example workflow.
   
```
   Heat Treat Sample?(yes, right)->Heat Treat at 400c/3h->SEM(right)->Analyze
   Heat Treat Sample?(no)->SEM->Analyze
```



