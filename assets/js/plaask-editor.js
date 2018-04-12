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
        maxWidth: 1450,
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
            selectedTextFieldContent = $('#' + this.id).text();
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

function navigation() {

}


// Execute functions
$(document).ready(function() {
    displayPageSize();
    insertLocalstorage();
    saveTextToLocalstorage();
    navigation();
});
