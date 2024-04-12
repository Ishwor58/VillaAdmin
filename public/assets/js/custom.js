
(function ($) {
	
	"use strict";

    // console.log("running");
    // $(document).ready(function () {
    //     var path = window.location.pathname;
    //     console.log(path);

    //     $('.menu-item ').each(function () {
    //         var href = $(this).find('a').attr('href');
    //         console.log(href);

    //         try {
    //             var routePath = new URL(href).pathname;
    //             console.log(routePath);
    //         } catch (error) {
    //             console.error('An error occurred while processing the menu items:', error);

    //             routePath = href;
    //         }
       
    //          // Extract the pathname directly from the href
             
    //          // this is also a part of the condition where menu-items have sub-items || (path !== '/' && routePath !== '/' && path.startsWith(routePath))
    //         if (path === routePath ) {
    //             $(this).addClass('active');
    //             console.log("class added");
    //             $(this).parents('.menu-item').addClass('active'); // Add active class to parent menu items as well

    //             console.log("class added");
    //         }
    //     });
    // });


    // the function below is used becaues we are comparing url since we are using {{route()}} function 
    // the function above compare pathname and convert the url output of {{route()}} function to pathname for comparision
    // the function above also have a try catch to detect a type conversion error in case the route is in pathname format
    // the function above works for both url and pathname comparision

    $(document).ready(function () {
        
        var url = window.location.href;
            console.log(url);
            $('.menu-item').each(function () {
                var href = $(this).find('a').attr('href');
                console.log(href);
               // this is also a part of the condition where menu-items have sub-items || (url !== window.location.origin && href !== window.location.origin && url.startsWith(href))
                if (url === href  ) {
                    $(this).addClass('active');
                    console.log('class added');
                    $(this).parents('.menu-item').addClass('active'); // Add active class to parent menu items as well
                    console.log("class added");
                }
            });
       
    });
    

   
    
})(window.jQuery);