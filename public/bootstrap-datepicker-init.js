initDatapicker = function () {
    var $this = $(this),
        attrs = $this.attrs(),
        defaults = {
            locale: 'ru'
        },
        config = {};
    for (attr in attrs) {
        var sp = attr.split('data-dp-');
        if ('undefined' != typeof(sp[1])) {
            config[sp[1]] = attrs[attr];
        }
    }
    var options = $.extend({}, defaults, config);
    $this.parent()
        .css('position', 'relative')
        .css('z-index', '1005');
    $this.datetimepicker(options);
};

LarakitJs.initSelector('.js-element-tb-datepicker', initDatapicker);

