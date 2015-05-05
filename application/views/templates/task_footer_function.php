<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('www.t-uvw.xyz @ 2015', '欢迎来到毕业设计作品展示平台');

        }, 1300);

        $('#side-menu li a').each(function(i, e){
            if ($(this).attr('href').match(/(.*)\//) && location.href.indexOf($(this).attr('href').match(/(.*)\//)[0]) != -1) {
                $(this).parents().filter('li').addClass('active');
                $(this).parents().filter('.nav-second-level').addClass('in');
            }
        });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    });