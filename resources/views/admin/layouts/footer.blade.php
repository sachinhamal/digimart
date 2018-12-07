<footer class="app-footer">
    <div>
        <a href=""></a>
        <span>&copy; <?php  echo date('Y')?> .</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href=""></a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"/>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ilikenwf.github.io/jquery.mjs.nestedSortable.js"></script>

<script src="https://coreui.io/demo/vendors/popper.js/js/popper.min.js"></script>
<script src="https://coreui.io/demo/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="https://coreui.io/demo/vendors/pace-progress/js/pace.min.js"></script>
<script src="https://coreui.io/demo/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="https://coreui.io/demo/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
{{--<!-- Plugins and scripts required by this view-->
<script src="chart.js/dist/Chart.min.js"></script>
<script src="coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
<script src="js/main.js"></script>--}}
<script>
    $(function () {
        $.validate({
            validateOnBlur: true,
            errorMessagePosition: 'block', // Instead of 'inline' which is default
            scrollToTopOnError: false // Set this property to true on longer forms
        });
    });


</script>

<script>
    $(document).ready(function () {
        window.setTimeout(function () {
            $(".alert").fadeTo(100, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);
    });

    $(document).ready(function () {
        'use strict';
        var i = 0;
        $('.repeater').repeater({
            show: function () {
                i++;
                $(this).slideDown();
                var newID = 'nepdate' + i;
                // var newItem = 'item_id'+i;
                $(this).find('.nep-date').attr('id', newID);
                // $(this).find('.selectitem').attr('id',newItem);
                // $(this).val(newID);
                $('#' + newID).nepaliDatePicker();
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    globalstatus = true;
                    $(this).slideUp(deleteElement);
                } else {
                    globalstatus = false;
                }
            },

            ready: function (setIndexes) {

            }
        });

        window.outerRepeater = $('.outer-repeater').repeater({
            isFirstItemUndeletable: true,
            defaultValues: {'text-input': 'outer-default'},
            show: function () {
                console.log('outer show');
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                console.log('outer delete');
                $(this).slideUp(deleteElement);
            },
            repeaters: [{
                isFirstItemUndeletable: true,
                selector: '.inner-repeater',
                defaultValues: {'inner-text-input': 'inner-default'},
                show: function () {
                    console.log('inner show');
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    console.log('inner delete');
                    $(this).slideUp(deleteElement);
                }
            }]
        });

    });


</script>
@yield('scripts')
</body>
</html>