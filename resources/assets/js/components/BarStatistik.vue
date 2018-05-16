<template>
  <canvas id="barChart" width="400" height="200"></canvas>
</template>

<script>
export default {
  data: function(){
    return {
      data : '',
      dumpDate : '',
    }
  },
  mounted(){
    this.getData()
    this.timer = setInterval(this.getData, 5000)
  },
  methods: {
    getData(){
      axios({
        method: 'get',
        url: '/api/dataparkir/statistik',
      }).then((response) => {
        this.data = response.data.Data
        if (this.dumpDate != response.data.LastDate.date) {
          this.dumpDate = response.data.LastDate.date
          this.setData()
        }
      })
    },
    setData(){
      var ctx = document.getElementById("barChart");
      var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: this.foreachArray(this.data[1], 'index'),
          datasets: [
            {
              label: 'Parkiran #1',
              data: this.foreachArray(this.data[1], 'value'),
              backgroundColor: this.loopingEach(this.data[1], 'rgba(255, 99, 132, 0.2)'),
              borderColor: this.loopingEach(this.data[1], 'rgba(255,99,132,1)'),
              borderWidth: 1
            },
            {
              label: 'Parkiran #2',
              data: this.foreachArray(this.data[2], 'value'),
              backgroundColor: this.loopingEach(this.data[2], 'rgba(54, 162, 235, 0.2)'),
              borderColor: this.loopingEach(this.data[2], 'rgba(54, 162, 235,1)'),
              borderWidth: 1
            },
            {
              label: 'Parkiran #3',
              data: this.foreachArray(this.data[3], 'value'),
              backgroundColor: this.loopingEach(this.data[3], 'rgba(255, 206, 86, 0.2)'),
              borderColor: this.loopingEach(this.data[3], 'rgba(255, 206, 86, 1)'),
              borderWidth: 1
            },
          ]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    },
    foreachArray(data, type){
      var returnData = []
      $.each(data, function(index, value){
        var tipe = type == 'value' ? value : index
        returnData.push(tipe)
      })
      return returnData
    },
    loopingEach(data, isi){
      var returnData = []
      var count = this.foreachArray(data).length;
      for (var i = 1; i <= count; i++) {
        returnData.push(isi)
      }
      return returnData
    }
  }
}
</script>
