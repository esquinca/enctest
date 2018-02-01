$(function() {
  graph_history();
});
function graph_history() {
  var date= $('#date_search_pral').val();
  var _token = $('input[name="_token"]').val();
  var data_count = [120, 132, 101, 134, 90, 230, 210,12,12,123,5,6,78,9,0,42,3,65,23,57,1,12,1,23,45,6,3,6,1,6,15];
  var data_name = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'];
  graph_area_default('historical_daily', data_name, data_count,'Historico', 'Diario');
}
function graph_area_default(title, campoa, campob, titlepral, subtitulopral){
  var myChart = echarts.init(document.getElementById(title));
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
      tooltip : {
          trigger: 'axis',
          axisPointer: {
              type: 'cross',
              label: {
                  backgroundColor: '#6a7985'
              }
          }
      },
      legend: {
          data: campoa
      },
      toolbox: {
          show : false,
          feature: {
              saveAsImage: {}
          }
      },
      grid: {
          /*ELimino espacio de titile*/
          x: 40,
          y: 20,
          x2: 40,
          y2: 20,
          /*ELimino espacio de titile*/
          left: '3%',
          right: '4%',
          bottom: '3%',
          containLabel: true
      },
      xAxis : [
          {
              type : 'category',
              boundaryGap : false,
              data : campoa
          }
      ],
      yAxis : [
          {
              type : 'value'
          }
      ],
      series : [
          {
              name:'Cantidad',
              type:'line',
              stack: '总量',
              label: {
                  normal: {
                      show: true,
                      position: 'top'
                  }
              },
              areaStyle: {normal: {}},
              data:campob
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
