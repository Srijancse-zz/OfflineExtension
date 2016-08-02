WikiEditor Extension : OfflineExtension
======

**OfflineExtension** is an extension for WikiToLearn that will add offline support to the current Wiki Editor.

Features 
---------------- 

This extension notifies the user, his/her's internet connectivity status and if submitted while offline, will parse Wikitext to HTML and then renders it.



Installation
----------------
- Download and place the file(s) in a directory called ```OfflineExtension``` in your ```extensions/``` folder.
- Add the following code at the bottom of your ```LocalSettings.php``` file: 
 


```
require_once "$IP/extensions/OfflineExtension/OfflineExtension.php";
```

Navigate to ```Special:Version``` on your wiki to verify that the extension is successfully installed.


