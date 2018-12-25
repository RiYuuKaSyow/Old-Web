document.write('\
<div class="gridster responsive-column-width">\
    <ul data-bind="grid: false">\
    </ul>\
</div>\
<header id="main-header" data-bind="if:allow_edit">\
</header>\
<div style="display:hidden">\
    <ul data-bind="template: { name: \'pane-template\', foreach: panes}">\
    </ul>\
</div>\
<script type="text/html" id="pane-template">\
    <li data-bind="pane: true">\
        <header>\
            <h1 data-bind="text: title"></h1>\
            <ul class="board-toolbar pane-tools">\
            </ul>\
        </header>\
        <section data-bind="foreach: widgets">\
            <div class="sub-section" data-bind="css: \'sub-section-height-\' + height()">\
                <div class="widget" data-bind="widget: true, css:{fillsize:fillSize}"></div>\
                <div class="sub-section-tools">\
                    <ul class="board-toolbar">\
                    </ul>\
                </div>\
            </div>\
        </section>\
    </li>\
</script>');
