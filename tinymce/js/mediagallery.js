var MediagalleryDialog = {
    init : function(ed) {
    },

    insert : function() {
        var f = document.forms[0];
        var selected = f.elements['gallery'].options[f.elements['gallery'].selectedIndex];
        var ed = tinyMCEPopup.editor;
        var mg = '<img src="' + ed.getParam('document_base_url') + '/mod/mediagallery/pix/icon.gif"' +
            ' title="' + selected.text + '" alt="' + selected.value + '" data-gallery="' + selected.value + '" />';
        var galleryurl = ed.getParam('document_base_url') + '/mod/mediagallery/view.php?g=' + selected.value;
        mg = '<a href="' + galleryurl + '" class="filter_mediagallery">' + mg + '</a>';

        tinyMCEPopup.restoreSelection();

        ed.execCommand('mceInsertContent', false, mg);

        tinyMCEPopup.close();
    }
};

tinyMCEPopup.onInit.add(MediagalleryDialog.init, MediagalleryDialog);
