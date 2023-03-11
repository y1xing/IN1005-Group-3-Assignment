/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */ 
$(document).ready(function()
{
    console.log("ready");
    console.log($('#popup_box').length);
    $("html").click(function(e)
    {
    console.log(e.target);
    console.log($("#popup_box").length);
    if($(e.target).attr("class") !== "popup_class" && $(e.target).attr("class") !== "img-thumbnail" 
            && ($(".popup_class").length > 0))
        {
            console.log($(e.target).attr("class"));           
            $(".img-thumbnail").each(function()
            {
                if($(this).next().attr("class")=== "popup_class")
                {
                    if($(e.target).attr("class") !== "img_class")
                    $(this).next().remove();
                }
            });
            
        }
    });
    $(".img-thumbnail").click(function()
        {
            console.log($('#popup_box').length);
            if($('#popup_box').length === 0)
            {
                console.log($('#popup_box').length);
                let popup_box = document.createElement("span");
                popup_box.className = "popup_class";
                popup_box.id="popup_box";
                let popup = document.createElement("img");
                popup.src = "images/" + this.alt.toLowerCase() + "_large.jpg";
                popup.id = 'popup_img';
                popup.className = "img_class";
                popup_box.append(popup);
                $(this).after(popup_box);
            }
            else
            {
                    console.log($(this));
                    var popup_box = document.getElementById("popup_box");
                    var pic_id = document.getElementById("popup_img"); 
                    popup_box.remove();
                    pic_id.remove();
             };
        });
    var current_page_URL = location.href;
    $(".nav-item").each(function()
    {
       
        var target_url = $(this).children().prop("href");
        console.log(current_page_URL);
        console.log(this);
        console.log(target_url);
        if(target_url=== current_page_URL)
        {
            $(this).children().addClass('active');
        } else {
             $(this).children().removeClass('active');
        }
    });  
});
   
    /*
    $("#popup_box").mouseleave(function()
        {
            console.log("hi");
            var popup_box = document.getElementById("popup_box");
            var pic_id = document.getElementById("popup_img");
            popup_box.remove();
            pic_id.remove();
        }); */     

