function displayPageSize() {
    var page = $('#p-page'),
    pageHeightElement = $('#page-height'),
    pageWidthElement = $('#page-width');
    
    // Set page width and height from saved localstorage
    page.width(localStorage.getItem('pageWidth'));
    page.height(localStorage.getItem('pageHeight'));

    // Update the page width/height indicator
    pageWidthElement.html(page.width() + 'px + ');
    pageHeightElement.html(page.height() + 'px');

    page.resizable({
        maxWidth: 1450,
        minHeight: 568,
        minWidth: 320,
        stop: function(event, ui) {
           localStorage.setItem('pageWidth', page.width());
           localStorage.setItem('pageHeight', page.height());
        }
    });

    page.resize(function() {
        pageWidthElement.html(page.width() + 'px + ');
        pageHeightElement.html(page.height() + 'px');
    });
}
    
displayPageSize();
