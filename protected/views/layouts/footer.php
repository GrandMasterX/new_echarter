<footer>
    <div class="wrap"></div>
</footer>
<script>
    $(document).ready(function() {
        $('.menu_cont a').click(function() {
            var _num = $(this).data('num');
            $('.menu_cont .block').removeClass('active');
            $(this).parent().addClass('active');
        });

        $('.more.item > a').click(function() {
            $('#overlay').show();
            $('.popup.order').show();
            return false;
        });

        $('.close_popup').click(function() {
            $('#overlay').hide();
            $(this).closest('.popup').hide();
        });
    });
</script>