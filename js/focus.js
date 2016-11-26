/**
 * Created by Administrator on 2016/11/19.
 */
function set_footer(){
    if(document.body.clientHeight<620)
        $("footer").css("position","relative");
    else
        $("footer").css("position","absolute");
}

function setHotValue(){
    //设置好感度
    var $topLoader = $("#topLoader").percentageLoader({width: 200, height: 200, controllable : true, progress : 0.0, onProgressUpdate : function(val) {
        $topLoader.setValue(Math.round(val * 100.0));
    }});
    var topLoaderRunning = true;
    $topLoader.setProgress(0);
    $topLoader.setValue('HOT');
    var startValue = 0;
    var totalValue = 100;
    var realValue=37;
    var animateFunc = function() {
        startValue += 1;
        $topLoader.setProgress(startValue / totalValue);
        if (startValue < realValue) {
            setTimeout(animateFunc, 15);
        } else {
            topLoaderRunning = false;
        }
    };
    setTimeout(animateFunc, 15);
}

function setHotChart(){
    var dataSource = [
        { Date: '11-12', emotionValue: 80 },
        { Date: '11-13', emotionValue: 75 },
        { Date: '11-14', emotionValue: 69 },
        { Date: '11-15', emotionValue: 62 },
        { Date: '11-16', emotionValue: 55 },
        { Date: '11-17', emotionValue: 47 },
        { Date: '11-18', emotionValue: 37 },
    ];

    $("#bar-3").dxChart({
        dataSource: dataSource,
        commonSeriesSettings: {
            argumentField: "Date"
        },
        series: [
            { valueField: "emotionValue", name: "热度走势", color: "#40bbea" }
        ],
        argumentAxis:{
            grid:{
                visible: false
            }
        },
        tooltip:{
            enabled: true
        },

        legend: {
            verticalAlignment: "bottom",
            horizontalAlignment: "center"
        },
        commonPaneSettings: {
            border:{
                visible: true,
                right: false
            }
        }
    });
}

function setEmotionChart(){
    var dataSource = [
        { Date: '11-12', emotionValue: 45 },
        { Date: '11-13', emotionValue: 55 },
        { Date: '11-14', emotionValue: 70 },
        { Date: '11-15', emotionValue: 70 },
        { Date: '11-16', emotionValue: 68 },
        { Date: '11-17', emotionValue: 52 },
        { Date: '11-18', emotionValue: 33 },
    ];

    $("#bar-4").dxChart({
        dataSource: dataSource,
        commonSeriesSettings: {
            argumentField: "Date"
        },
        series: [
            { valueField: "emotionValue", name: "情绪分布", color: "#40bbea" }
        ],
        argumentAxis:{
            grid:{
                visible: false
            }
        },
        tooltip:{
            enabled: true
        },

        legend: {
            verticalAlignment: "bottom",
            horizontalAlignment: "center"
        },
        commonPaneSettings: {
            border:{
                visible: true,
                right: false
            }
        }
    });
}