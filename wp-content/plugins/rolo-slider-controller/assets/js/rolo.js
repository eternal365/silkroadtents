jQuery(window).load(function(){
    var $fullHeight = jQuery('.rolo-full-height');
    if ($fullHeight.length) {
        $fullHeight.each(function(){
            var $slider = jQuery(this);
            var $top = $slider.offset().top;
            var $height = 'calc(100vh - ' + $top + 'px)';
            var $owldata = $slider.find('.rolo_slider').data('owlCarousel');
            $slider.css('height', $height);
            $slider.find('.slide-img').css('height', $height);

            jQuery(window).on('resize', function(){
                $owldata.updateVars();
            });
        });
    }
});