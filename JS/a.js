/*
 * MiniPreview v0.9
 *
 * @author  Will Boyd
 * Shared by Codegena
 */

(function($) {
    var PREFIX = 'mini-preview';
    
    // implemented as a jQuery plugin
    $.fn.miniPreview = function(options) {
        return this.each(function() {
            var $this = $(this);
            var miniPreview = $this.data(PREFIX);
            if (miniPreview) {
                miniPreview.destroy();
            }

            miniPreview = new MiniPreview($this, options);
            miniPreview.generate();
            $this.data(PREFIX, miniPreview);
        });
    };
    
    var MiniPreview = function($el, options) {
        this.$el = $el;
        this.$el.addClass(PREFIX + '-anchor');
        this.options = $.extend({}, this.defaultOptions, options);
        this.counter = MiniPreview.prototype.sharedCounter++;
    };
    
    MiniPreview.prototype = {
        sharedCounter: 0,
        
        defaultOptions: {
            width: 320,
            height: 395,
            scale: .25,
        },
                
        generate: function() {
            this.createElements();
        },

        createElements: function() {
            var $wrapper = $('<div>', { class: PREFIX + '-wrapper' });
            var $loading = $('<div>', { class: PREFIX + '-loading' });
            var $frame = $('<img>', { class: PREFIX + '-img' });
            $wrapper.appendTo(this.$el).append($loading);
            
            // sizing
            $wrapper.css({
                width: this.options.width + 'px',
                height: this.options.height + 'px'
            });
            
            // scaling
            var inversePercent = 100 / this.options.scale;
            $frame.css({
                width: inversePercent + '%',
                height: inversePercent + '%',
                transform: 'scale(' + this.options.scale + ')'
            });

            // positioning
            var fontSize = parseInt(this.$el.css('font-size').replace('px', ''), 10)
            var top = (this.$el.height() + fontSize) / 2;
            var left = (this.$el.width() - $wrapper.outerWidth()) / 2;
            $wrapper.css({
                top: top + 'px',
                left: left + 'px'
            });
        },
        
        
        getNamespacedEvent: function(event) {
            return event + '.' + PREFIX + '_' + this.counter;
        },

        destroy: function() {
            this.$el.removeClass(PREFIX + '-anchor');
            this.$el.parent().off(this.getNamespacedEvent('mouseenter'));
            this.$el.off(this.getNamespacedEvent('mouseenter'));
            this.$el.find('.' + PREFIX + '-wrapper').remove();
        }
    };
})(jQuery);