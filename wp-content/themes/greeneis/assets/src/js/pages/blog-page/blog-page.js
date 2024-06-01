import Global from "../../global/global";


class BlogPage {
    constructor() {
        this.global = Global;
        this.loadmore();
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }
        return this.instance;
    }

    loadmore() {
        $(document).on('click', '.loadmore', function (e) {
            e.preventDefault();

            let data = {
                'action': 'loadmore',
                'page': theme_ajax_object.current_page,
            };

            $.ajax({
                url: theme_ajax_object.ajax_url,
                data: data,
                type: 'POST',
                beforeSend: function (xhr) {
                    $('.loadmore').text('Loading...');
                },
                success: function (data) {
                    if (data) {
                        $('.post-container').append(data);
                        $('.loadmore').text('SEE MORE');
                        theme_ajax_object.current_page++;
                        if (theme_ajax_object.current_page >= theme_ajax_object.max_page) {
                            $('.loadmore').hide();
                        }
                    } else {
                        $('.loadmore').text('No more posts');
                    }
                }
            });
        });
    }
}

$(function () {
    BlogPage.getInstance();
});
