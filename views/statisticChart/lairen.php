<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="<?php echo $base_url?>public/js/jquery.min.js"></script>
    <script src="<?php echo $base_url?>public/js/echarts.js"></script>
    <script src="<?php echo $base_url?>public/js/worldcloud.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>public/js/echarts-china.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>public/js/geo.js"></script>
    <style>
        #main, #main1, #main2, #main4,#main1_1,#main1_2,#main1_3{
            width: 60%;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        #main2 {
            width: 280px;
            height: 280px;
        }

        #main3 {
            width: 200px;
            height: 200px;
            margin-top: 50px;
            margin-left: 50px;
            position: relative;
        }

        #main3 svg {
            width: 200px;
            height: 200px;
        }

        .text-box {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            top: 0;
            left: 0;
        }

        .perents {
            margin-top: 38%;
            font-size: 42px;
            color: #3a9afc;
            font-weight: 600;
        }

        .classes {
            /*margin-top: 50%;*/
            font-size: 14px;
            color: #333;
        }

        #main4 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        #main5 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        #main6 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        #main7 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }

        #main8 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }
        #main9 {
            width: 400px;
            height: 300px;
            position: relative;
            margin-top: 20px;
        }
        /*#main9 {*/
        /*width: 800px;*/
        /*height: 600px;*/
        /*position: relative;*/
        /*margin-top: 20px;*/
        /*}*/
        #main10 {
            width: 800px;
            height: 600px;
            position: relative;
            margin-top: 20px;
        }
        #main11 {
            width: 800px;
            height: 600px;
            position: relative;
            margin-top: 20px;
        }
        #main12 {
            width: 400px;
            height:300px;
            position: relative;
            margin-top: 20px;
        }
        #main13{
            width: 600px;
            height: 600px;
        }
        #main14{
            width: 500px;
            height: 500px;
        }
        #main15{
            width: 500px;
            height: 500px;
        }
        #result{
            width: 50px;
            height: 50px;
            position: fixed;
            right: 10px;
            top: 10px;
        }
    </style>
</head>
<body>
<div id="result"></div>
<div id="main"></div>
<div id="main1"></div>
<div id="main1_1"></div>
<div id="main1_2"></div>
<div id="main1_3"></div>
<div id="main2"></div>
<div id="main3" data-name="渠道2" data-perent="25">
    <svg xmlns="" id="circle" width="200" height="200">
        <circle stroke-width="20" stroke="#f2f2f2" fill="none" r="90" cx="100" cy="100"></circle>
        <circle stroke-width="20" stroke="#3a9afc" fill="none" r="90" cx="100" cy="100"
                stroke-dasharray="424.1150082346221 141.3716694115407"></circle>
    </svg>
    <div class="text-box">
        <div class="perents">75%</div>
        <div class="classes">渠道1</div>
    </div>
</div>
<div id="main4"></div>
<div id="main5"></div>
<div id="main6"></div>
<div id="main7"></div>
<div id="main8"></div>
<div id="main9"></div>
<div id="main10"></div>
<div id="main11"></div>
<div id="main12"></div>
<div id="main13"></div>
<div id="main14"></div>
<div id="main15"></div>
<script>
    var w;
    if(typeof(w)=="undefined")
    {
        w=new Worker("<?php echo $base_url?>public/webworkers/demo_workers.js");
    }
    w.onmessage=function(event){
        document.getElementById("result").innerHTML=event.data;
    };
    //    图0
    option = {
        tooltip: {
            trigger: 'axis'
        },
        color: ['#52cbf3', '#31c124', '#e5873a', '#f160a5'],
        legend: {
            itemWidth: 10,//图例的图形宽度
            itemHeight: 10,//图例的图形高度
            data: [{
                name: 'pv',
                icon: 'rect',
            }, {
                name: 'uv',
                icon: 'rect',
            }, {
                name: '注册',
                icon: 'rect',
            }, {
                name: '交易',
                icon: 'rect',
            }],
            left: 118,
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "#f2f2f2"
                    }
                },
                data: ['6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                axisLabel: {
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        }
                    }
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
                position: 'right',
                boundaryGap: true,
                nameTextStyle: {
                    color: "#999",
                    fontSize: "12"
                },
                axisTick: {//坐标轴的刻度线设置
                    show: false
                },
                axisLabel: {//坐标轴的标签设置
                    inside: true,
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        },
                        fontSize: 12
                    }
                },
                splitLine: {  //坐标轴的分割线设置
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {//坐标轴的抽线设置
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 0
                    }
                },
            }
        ],
        series: [
            {
                name: 'pv',
                type: 'line',
                smooth: true,
                symbolSize: 0,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(82, 203, 243, 0.15)"
                    }
                },
                data: [10, 12, 21, 54, 260, 830, 710]
            },
            {
                name: 'uv',
                type: 'line',
                smooth: true,
                symbolSize: 0,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(49, 193, 36, 0.15)"
                    }
                },
                data: [30, 182, 434, 791, 390, 30, 10]
            },
            {
                name: '注册',
                type: 'line',
                smooth: true,
                symbolSize: 0,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(229, 135, 58, 0.15)"
                    }
                },
                data: [1000, 200, 601, 234, 120, 90, 20]
            },
            {
                name: '交易',
                type: 'line',
                smooth: true,
                symbolSize: 0,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(241, 96, 165, 0.15)"
                    }
                },
                data: [1380, 1102, 601, 234, 120, 90, 20]
            }
        ]
    };
    var myChart = echarts.init(document.getElementById('main'));
    myChart.setOption(option);
    //    图1
    option1 = {
        tooltip: {
            trigger: 'axis'
        },
        color: ['#52cbf3', '#31c124', '#e5873a', '#f160a5'],
        legend: {
            itemWidth: 10,
            itemHeight: 10,
            data: [{
                name: '微信',
                icon: 'circle',
            }, {
                name: 'wap',
                icon: 'circle',
            }],
            left: 118
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                splitLine: {
//                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "#f2f2f2"
                    }
                },
                data: ['6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                axisLabel: {
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        }
                    }
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
//                position: 'right',
                boundaryGap: true,
                nameTextStyle: {
                    color: "#999",
                    fontSize: "12"
                },
                axisTick: {//坐标轴的刻度线设置
                    show: false
                },
                axisLabel: {//坐标轴的标签设置
//                    inside: true,
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        },
                        fontSize: 12
                    }
                },
                splitLine: {  //坐标轴的分割线设置
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {//坐标轴的抽线设置
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
            }
        ],
        series: [
            {
                name: '微信',
                type: 'line',
                smooth: true,
                symbolSize: 2,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(82, 203, 243, 0.15)"
                    }
                },
                hoverAnimation: true,
                data: [10, 12, 21, 54, 260, 830, 710]
            },
            {
                name: 'wap',
                type: 'line',
                smooth: true,
                symbolSize: 2,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(49, 193, 36, 0.15)"
                    }
                },
                hoverAnimation: true,
                data: [30, 182, 434, 791, 390, 30, 10]
            },
        ]
    };
    var myChart1 = echarts.init(document.getElementById('main1'));
    myChart1.setOption(option1);
    //    图1_1
    option1_1 = {
        color: ['#f3a18e', '#31c124', '#e5873a', '#f160a5'],
        legend: {
            itemWidth: 20,
            itemHeight: 10,
            data: [{
                name: '今日',
            }, {
                name: '昨日',
            }, {
                name: '7天前',
            }, {
                name: '30天前',
            }],
            bottom: 'bottom'
        },
        calculable: true,
        tooltip: {
            backgroundColor:"#fff",
            borderColor:"#f00",
            borderWidth:1,
            textStyle:{
                color:"#555"
            },
            formatter:"{b} :{c}",
            position:'bottom'

        },
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                splitLine: {
//                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "#cbd6e4"
                    }
                },
                data: ['9', '10', '11', '12', '13', '14', '15','16','17','18','19','20','21','23','24','0','1','2','3','4'],
                axisLabel: {
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        }
                    },
                    formatter: function (value, index) {
                        if (index % 2 === 0) {
                            return value;
                        } else {
                            return '';
                        }
                    }
                },
                axisTick:{
                    alignWithLabel:true,
                    length: 10,
//                    interval:2,//刻度间隔几个显示
                    lineStyle:{
                        color:"#cbd6e4"
                    }
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
//                position: 'right',
                boundaryGap: true,
                nameTextStyle: {
                    color: "#999",
                    fontSize: "12"
                },
                axisTick: {//坐标轴的刻度线设置
                    show: true
                },
                axisLabel: {//坐标轴的标签设置
//                    inside: true,
                    textStyle: {
                        color: function (value, index) {
                            return value >= 0 ? '#828282' : '#828282';
                        },
                        fontSize: 12
                    }
                },
                splitLine: {  //坐标轴的分割线设置
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {//坐标轴的抽线设置
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1,
                        opacity:0
                    }
                },
            }
        ],
        series: [
            {
                name: '今日',
                type: 'line',
                smooth: true,//是否平滑曲线显示。
                symbolSize: 5,//拐点的形状的大小
                hoverAnimation: true,
                itemStyle:{
                    emphasis:{
                        borderColor:"rgba(0, 0, 0, 0.5)",
                        borderWidth:5
                    }
                },
                data: [10, 12, 21, 54, 260, 830, 710,250,365,589,541,256,145,255,265,244,555,523,145]
            },
//            {
//                name: '昨日',
//                type: 'line',
//                smooth: true,
//                symbolSize: 2,//拐点的形状的大小
//                itemStyle: {normal: {areaStyle: {type: 'default'}}},
//                areaStyle: {
//                    normal: {
//                        color: "rgba(49, 193, 36, 0.15)"
//                    }
//                },
//                hoverAnimation: true,
//                data: [30, 182, 434, 791, 390, 30, 10,521,12,56,365,852,321,125,63,256,54,256,235]
//            },
        ]
    };
    var myChart1_1 = echarts.init(document.getElementById('main1_1'));
    myChart1_1.setOption(option1_1);
    //    图1_2
    option1_2 = {
        color: ['#3ec7f5'],
        legend: {
            itemWidth: 10,//图例的图形宽度
            itemHeight: 10,//图例的图形高度
            data: [{
                name: '家庭保洁',
                icon: 'rect',
            }],
            left: 118,
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "#ddd"
                    }
                },
                data: ['6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                axisLabel: {
                    textStyle: {
                        color: "#828282"
                    }
                },
                axisTick:{
                    show:false
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
                position: 'right',
                boundaryGap: true,
                nameTextStyle: {
                    color: "#999",
                    fontSize: "12"
                },
                axisTick: {//坐标轴的刻度线设置
                    show: false
                },
                axisLabel: {//坐标轴的标签设置
                    textStyle: {
                        color: '#828282',
                        fontSize: 12
                    }
                },
                splitLine: {  //坐标轴的分割线设置
                    show: true,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1
                    }
                },
                axisLine: {//坐标轴的抽线设置
                    show:false,
                    lineStyle: {
                        color: "#f2f2f2",
                        width: 1,
                        opacity:0
                    }
                },
            }
        ],
        series: [
            {
                name: '家庭保洁',
                type: 'line',
                smooth: true,//是否平滑曲线显示。
                symbolSize: 0,//拐点的形状的大小
                hoverAnimation: true,
                areaStyle: {
                    normal: {
                        color: "rgba(82, 203, 243, 0.15)"
                    }
                },
                data: [500, 500, 652, 54, 260, 830, 710]
            }
        ]
    };
    var myChart1_2 = echarts.init(document.getElementById('main1_2'));
    myChart1_2.setOption(option1_2);
    //    图1_3
    option1_3 = {
        color: ['#ff7f50',"#92ccec"],
        legend: {
            itemWidth: 10,//图例的图形宽度
            itemHeight: 10,//图例的图形高度
            data: [{
                name: 'pv',
                icon: 'triangle',
            }, {
                name: 'uv',
                icon: 'triangle',
            }],
            left: 'center',
            top:'middle'
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                splitLine: {
                    show: true,
                    lineStyle: {
                        color: "#9bbcc0",
                        width: 1,
                        type:'dashed'
                    }
                },
                axisLine: {
                    lineStyle: {
                        color: "#9bbcc0",
                        width: 2,
                    }
                },
                axisLabel: {
                    textStyle: {
                        color: "#828282"
                    }
                },
                data: ['6月', '7月', '8月', '9月', '10月', '11月', '12月']

            }
        ],
        yAxis: [
            {
                type: 'value',
                nameTextStyle: {
                    color: "#999",
                    fontSize: "12"
                },
                axisTick: {//坐标轴的刻度线设置
                    show: false
                },
                axisLabel: {//坐标轴的标签设置
                    textStyle: {
                        color: '#828282',
                        fontSize: 12
                    }
                },
                splitLine: {  //坐标轴的分割线设置
                    show: true,
                    lineStyle: {
                        color: "#9bbcc0",
                        width: 1
                    }
                },
                axisLine: {//坐标轴的抽线设置
                    show:true,
                    lineStyle: {
                        color: "#9bbcc0",
                        width: 2,
                    }
                },
            }
        ],
        series: [
            {
                name: 'pv',
                type: 'line',
                symbolSize: 15,//拐点的形状的大小
                symbol:"triangle",
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(250, 201, 182, 0.4)"
                    }
                },
                data: [10, 12, 21, 54, 260, 830, 710]
            },
            {
                name: 'uv',
                type: 'line',
                symbol:"triangle",
                symbolSize: 15,//拐点的形状的大小
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                areaStyle: {
                    normal: {
                        color: "rgba(135, 206, 250, 0.4)"
                    }
                },
                data: [30, 182, 434, 791, 390, 30, 10]
            }
        ]
    };
    var myChart1_3 = echarts.init(document.getElementById('main1_3'));
    myChart1_3.setOption(option1_3);
    //图2
    option2 = {
        color: ["#3a9afc", "#f2f2f2"],
        tooltip: {
            trigger: 'item',
            formatter: function (params) {
                val = params.percent + '-' + params.seriesName;
                return val.split("-").join("\n\n");
            }
        },
        grid: {
            borderWidth: '1px'
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data: ['渠道1', '访问量']
        },
        calculable: true,
        series: [
            {
                name: '渠道1',
                type: 'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: true,
                        position: "center",
                        formatter: function (params) {
                            console.log(params);
                            val = params.percent + "%" + '-' + params.seriesName;
//                            console.log(val.split("-").join("\n\n"))
                            return val.split("-").join("\n\n");
                        },
                        textStyle: {
                            color: "#3a9afc",
                            fontSize: 18
                        }
                    }
                },
                data: [
                    {value: 70, name: '渠道1'},
                    {value: 100, name: '访问量'},
                ]
            }
        ]
    };
    var myChart2 = echarts.init(document.getElementById('main2'));
    myChart2.setOption(option2);
    //图3
    var tu3 = document.getElementById("main3");
    //图4
    option4 = {
        color: ["#157eb0", "#174967"],
        polar: [
            {
                indicator: [
                    {text: '保洁服务', max: 6000},
                    {text: '拓荒保洁', max: 16000},
                    {text: '保养服务', max: 30000},
                    {text: '维修服务', max: 38000},
                    {text: '活动服务', max: 52000},
                    {text: '周期服务', max: 25000},
                    {text: '保姆服务', max: 25000}
                ],
                name: {//雷达图项目字体设置
                    textStyle: {
                        color: '#333'
                    }
                }
            }
        ],
        series: [
            {
                type: 'radar',
                data: [
                    {
                        value: [4300, 10000, 28000, 35000, 50000, 19000, 20000],
                        name: '预算分配'
                    },
                    {
                        value: [5000, 14000, 28000, 31000, 42000, 21000, 16000],
                        name: '实际开销'
                    }
                ]
            }
        ]
    };
    var myChart4 = echarts.init(document.getElementById('main4'));
    myChart4.setOption(option4);
    //图4
    option5 = {
        color: ['#0a3f5e', '#127daf'],
        radar: {
            indicator: [
                {name: "余额消费", max: 1000},
                {name: "礼品卡消费", max: 1000},
                {name: "即买即用", max: 1000},
                {name: "优惠券消费", max: 1000},
                {name: "待预约消费", max: 1000}
            ],
            name: {
                textStyle: {
                    color: "#333"
                }
            }
        },
        series: [
            {
                type: "radar",
                data: [{
                    name: 'item1',
                    value: [250, 200, 180, 300, 220]
                }, {
                    name: 'item2',
                    value: [280, 120, 600, 150, 220]
                }
                ]
            }
        ]
    };
    var myChart5 = echarts.init(document.getElementById("main5"));
    myChart5.setOption(option5);
    //图6
    option6 = {
        color: ['#c1232b', '#b5c334', '#fcce10', '#e87c25'],
        series: [{
            type: 'pie',
            roseType: 'radius',
            label: {
                normal: {
                    show: true,
                    formatter: function (params) {
                        console.log(params);
                        val = params.value + "%" + '-' + params.name;
                        return val.split("-").join("\n\n");
                    },
                    textStyle: {
                        color: "#333"
                    }
                }
            },
            data: [
                {name: '退款', value: 13.83},
                {name: '免单', value: 29.65},
                {name: '删除', value: 31.64},


                {name: '人工', value: 24.88},
            ]
        }]
    };
    var myChart6 = echarts.init(document.getElementById("main6"));
    myChart6.setOption(option6);
    //图8
    option7 = {
        color: ['#c1232b', '#b5c334', '#fcce10', '#e87c25', '#27727b', '#feb463', '#9bca63', '#60c0dd'],
        series: [{
            type: 'pie',
//            roseType: 'radius',
//            radius:["70%","60%"],
            label: {
                normal: {
                    show: true,
                    formatter: function (params) {
                        console.log(params);
                        val = params.value + "%" + ' ' + params.name;
                        return val;
                    },
                    textStyle: {
                        color: "#333"
                    }
                }
            },
            data: [
                {name: '苹果', value: 40.5},
                {name: '桃子', value: 13.4},
                {name: '梨', value: 10.6},
                {name: '火龙果', value: 8.6},
                {name: '水蜜桃', value: 8.1},
                {name: '哈密瓜', value: 7.2},
                {name: '甜瓜', value: 3.7},
                {name: '西瓜', value: 3.1},
                {name: '桃子', value: 2.5},
                {name: '其他', value: 2.3},
            ]
        }]
    };
    var myChart7 = echarts.init(document.getElementById("main7"));
    myChart7.setOption(option7);
    //图8
    option8 = {
        color: ['#c1232b', '#b5c334', '#fcce10', '#e87c25', '#27727b', '#feb463', '#9bca63', '#60c0dd'],
        calculable: true,
        polar: {
            zlevel: 0,
            z: 10
        },
        angleAxis: {
            min: 0,
            max: 360,
            interval: 360,
            startAngle: 0,
            axisLine: {
                lineStyle: {
                    color: "#fff"
                }
            },
        },
        radiusAxis: {
            min: 0,
            max: 10000,
            splitNumber: 2,
            zlevel: 99,//半径轴的层级
            boundaryGap: ['50%', '80%'],
            axisLine: {
                lineStyle: {
                    color: "#777",
                    shadowOffsetX: 0
                }
            },
            axisLabel: {
                textStyle: {
                    color: "#000"
                }
            }
        },
        series: [{
            type: 'pie',
            roseType: 'area',
            radius: ['20%', '70%'],
            label: {
                normal: {
                    show: false,
                    formatter: function (params) {
                        console.log(params);
                        val = params.value + "%" + '-' + params.name;
                        return val.split("-").join("\n\n");
                    },
                    textStyle: {
                        color: "#333"
                    },
                    labelLine: {
                        show: false
                    }
                }
            },
            data: [
                {name: '块1', value: 13.83},
                {name: '块2', value: 29.65},
                {name: '块3', value: 31.64},
                {name: '块4', value: 20.88},
                {name: '块5', value: 21.88},
                {name: '块6', value: 20.88},
                {name: '块7', value: 25.88},
            ]
        }]
    };
    var myChart8 = echarts.init(document.getElementById("main8"));
    myChart8.setOption(option8);
    //图9
    option9 = {
        color: ['#fad860', '#9bca63', '#fe8463'],
        series: [{
            type: 'pie',
            roseType: 'radius',
            radius:["40%","60%"],
            label: {
                normal: {
                    show: true,
                    formatter: function (params) {
                        console.log(params);
                        val = params.value + "%";
                        return val;
                    },
                    textStyle: {
                        color: "#333"
                    }
                }
            },
            data: [
                {name: '苹果', value: 42.12},
                {name: '桃子', value: 39.47},
                {name: '水蜜桃', value: 18.41}
            ]
        }]
    };
    var myChart9 = echarts.init(document.getElementById("main9"));
    myChart9.setOption(option9);
    //图10
    var option10 = {
        title: {
            text: "订单量分布---城市"
        },
        series: [
            {
                name: '订单量',
                type: 'map',
                mapType: 'china',
                roam: false,
                itemStyle: {
                    normal: {
                        areaColor: "#94c2ee",
                        borderColor: "#fff"
                    },
                    emphasis: {
                        areaColor: '#668cb1'
                    }
                },
                markPoint: {
                    symbol:"circle",
                    symbolSize:50,
                    label:{
                        normal:{
                            formatter:function (params) {
                                return params.value;
                            },
                            textStyle:{
                                color:"#fff",
                                fontSize:16,
                                fontWheight:600
                            }
                        }
                    },
                    itemStyle:{
                        normal:{
                            color:"#508bc2"
                        }
                    },
                    data: [
                        {
                            name: '厦门',
                            coord: [118.1,24.46],//地理坐标
                            value:"12000万"
                        }, {
                            name: '青岛',
                            coord: [120.33,36.07],
                            value:"18000万"
                        },
                        {
                            name: '重庆',
                            coord: [106.54,29.59],
                            value:"900万"
                        },
                        {
                            name: '郑州',
                            coord: [113.65,34.76],
                            value:"65000万"
                        },
                        {
                            name: '太原',
                            coord: [112.53,37.87],
                            value:"19000万"
                        }

                    ],
                }
            }
        ]
    };
    var myChart10 = echarts.init(document.getElementById("main10"));
    myChart10.setOption(option10);
    //图11
    var name="beijing";
    // JSON
    $.getJSON('./geojson/'+name+'.geojson', function (data) {
        echarts.registerMap(name, data);
        var chart = echarts.init(document.getElementById('main11'));
        chart.setOption({
            series: [{
                type: 'map',
                map: name,
                itemStyle: {
                    normal: {
                        areaColor: "#1e5c86",
                        borderColor: "#fff"
                    },
                    emphasis: {
                        areaColor: '#668cb1'
                    }
                },
                markPoint: {
                    symbol:'circle',
                    symbolSize : function (v){
                        return v/50;
                    },
                    label:{
                        normal:{
                            show:false,
                        }
                    },
                    itemStyle:{
                        normal:{
                            color:"#63c473",
                            borderWidth:1,
                            lineStyle: {
                                type: 'solid',
                                shadowBlur: 20,
                                borderColor:"#borderColor",
                                borderWidth:1,
                                shadowOffsetX:2
                            }
                        }
                    },
                    data: [
                        {
                            name: '密云县',
                            coord: [116.842716,40.377751],//地理坐标
                            value:"600"
                        }, {
                            name: '顺义区',
                            coord: [116.657608,40.129297],
                            value:"1000"
                        },
                        {
                            name: '石景山',
                            coord: [116.215601,39.903121],
                            value:"400"
                        }
                    ],
                }
            }]
        });
    });
    //图12
    var option12 = {
        title: {
            text: '标签云',
        },
        series: [
            {
                name: '技师评语',
                type: 'wordCloud',
                gridSize: 30,
                sizeRange: [12, 50],
                rotationRange: [0, 0],
                shape: 'circle',
                textStyle : {
                    normal : {
                        color : function() {
                            return 'rgb('
                                + [ Math.round(Math.random() * 160),
                                    Math.round(Math.random() * 160),
                                    Math.round(Math.random() * 160) ]
                                    .join(',') + ')';
                        },
                        fontWeight:600
                    },
                    emphasis : {
                        shadowBlur : 10,
                        shadowColor : '#333'
                    }
                },
                data: [
                    {
                        name: "用心",
                        value: 10000
                    },
                    {
                        name: "负责",
                        value: 6181,
                    },
                    {
                        name: "客气",
                        value: 4386,
                    },
                    {
                        name: "服务周到",
                        value: 4055,
                    },
                    {
                        name: "干活不错",
                        value: 2467,
                    },
                    {
                        name: "服务欠缺",
                        value: 2244,
                    },
                    {
                        name: "干活麻利",
                        value: 1898,
                    },
                    {
                        name: "优惠过低",
                        value: 1484,
                    }
                ]
            }
        ]
    };
    var myChart12 = echarts.init(document.getElementById("main12"));
    myChart12.setOption(option12);
    //图13
    var option13={
        color:['#87cefa','#ff7f50'],
        legend:{
            top:"bottom",
            data:[{
                name:"销售额",
                icon:"rect"
            },{
                name:"成本",
                icon:"rect"
            }]
        },
        xAxis:{
            type:'value'
        },
        yAxis:{
            type:"category",
            data:['产品a','产品b','产品c','产品d','产品e'],
        },
        series:[{
            name:"成本",
            type:"bar",
            itemStyle: {normal: {
                label : {show: true, position: 'left'}
            }},
            data:[
                {value:"-9578.9"},
                {value:"-8078.9"},
                {value:"-6578.9"},
                {value:"-4578.9"},
                {value:"-2578.9"},
            ]
        },{
            name:"销售额",
            type:"bar",
            itemStyle: {normal: {
                label : {show: true, position: 'right'}
            }},
            data:[
                {value:"4578.9"},
                {value:"2578.9"},
                {value:"7578.9"},
                {value:"9578.9"},
                {value:"5578.9"},
            ]
        }]
    };
    var myChart13 = echarts.init(document.getElementById("main13"));
    myChart13.setOption(option13);
    //图14
    var option14={
        color:['#87cefa','#ff7f50','#fad860'],
        tooltip : {
            trigger: 'axis',
            axisPointer:{
                type:"shadow"
            }
        },
        legend:{
            top:"bottom",
            data:[{
                name:"销售额",
                icon:"rect"
            },{
                name:"成本",
                icon:"rect"
            },{
                name:"利润",
                icon:"rect"
            }]
        },
        xAxis:{
            type:'category',
            data:['7月21日','7月22日','7月23日','7月24日']
        },
        yAxis:{
            type:"value",
            axisLabel:{formatter:'{value} %'}
        },
        series:[{
            name:"成本",
            type:"bar",
            data:[
                {value:"5"},
                {value:"10"},
                {value:"12"},
                {value:"9"},
            ]
        },{
            name:"销售额",
            type:"bar",
            data:[
                {value:"6"},
                {value:"8"},
                {value:"12"},
                {value:"3"},
            ]
        },{
            name:"利润",
            type:"bar",
            data:[
                {value:"7"},
                {value:"6"},
                {value:"9"},
                {value:"9"},
            ]
        }]
    };
    var myChart14 = echarts.init(document.getElementById("main14"));
    myChart14.setOption(option14);
    //图15
    var option15 = {
        radar: {
            indicator: [
                { text: '指标一' },
                { text: '指标二' },
                { text: '指标三' },
                { text: '指标四' },
                { text: '指标五' }
            ],
            center: ['50%', '50%'],
            radius: '80%',
            startAngle: 90,
            splitNumber: 4,
            shape: 'circle',
            name: {
                formatter:'【{value}】',
                textStyle: {
                    color:'#72ACD1'
                }
            },
            splitArea: {
                areaStyle: {
                    color: ['#B8D3E4', '#96C5E3', '#7DB5DA', '#72ACD1']
                }
            },
            axisTick: {
                show: true,
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.8)'
                }
            },
            axisLabel: {
                show: true,
                textStyle: {
                    color: 'white'
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.4)'
                }
            },
            splitLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.4)'
                }
            },
            series:[{
                name:"成本",
                type:"bar",
                itemStyle: {normal: {
                    label : {show: true, position: 'left'}
                }},
                data:[
                    {value:"-9578.9"},
                    {value:"-8078.9"},
                    {value:"-6578.9"},
                    {value:"-4578.9"},
                    {value:"-2578.9"},
                ]
            },{
                name:"销售额",
                type:"bar",
                itemStyle: {normal: {
                    label : {show: true, position: 'right'}
                }},
                data:[
                    {value:"4578.9"},
                    {value:"2578.9"},
                    {value:"7578.9"},
                    {value:"9578.9"},
                    {value:"5578.9"},
                ]
            }]
        }
    };
    var myChart15 = echarts.init(document.getElementById("main15"));
    myChart15.setOption(option15);
</script>
</body>
</html>