$(document).ready(function () {
var site_url = 'https://www.contrivance.co/uae10/website/';

	//Main product search section
    $('#auto_search').on('keyup', function () {
        var searchvalue = $('#auto_search').val();

        //alert(searchvalue);
        if (searchvalue == "") {
                $('#auto_search_result').html('');
                $('#auto_search_result').hide();
                
            } else {

	            $.ajax({
                    async: true,
                    url: site_url+"nft-marketplace/search-collection",
                    data: {auto_search_value: searchvalue},
                    type: 'GET',
                    success: function (response) {
                    	
                    	var data = JSON.parse(response);
                        var num_rows = data.num_rows;
                        var arr = data.result;
                        console.log(arr);
                        var searchdiv = "";

                        if (num_rows > 0) {
                            searchdiv = "<ul class='search_lst'>";
                            $.each(arr, function (index, item) {
                                
                                searchdiv += '<li class="">';
                                searchdiv += '<a href="" class="">';
                                searchdiv += '<img src="' + item.image_url + '" style="width: 50px;">';                                
                                searchdiv += '<span class="">' + item.name + '</span>';
                                searchdiv += '</a>';
                                searchdiv += '</li>';
                            });
                            searchdiv += '</ul>';
                            $('#auto_search_result').show();
                            $("#auto_search_result").html(searchdiv);
                        } else {
                            searchdiv = "<ul class='search_lst'>";
                            searchdiv += '<li class="">';
                            searchdiv += '<span class="">NO DATA FOUND</span>';
                            searchdiv += '</li>';
                            searchdiv += '</ul>';
                            $('#auto_search_result').show();
                            $("#auto_search_result").html(searchdiv);
                        }
                    }
                });

            }
    });
});