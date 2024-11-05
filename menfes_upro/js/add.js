jQuery(document).ready(function($) { 

    $(document).on('click', '.load_ervaring', function(e){
        e.preventDefault();
        let _this = $(this);

        let data = {
            'action': 'load_ervaring',
            'query': _this.attr('data-param-posts'),
            'page': this_page,
        }

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: data,
            type: 'POST',
            success:function(data){
                if (data) {
                    $('#response_ervaring').append(data); 
                    this_page++;                      
                    if (this_page == _this.attr('data-max-pages')) {
                        _this.remove();               
                    }
                } else {                              
                    _this.remove();                   
                }
            }
        });
    });


    $('.load_blog').on('click', function(e) {
        e.preventDefault();
        let _this = $(this);

        let data = {
            'action': 'load_blog',
            'query': _this.attr('data-param-posts'),
            'page': this_page,
        }

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: data,
            type: 'POST',
            success:function(data){
                if (data) {
                    $('#response_blog').append(data); 
                    this_page++;                      
                    if (this_page == _this.attr('data-max-pages')) {
                        _this.remove();               
                    }
                } else {                              
                    _this.remove();                   
                }
            }
        });
    });

});