/**
* Custom Js for image select in customizer
*
* @package creativ_education
*/
 jQuery(document).ready(function($) {
    $('#creativ-education-img-container li label img').click(function(){    	
        $('#creativ-education-img-container li').each(function(){
            $(this).find('img').removeClass ('creativ-education-radio-img-selected') ;
        });
        $(this).addClass ('creativ-education-radio-img-selected') ;
    });                    
});
