function displayPageSize(){var t=$("#p-page"),e=$("#page-height"),i=$("#page-width");t.width(localStorage.getItem("pageWidth")),t.height(localStorage.getItem("pageHeight")),i.html(t.width()+"px + "),e.html(t.height()+"px"),t.resizable({maxWidth:1450,minHeight:568,minWidth:320,stop:function(e,i){localStorage.setItem("pageWidth",t.width()),localStorage.setItem("pageHeight",t.height())}}),t.resize(function(){i.html(t.width()+"px + "),e.html(t.height()+"px")})}displayPageSize();