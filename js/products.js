$(document).ready(function(){
    console.log("hello");
    $('.swiper').html(make_skeleton());


    setTimeout(function(){
        load_content(5);
    }, 3000);



    function make_skeleton()
    {
        var output = '';


        for(var count = 0; count < 5; count++)
        {
            output += '<div class="swiper-wrapper row flex-nowrap flex-xl-wrap justify-center">';
            output += '<div class="ph-item" style="border: none !important; padding: 0 !important;" >';
            output += '<div class="ph-col-12">';
            output += '<div class="ph-picture"></div>';
            output += '<div class="ph-row">';
            output += '<div class="ph-col-6 big"></div>';
            output += '<div class="ph-col-4 empty big"></div>';
            output += '<div class="ph-col-2 big"></div>';
            output += '<div class="ph-col-6"></div>';
            output += '<div class="ph-col-6 empty"></div>';
            output += '<div class="ph-col-6"></div>';
            output += '<div class="ph-col-6 empty"></div>';
            output += '<div class="ph-col-6 big"></div>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
        }
        return output;
    }

    function load_content(limit)
    {
        $.ajax({
            url:"get_products.php",
            method:"POST",
            data:{limit:limit},
            success:function(data)
            {
                $('.swiper').html(data);
            }
        })
    }

});