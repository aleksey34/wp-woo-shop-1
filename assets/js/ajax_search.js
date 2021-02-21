jQuery(function ($) {


    var searchInput = $(".search_form  input[type=text][name=s]");
    var searchResult = $("#searchResult");
    var searchResultClose  = jQuery("#searchResultClose")


searchInput.on("keyup" , function (event) {
   // event.preventDefault();

    var searchStr = $(this).val();

if(searchStr.length < 4){
    return false;
}

var data ={

    s:searchStr ,
    action: "search-ajax" ,
    nonce: searchData.nonce
};

$.ajax({
    url: searchData.url ,
    data: data ,
    type: "POST",
   // dataType: "json",
    beforeSend: function (data) {
        console.log("before");
        searchResultClose.text("Ищем...");
      //  console.log(data);
    },
    success: function (data) {
        console.log("request");
        console.log(data);
        searchResult.html(data['out']);
        searchResultClose.text("Очистить...");

    }
});






    });

searchResultClose.on("click" , function (event) {
    searchInput.val("");
    searchResult.html("");
    $(event.target).text("Ищем...");
})


});