/**
 * Created by zeroleaf on 2015/4/3.
 */

$(function () {

    // 类别导航单击事件
    $('#category').children().each(function (idx, ele) {
        $(ele).bind('click', function (event) {
            $('#graph_area').css('display', 'none');

            var $target = $(event.target);
            var $tp = $target.parent();
            if ($tp.hasClass('active')) {
                return ;
            }

            $tp.siblings().removeClass('active');
            $tp.addClass('active');

            loadCategoryGraph();
        })
    });

    // 添加图表单击处理事件
    $('#add').bind('click', function () {

        var $graphArea = $('#graph_area');
        var $chevronInfo = $('#chevron-info');
        if ($chevronInfo.hasClass('fa-chevron-down')) {
            //$graphArea.css('display', 'none');
            loadCategoryGraph();
        } else {
            $graphArea.css('display', 'block');
            $.post('chart/api_get_available_graphs', {
                category: $('#category').children('li.active').text()
            }, function (data) {

                var $added = $('#available');
                $added.empty();

                var r = JSON.parse(data);
                if (r.length !== 0) {

                    $(r).each(function (idx, ele) {
                        var $chart = $('<div class="graph" title="单击以添加或移除" data-id="' + ele.id + '">' + ele.title + '</div>');
                        $chart.appendTo($added);
                    });
                }
            });
        }

        $chevronInfo.toggleClass('fa-chevron-right fa-chevron-down');
        $graphArea.toggleClass('fadeInDown fadeOutUp')
    });

    // TODO 重构 显示图标的代码可作为工具类, 用户显示以及管理员预览都有用到.
    function drawGraph($panel, options) {

        var lineChart = {
            title:    options.title,
            subtitle: options.sub_title,
            xLabel:   options.x_axis,
            yLabel:   options.y_axis,
            columns:  options.fields
        };

        if (options['type'] === 'line') {
            if (options['data_type'] === 'YW') {
                $panel.drawLineChart_week(lineChart, {
                    url: 'haw/sk_yw',
                    saikufile: options.saikufile,
                    columns: options.fields
                });
            } else if (options['data_type'] === 'YMD') {
                $panel.drawLineChart(lineChart, {
                    url: 'haw/sk_ymd',
                    saikufile: options.saikufile,
                    columns: options.fields
                });
            } else {
                alert("未知的 SAIKU 文件类型");
            }
        }

        if (options['type'] === 'stream') {

            $panel.drawLineChart_stream(lineChart, {
                url: 'haw/sk_stream_leaf',
                saikufile: options.saikufile
            });
        }
    }

    function loadCategoryGraph() {

        var category = $('#category').children('li.active').text();
        $.post('chart/api_get_added_graphs', {
            category: category
        }, function (data) {

            var $charts = $('#charts');
            var $added  = $('#added');
            $added.empty();

            $charts.empty();
            var r = JSON.parse(data);

            $(r).each(function (idx, ele) {
                $('<div id="chart' + idx +'" class="chart animated fadeInDown"></div>').appendTo($charts);
                $('<div class="graph" data-id="' + ele.graph_meta_id + '">' + ele.title + '</div>').appendTo($added);
                drawGraph($('#chart' + idx), ele);
            });
        });
    }

    $('body').bind('click', function (e) {
        var $target = $(e.target);
        if ($target.hasClass('graph')) {

            var data = {
                username: $('#username').data('val'),
                graph_meta_id: $target.data('id')
            };

            if ($target.parents('#available').length == 1) {
                $('#added').append($target);
                $.post('haw/save_user_graph', data, function() {
                    show_success_toast($target.text(), "添加成功");
                });
            } else {
                $('#available').append($target);
                $.post('haw/delete_user_graph', data, function() {
                    show_info_toast($target.text(), '删除成功!');
                });
            }
        }
    });

    function show_toast(type, msg, title) {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr[type](msg, title);
    }

    function show_success_toast(msg, title) {

        show_toast('success', msg, title);
    }

    function show_info_toast(msg, title) {
        show_toast('info', msg, title);
    }

    loadCategoryGraph();
});