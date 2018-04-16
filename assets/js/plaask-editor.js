// Manipulate the size of the page and save usersetting to localstorage
function displayPageSize() {
    // Set variables 
    var page = $('#p-page'),
    pageHeightElement = $('#page-height'),
    pageWidthElement = $('#page-width');
    
    // Set page width and height from saved localstorage
    page.width(localStorage.getItem('pageWidth'));
    page.height(localStorage.getItem('pageHeight'));

    // Update the page width/height indicator
    pageWidthElement.html(page.width() + 'px + ');
    pageHeightElement.html(page.height() + 'px');

    // Make the page div resizable
    page.resizable({
        maxWidth: 1920,
        minHeight: 568,
        minWidth: 320,
        stop: function(event, ui) {
           localStorage.setItem('pageWidth', page.width());
           localStorage.setItem('pageHeight', page.height());
        }
    });

    // Update the height and width display
    page.resize(function() {
        pageWidthElement.html(page.width() + 'px + ');
        pageHeightElement.html(page.height() + 'px');
    });
}


// Save text to localstorage
function saveTextToLocalstorage() {
    // Get all editiple text input
    var pTextField = $('.contenteditable');

    // Save text to localstorage when focus is removed 
    pTextField.on( "focusout", function() {
        var selectedTextFieldId = this.id,
            selectedTextFieldContent = $('#' + this.id).html();
        localStorage.setItem(selectedTextFieldId, selectedTextFieldContent);
    });
}


// Insert data from localstorage to page
function insertLocalstorage() {
    // Loop over each key and localstorage and map matching keys to content IDs
    $.each(localStorage, function(key, value) {        
        var pId = $('#' + key);
        pId.html(value);
    });
}


// Execute functions
$(document).ready(function() {
    displayPageSize();
    insertLocalstorage();
    saveTextToLocalstorage();
});




// Set the page width and height to preset computer size
function computerPresetSize() {
    var page = $('#p-page'),
        pageHeightElement = $('#page-height'),
        pageWidthElement = $('#page-width'),
        wSize = '1450',
        hSize = '900';
    page.addClass('transition');
    pageWidthElement.html(wSize + 'px + ');
    pageHeightElement.html(hSize + 'px');
    localStorage.setItem('pageWidth', wSize);
    localStorage.setItem('pageHeight', hSize);
    page.width(wSize);
    page.height(hSize);
    setTimeout(function(){
        page.removeClass('transition');
    },250);
}
// Set the page width and height to preset phone size
function phonePresetSize() {
    var page = $('#p-page'),
        pageHeightElement = $('#page-height'),
        pageWidthElement = $('#page-width'),
        wSize = '375',
        hSize = '667';
    page.addClass('transition');
    pageWidthElement.html(wSize + 'px + ');
    pageHeightElement.html(hSize + 'px');
    localStorage.setItem('pageWidth', wSize);
    localStorage.setItem('pageHeight', hSize);
    page.width(wSize);
    page.height(hSize);
    setTimeout(function(){
        page.removeClass('transition');
    },250);
}
// Set the page width and height to preset tablet size
function tabletPresetSize() {
    var page = $('#p-page'),
        pageHeightElement = $('#page-height'),
        pageWidthElement = $('#page-width'),
        wSize = '1024',
        hSize = '768';
    page.addClass('transition');
    pageWidthElement.html(wSize + 'px + ');
    pageHeightElement.html(hSize + 'px');
    localStorage.setItem('pageWidth', wSize);
    localStorage.setItem('pageHeight', hSize);
    page.width(wSize);
    page.height(hSize);
    setTimeout(function(){
        page.removeClass('transition');
    },250);
}
// Maximize #p-page to preveiw website
function previewWebsite() {
    var page = $('#p-page');
    page.addClass('preview');
}
// Close preview website
function closePreviewWebsite() {
    var page = $('#p-page');
    page.removeClass('preview');
}



// Keyboard commands
$(document).keyup(function(e) {
    // When Escape is clicked
    if (e.keyCode === 27) {
        // Close preview if it is open
        if ($('#p-page').hasClass( "preview")) {
            closePreviewWebsite();
        }
    }
});