// moreBtn = document.getElementById("myBtn");
// moreProducts = document.getElementById("more");

// moreBtn.addEventListener('click', function(){
//     moreProducts.style.display = "inline";
// })

$(document).ready(function(){
    // ketika see more diclick
    $(document).on('click', '#myBtn1', function(){
        //input berapa batch see more yg harus keload di kondisi sekarang
        var lim = $('#myBtn1').val();
        $(this).fadeOut(100);

        var categoryValue = $('#cat_id1').val();

        //Masukin ke function penggabung
        loadFilteredContent(lim, categoryValue);
    });

    // ketika category diklik
    // $('.categoriesCart').on('click', function(){
    //     //input dari cat sekarang
    //     var categoryValue = $(this).attr('value');
    //     //input berapa batch see more yg harus keload
    //     var lim = 1;
    //     loadFilteredContent(categoryValue, lim);
    // });

    function loadFilteredContent(lim, categoryValue) {
        var url = '/products/result';
        var parameters = [];

        // console.log(categoryValue)

        //periksa apakah lim, searchValue, dan categoryValue dimasukin di fungsi di atas
        //Kalo iya, tambah di get ?search-event=banjir
        if(lim){
            parameters.push('pg=' + encodeURIComponent(lim));
        }

        console.log(categoryValue);
        if (categoryValue) {
            parameters.push('cat-id=' + encodeURIComponent(categoryValue));
            // parameters.push('cat-id=' + categoryValue);
        }

        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }

        // console.log(url);
        //load secara live, tapi yang diload satu container aja, yaitu result container
        //jadi hasil livesearch itu intinya harus ada dalam 1 container, bukan semua page nya yang berubah
        //cari di eventsResult.blade.php
        console.log(url)
        $('#result-container').load(url);
    }

});
