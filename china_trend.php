<!DOCTYPE html>
<head> 
  <meta charset="UTF-8">
  <title>实时更新：新型冠状病毒肺炎疫情地图</title>
  <!-- 引入 css样式 -->
  <script src="https://www.echartsjs.com/examples/vendors/jquery/jquery.js"></script>
  <!-- 引入 echarts.js -->
  <script src="https://www.echartsjs.com/examples/vendors/echarts/echarts.min.js?_v_=1578305236132"></script>
  <!--引入中国的地图数据js文件，引入后会自动注册地图名字和数据-->
  <script src="./js/map/china.js"></script>
  <link rel="stylesheet" href="css/map.css" />
</head>

<body>
<div class="container">
  <h3>历史确诊人数如下：</h3>
  <!--为echarts准备一个dom容器-->
  <div id="myEcharts"></div>
</div>
<script>
var myChart = echarts.init(document.getElementById('myEcharts'));
//对话框图片
var uploadedDataURL = "";

option = {
    backgroundColor: '#FFF',
    grid: {
        top: '9%',
        bottom: '19%',
        left: '6%',
        right: '4%'
    },
    tooltip: {
        trigger: 'axis',
        label: {
            show: true
        }
    },
    xAxis: {
        boundaryGap: true, //默认，坐标轴留白策略
        axisLine: {
            show: false
        },
        splitLine: {
            show: false
        },
        axisTick: {
            show: false,
            alignWithLabel: true
        },
        data: []
        
    },
    yAxis: {
        axisLine: {
            show: false
        },
        splitLine: {
            show: true,
            lineStyle: {
                type: 'dashed',
                color: 'rgba(33,148,246,0.2)'
            }
        },
        axisTick: {
            show: false
        },
        splitArea: {
            show: true,
            areaStyle: {
                color: 'rgb(245,250,254)'
            }
        }
    },
    series: [{
        type: 'line',
        symbol: 'circle',
        symbolSize: 7,
        lineStyle: {
            color: 'rgb(33,148,246)',
            shadowBlur: 12,
            shadowColor: 'rgb(33,148,246,0.9)',
            shadowOffsetX: 1,
            shadowOffsetY: 1
        },
        itemStyle: {
            color: 'rgb(33,148,246)',
            borderWidth: 1,
            borderColor: '#FFF'
        },
        label: {
            show: false,
            distance: 1,
            emphasis: {
                show: true,
                offset: [25, -2],
                //borderWidth:1,
                // borderColor:'rgb(33,148,246)',
                //formatter:'{bg|{b}\n数据量:{c}}',
                backgroundColor: 'rgba(0,0,0,0)',
                color: '#FFF',
                padding: [8, 20, 8, 6],
                //width:60,
                height: 36,
                formatter: function(params) {
                    var name = params.name;
                    var value = params.data;
                    var str = name + '\n数据量：' + value;
                    return str;
                },
                rich: {
                    bg: {
                        backgroundColor: 'rgba(0,0,7,0.7)',
                        
                        width: 78,
                        //height:42,
                        color: '#FFF',
                        padding: [20, 0, 20, 10]
                    },
                    br: {
                        width: '100%',
                        height: '100%'
                    }

                }
            }
        },
        data: []
    }]
};myChart.setOption(option);

function getData() {
    $.ajax({
      url: "./getchina_his.php",
      dataType: "json",
      success: function (data) {
          console.log(data)
        //用来存放我们待会需要的数据
		var arry = [];
		var date = [];
        if (data) {
          for (var i = 0; i < data.length; i++) {
			date.push(data[i].date)
            arry.push(data[i].confirm)
          }
		  console.log(date);
		  console.log(arry);
          //使用指定的配置项和数据显示图表
          myChart.setOption({
			  xAxis: {
        boundaryGap: true, //默认，坐标轴留白策略
        axisLine: {
            show: false
        },
        splitLine: {
            show: false
        },
        axisTick: {
            show: false,
            alignWithLabel: true
        },
        data: date
        
    },
            series: [{
        type: 'line',
        symbol: 'circle',
        symbolSize: 7,
        lineStyle: {
            color: 'rgb(33,148,246)',
            shadowBlur: 12,
            shadowColor: 'rgb(33,148,246,0.9)',
            shadowOffsetX: 1,
            shadowOffsetY: 1
        },
        itemStyle: {
            color: 'rgb(33,148,246)',
            borderWidth: 1,
            borderColor: '#FFF'
        },
        label: {
            show: false,
            distance: 1,
            emphasis: {
                show: true,
                offset: [25, -2],
                //borderWidth:1,
                // borderColor:'rgb(33,148,246)',
                //formatter:'{bg|{b}\n数据量:{c}}',
                backgroundColor: {
                    image: uploadedDataURL
                },
                color: '#111',
                padding: [8, 20, 8, 6],
                //width:60,
                height: 36,
                formatter: function(params) {
                    var name = params.name;
                    var value = params.data;
                    var str = name + '\n累计确诊：' + value;
                    return str;
                },
                rich: {
                    bg: {
                        backgroundColor: {
                            image: uploadedDataURL
                        },
                        width: 78,
                        //height:42,
                        color: '#FFF',
                        padding: [20, 0, 20, 10]
                    },
                    br: {
                        width: '100%',
                        height: '100%'
                    }

                }
            }
        },
        data: arry
    }]
          });
        }
      }

    })
  }getData()
</script>
</body>
</html>