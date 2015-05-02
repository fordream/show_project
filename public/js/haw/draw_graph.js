$(function () {

    function getInputData() {

        var $saiku = $('#saiku_file').find('option:selected');
        return {
            'type':             $('#type').val(),
            'title':            $('#title').val(),
            'subTitle':         $('#sub_title').val(),
            'xAxis':            $('#x_axis').val(),
            'yAxis':            $('#y_axis').val(),
            'projectName':      $('#project_name').val(),
            'category':         $('#category').val(),
            'order':            $('#order').val(),
            'columns':          $saiku.data('fields'),
            'saikuId':          $saiku.val(),
            'saikuFile':        $saiku.text(),
            'saikuDataType':    $saiku.data('data-type')
        };
    }

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

    $("#save").bind("click", function() {
        var options = getInputData();
        $.post("haw/save_graph", {
            "saiku_map_id": options.saikuId,
            "project_name": options.projectName,
            "type":         options.type,
            "title":        options.title,
            "sub_title":    options.subTitle,
            "x_axis":       options.xAxis,
            "y_axis":       options.yAxis,
            "category":     options.category,
            "order":        options.order
        }, function(data) {
            var r = JSON.parse(data);
            if (r['result'] === 'success') {
                show_success_toast(r['msg']);
            } else {
                show_error_toast(r['msg']);
            }
        })
    });

    $('#preview').bind('click', function() {

        previewGraph();
    });

    function previewGraph() {
        var options   = getInputData();
        var lineChart = {
            title:    options.title,
            subtitle: options.subTitle,
            xLabel:   options.xAxis,
            yLabel:   options.yAxis,
            columns:  options.columns
        };

        var $graph = $('#graph');
        if (options.type === 'line') {
            if (options.saikuDataType === 'YW') {
                $graph.drawLineChart_week(lineChart, {
                    url: 'haw/sk_yw',
                    saikufile: options.saikuFile,
                    columns: options.columns
                });
            } else if (options.saikuDataType === 'YMD') {
                $graph.drawLineChart(lineChart, {
                    url: 'haw/sk_ymd',
                    saikufile: options.saikuFile,
                    columns: options.columns
                });
            } else {
                alert("未知的 SAIKU 文件类型");
            }
        }

        if (options.type === 'bubble') {

            $graph.drawbubbleChart(lineChart, {
                url: 'haw/sk_stream_bubble',
                saikufile: options.saikuFile
            });
        }

        if (options.type === 'stream') {

            $graph.drawLineChart_stream(lineChart, {
                url: 'haw/sk_stream_leaf',
                saikufile: options.saikuFile
            });
        }
    }
});