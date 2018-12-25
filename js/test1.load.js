head.js(//_res.urlport + "js/freeboard_bk.js",
    _res.urlport + "js/v1/datasourceModel.js",
    _res.urlport + "js/v1/paneModel.js",
    _res.urlport + "js/v1/widgetModel.js",
    _res.urlport + "js/v1/freeboardModel.js",
    _res.urlport + "js/v1/freeboardUI.js",
    _res.urlport + "js/v1/dialogModel.js",
    _res.urlport + "js/v1/jsEditor.js",
    _res.urlport + "js/v1/pluginEditor.js",
    _res.urlport + "js/v1/valueEditor.js",
    _res.urlport + "js/v1/freeboard.js",
    _res.urlport + "js/freeboard.plugins.min.js",
    _res.urlport + "plugins/thirdparty/raphael.2.1.0.min.js",
    _res.urlport + "plugins/thirdparty/justgage.1.0.1.js",
    _res.urlport + "plugins/thirdparty/jquery.sparkline.min.js",
    _res.urlport + "plugins/thirdparty/jquery.keyframes.min.js",
    _res.urlport + "plugins/thirdparty/widget.ragIndicator.js",
    _res.urlport + "plugins/thirdparty/jquery.jqplot.min.js",
    _res.urlport + "plugins/thirdparty/jqplot.dateAxisRenderer.min.js",
    _res.urlport + "plugins/thirdparty/jqplot.enhancedLegendRenderer.min.js",
    _res.urlport + "plugins/thirdparty/jqplot.highlighter.min.js",
    _res.urlport + "plugins/thirdparty/jqplot.cursor.min.js",
    _res.urlport + "plugins/freeboard/widget.jqplot.js",
    _res.urlport + "plugins/freeboard/widget.action.js",
    _res.urlport + "plugins/customize/actionwidget.js",
    _res.urlport + "plugins/customize/common_function.js",

    function() {
        $(function() {
            freeboard.initialize(false);
            freeboard.drawEmbedWidget(_res);
            //freeboard.createNoderedRes();
        });
    }
);
