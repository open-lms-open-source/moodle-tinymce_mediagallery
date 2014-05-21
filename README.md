#Media collection filter for Moodle
When used in conjuction with the filter plugin (http://github.com/netspotau/moodle-filter_mediagallery) this plugin allows you to have carousels of a gallery or galleries displayed in your course in labels and such.

If the filter is not installed, then an image is simply displayed that links to the gallery.

This plugin requires the Media collection activity be installed (http://github.com/netspotau/moodle-mod_mediagallery).

This plugin was written by Adam Olley \<adam.olley@netspot.com.au\> for the University of New South Wales (http://www.unsw.edu.au).

##Install
### Using Moodle
You can install the plugin from the Moodle plugin repository from within your Moodle installation.
### Using a downloaded zip file
You can download a zip of this plugin from: https://github.com/netspotau/moodle-tinymce_mediagalley/zipball/master  
Unzip it to your lib/editory/tinymce/plugins folder and rename the extracted folder to 'mediagallery'.
### Using Git
To install using git, run the following command from the root of your moodle installation:  
git clone git://github.com/netspotau/moodle-tinymce_mediagallery.git lib/editor/tinymce/plugins/mediagallery  

Then add lib/editor/tinymce/plugins/mediagallery to your gitignore.

##Post-Install
After installing the plugin, you'll need to add the button to your tinymce toolbar.

Goto Site Admin > Plugins > Text editors > TinyMCE HTML editor > General settings

After ensuring the 'Insert Media gallery' plugin is listed and enabled, add the button where you'd like it in the toolbar by adding it somewhere in the 'customtoolbar' setting on that page and save your changes.

##Credits
Media collection and its companion plugins were developed by NetSpot Pty Ltd (http://www.netspot.com.au) for the University of New South Wales (http://www.unsw.edu.au).

Code: Adam Olley \<adam.olley@netspot.com.au\>  
Concept: UNSW (http://www.unsw.edu.au)  
Design: UNSW (http://www.unsw.edu.au) & Mark Bailye \<mark.bailye@netspot.com.au\>  
Testing: UNSW (http://www.unsw.edu.au)  
