<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Infinite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

</head>
<body>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Infinite Scroll Pagination</h2>
                </div>
                <div class="col-md-12" id="post-data">
                    @include('data')
                </div>
            </div>
        </div>
    </section>

    <div class="ajax-load text-center" style="display:none">
        <p><img src="{{asset('images/loader.gif')}}" alt="">Loading More Post</p>
    </div>

    <script>
        function loadMoreData(page){
            $.ajax({
                url: '?page=' +page,
                type: 'get',
                beforeSend: function(){
                    $('.ajax-load').show();
                }
            })
            .done( function(data){
                if(data.html==" "){
                    $('.ajax-load').html(" No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $('#post-data').append(data.html);
            })
            .fail( function(jqXHR, ajaxOptions, thrownError){
                alert('Serer not responding....');
            });
        }

        var page = 1;
        $(window).scroll( function(){
            if($(window).scrollTop()+ $(window).height() >= $(document).height()){
                page++;
                loadMoreData(page);
            }
        });
    </script>

</body>
</html>