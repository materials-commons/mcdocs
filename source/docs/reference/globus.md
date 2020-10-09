---
title: Using Globus
description: Uploading/Downloading files using Globus
extends: _layouts.documentation
section: content
---

# Globus

MaterialsCommons uses the Globus file service for large scale file transfers. Globus allows MaterialsCommons to
support large file requests in a reliable and safe way. Using the Globus integration you can upload your files
and when the uploads are finished you can tell MaterialsCommons to import the files into your project.

### Using Globus for Uploads

To upload files into your project using Globus you will first need to setup a Globus account and then registering
that account with MaterialsCommons. To create a Globus account go to the 
[Globus Getting Start Guide](https://docs.globus.org/how-to/get-started/). Once you have a Globus account you can
then register that account with MaterialsCommons.

### Registering Your Globus Account

Registering your Globus account with MaterialsCommons will let you use Globus for file uploads and downloads. To
register your account click on the "Account" link in the sidebar. This will take you to your account details page.

<img class="bordered" alt="Account Details" src="/assets/img/account-details.png">

Under Globus Account enter in your the email address you used to register for Globus and click save. That is all you
need to be able to use Globus with MaterialsCommons.

### Uploading files

Files are uploaded into a project. To use Globus to upload new files into your project you must first be in the project.
After that you can click on the "Globus Uploads" link in the sidebar. This will take you to a page that will prompt you
for a name and an (optional) description. Because you can have more than 1 file upload outstanding the name and description
will help you to tell them apart.

<img class="bordered" alt="Create Globus Upload" src="/assets/img/create-globus-upload.png">

Once you have filled out the name and optional description the page will change to show you a link to take you to Globus.
Each Globus upload requests gets a unique spot to upload its files to. In this way no two upload requests can interfere
with each other. Click on the "Goto Globus" to be take to the Globus app to being your upload.

<img class="bordered" alt="Show Globus Upload" src="/assets/img/show-globus-upload.png">

### View Outstanding Globus Uploads

MaterialsCommons keeps track of the Globus Uploads you have created. You can find the outstanding uploads for your
project by clicking on "Upload Status" in the sidebar. This will take you to a page with all the outstanding uploads
for the current project.

<img class="bordered" alt="Globus Upload Status" src="/assets/img/upload-status.png">

There are a number of actions you can take on this page.

  - Upload additional files
  - Mark upload as done (imports uploaded files into your project)
  - Delete upload (uploaded files will be deleted and **not** imported into your project)

### Upload additional files
If you select the "Goto Globus" link for an outstanding globus upload you will be take to Globus where
you can upload additional files for this request.

### Mark upload as done

The "DONE" button will mark a Globus upload as finished. Make sure all your files have finished uploading before you
do this. The DONE button will take you to a page with a link to check your Globus uploads. Clicking on 
"View Globus Upload Activity" will take you to a Globus page that will show you your file upload activity.

<img class="bordered" alt="Mark Upload Done" src="/assets/img/mark-globus-upload-done.png">

Marking a upload as done will cause MaterialsCommons to import all your file uploads into the project associated with
that upload request.

### Delete Upload

The "DELETE" button will delete an outstanding globus request. Delete will remove the request and all uploaded files.
Since your files have not yet been imported into your Project this won't affect your project. The DELETE button will
take you to a page with alink to check your Globus uploads. Clicking on 
"View Globus Upload Activity" will take you to a Globus page that will show you your file upload activity.

<img class="bordered" alt="Delete Upload" src="/assets/img/delete-globus-upload.png">