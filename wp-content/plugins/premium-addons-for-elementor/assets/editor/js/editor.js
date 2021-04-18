(function () {
    var $ = jQuery;

    var selectOptions = elementor.modules.controls.Select2.extend({
        onBeforeRender: function () {
            if (this.container && "section" === this.container.type) {
                var widgetObj = elementor.widgetsCache || elementor.config.widgets,
                    optionsToUpdate = {};

                this.container.children.forEach(function (child) {

                    child.view.$childViewContainer.children("[data-widget_type]").each(function (index, widget) {
                        var name = $(widget).data("widget_type").split('.')[0];

                        if ('undefined' !== typeof widgetObj[name]) {
                            optionsToUpdate[".elementor-widget-" + widgetObj[name].widget_type + " .elementor-widget-container"] = widgetObj[name].title;
                        }
                    });
                });

                this.model.set("options", optionsToUpdate);
            }
        },
    });

    elementor.addControlView("premium-select", selectOptions);

})(jQuery);