$(document).ready(function(){

    //ketika kolom search diisi
    $('#search-event').on('keyup', function(){
        //input dari kolom search
        var searchValue = $('#search-event').val();
        //input dari cat sekarang
        var categoryValue = $('.bubble-box.purple-but').attr('value');

        //Masukin ke function penggabung
        loadFilteredContent(searchValue, categoryValue);
    });

    //ketika category diklik
    $('.bubble-box').on('click', function(){

        //pindahin warna purple
        $('.bubble-box').removeClass('purple-but');
        $(this).addClass('purple-but');

        //input dari kolom search
        var searchValue = $('#search-event').val();
        //input dari cat sekarang
        var categoryValue = $(this).attr('value');
        loadFilteredContent(searchValue, categoryValue);
    });

    function loadFilteredContent(searchValue, categoryValue, lim) {
        var url = '/destinationAdmin/result';
        var parameters = [];

        //periksa apakah lim, searchValue, dan categoryValue dimasukin di fungsi di atas
        //Kalo iya, tambah di get ?search-event=banjir
        if (searchValue) {
            parameters.push('search-destination=' + encodeURIComponent(searchValue));
        }
        if (categoryValue && categoryValue !== 'All') {
            parameters.push('category-destination=' + encodeURIComponent(categoryValue));
        }
        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }
        console.log(url);

        $('#destinationResult').load(url);
    }

});
