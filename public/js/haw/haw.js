"use strict";

$(function () {

    $('#username').bind('change', function() {
        $('#added-graph').empty();
        $('#available-graph').empty();

        var user = $(this).val();
        if (user !== '') {
            loadGraphs(user);
        }
    });

    function loadGraphs(user) {
        $.post('haw/load_graphs', { user: user}, function (data) {
            var r = JSON.parse(data);
            var addedGraphs = r['added_graphs'];
            var availableGraphs = r['available_graphs'];

            addGraphs($('#added-graph'), $(addedGraphs));
            addGraphs($('#available-graph'), $(availableGraphs));
        });
    }

    function addGraphs($panel, $graphs) {

        // TODO 没有条目可以显示  当前暂无图表
        if ($graphs.length === 0) {
            return;
        }

        $graphs.each(function (idx, ele) {
            var $graph = $('<div class="graph-item" title="单击以添加或移除" data-id="' + ele.id + '">' + ele.title + "</div>");
            $panel.append($graph);
        })
    }

    $('body').bind('click', function (e) {
        var $target = $(e.target);
        if ($target.hasClass('graph-item')) {

            var data = {
                username: $('#username').val(),
                graph_meta_id: $target.data('id')
            };

            if ($target.parents('#available-graph').length == 1) {
                $('#added-graph').append($target);
                $.post('haw/save_user_graph', data, function() {
                    show_success_toast($target.text(), "添加成功");
                });
            } else {
                $('#available-graph').append($target);
                $.post('haw/delete_user_graph', data, function() {
                    show_info_toast($target.text(), '删除成功!');
                });
            }
        }
    });

    // Toastr

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

    function show_error_toast(msg, title) {

        show_toast('error', msg, title);
    }

    function show_info_toast(msg, title) {
        show_toast('info', msg, title);
    }


});