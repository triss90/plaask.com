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

// Set the page width and height to preset computer size
function computerPresetSize() {
    var page = $('#p-page'),
        pageHeightElement = $('#page-height'),
        pageWidthElement = $('#page-width'),
        wSize = '1920',
        hSize = '1080';
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
