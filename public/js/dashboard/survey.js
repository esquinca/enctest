$(function() {
  graph_rating();
});
jQuery('#date-range').datepicker({
        toggleActive: true
    });
function graph_rating() {
  var date= $('#date_search_pral').val();
  var _token = $('input[name="_token"]').val();
  var data_title = ['Excelente', 'Bueno', 'Malo'];
  var data_count_1 = [2, 12, 101, 1, 90, 230, 210,12,12,123,5,6,78,9,0,42,3,65,23,57,1,12,1,23,45,6,3,6,1,6,15];
  var data_count_2 = [1, 14, 11, 134, 90, 230, 10,0,12,250,5,6,78,9,0,400,3,65,42,57,1,12,10,3,45,0,3,6,8,6,0];
  var data_count_3 = [0, 1, 2, 2, 0, 10, 0,12,12,1,5,6,78,9,0,42,3,65,23,57,1,12,1,23,45,6,3,6,1,6,15];
  var data_name = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
  graph_line_rating('historical_ratings', data_title, data_name ,data_count_1,  data_count_2,  data_count_3, 'Historico', 'Ratings');
}
function graph_line_rating(area, campoa, campob, data_count_1,  data_count_2,  data_count_3, titlepral, subtitulopral){
  var myChart = echarts.init(document.getElementById(area));
  var option = {
      title: {
          show: false,
          text: titlepral,
          subtext: subtitulopral,
          textStyle: {
           color: '#449D44',
           fontStyle: 'normal',
           fontWeight: 'normal',
           fontFamily: 'sans-serif',
           fontSize: 18,
           align: 'left',
           verticalAlign: 'top',
           width: '100%',
           textBorderColor: 'transparent',
           textBorderWidth: 0,
           textShadowColor: 'transparent',
           textShadowBlur: 0,
           textShadowOffsetX: 0,
           textShadowOffsetY: 0,
         },
      },
      tooltip: {
        trigger: 'axis'
      },
      legend: {
          data: campoa
      },
      /*ELimino espacio de titile
      grid: {
        x: 40,
        y: 20,
        x2: 40,
        y2: 20,
      },
      */
      toolbox: {
          show : false,
          feature : {
              dataView : {show: true, readOnly: false},
              magicType : {show: true, type: ['line', 'bar']},
              restore : {show: true},
              saveAsImage : {show: true}
          }
      },
      calculable : true,
      xAxis : [
          {
              type : 'category',
              data: campob
          }
      ],
      yAxis : [
          {
              type : 'value'
          }
      ],
      series : [
        {
            name:campoa[0],
            type:'line',
            data:data_count_1,
            markPoint : {
                data : [
                    {type : 'max', name: '最大值'},
                    {type : 'min', name: '最小值'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: '平均值'}
                ]
            }
        },
        {
            name:campoa[1],
            type:'line',
            data:data_count_2,
            markPoint : {
                data : [
                    {type : 'max', name: '最大值'},
                    {type : 'min', name: '最小值'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name : '平均值'}
                ]
            }
        },
        {
            name:campoa[2],
            type:'line',
            data:data_count_3,
            markPoint : {
                data : [
                    {type : 'max', name: '最大值'},
                    {type : 'min', name: '最小值'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name : '平均值'}
                ]
            }
        }
      ]
  };
  myChart.setOption(option);

  $(window).on('resize', function(){
      if(myChart != null && myChart != undefined){
          myChart.resize();
      }
  });
}
