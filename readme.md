Khorasan Newspaper Image Downloader
===================================

Used to download all pages of a specific newspaper (chosen by ID range)
-----------------------------------------------------------------------

Everything is rather clear, just give it the beginning ID and the ending ID and the script downloads all the pages of those specified newspapers. Each day has its own newspaper of that day with a unique ID. You can find those IDs in khorasannews.com archive.

### Variables ###

#### $id_from ####
The beginning of range IDs.

#### $id_to ####
The ending of range IDs.

#### $base ####
The folder in which the images should be stored.
default: "/images"

#### $id_folders ####
whether or not keep images of particular newspapers of days in separated folders.
default: true 
