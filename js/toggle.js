/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */



function activateMenu()
{
    var current_page_URL = location.href;
    $(".nav-item").each(function()
    {
        
        var target_url = $(this).children().prop("href");
        if(target_url=== current_page_URL)
        {
            $(this).children().addClass('active');
        } else {
             $(this).children().removeClass('active');
        }
    });                  
}

