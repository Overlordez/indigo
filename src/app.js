$('[data-youtube]').on('click', function () {
     let id = $(this).data('youtube'),
         padding = $(window).innerWidth() > 768 ? 120 : 30,
         ratio = 9 / 16,
         width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
         height = width * ratio,
         html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
             'src="' +
             id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
     $('body').append('<div class="outer">' + html + '</div>');
 });
 
 $(document).mouseup(function (e) {
     let container = $('.outer iframe');
 
     if (!container.is(e.target) && container.has(e.target).length === 0) {
         $('.outer').remove();
     }
 });
 
 $(document).on('keyup', function (e) {
     if (e.keyCode === 27) {
         $('.outer').remove();
     }
 });