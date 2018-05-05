<template>
  <div>
    <div class="col-md-4" v-for="(statusParkir, index) in this.status">
      <div class="panel panel-yellow box-parkir" v-if="statusParkir.status">
        <div class="panel-heading dark-overlay text-center header-box-parkir">PARKIR {{index}}</div>
        <div class="panel-body">
          <div class="body-box-parkir">
            <h3>Testing</h3>
          </div>
        </div>
      </div>
      <div class="panel panel-teal box-parkir" v-else>
        <div class="panel-heading dark-overlay text-center header-box-parkir">PARKIR {{index}}</div>
        <div class="panel-body pagination-centered">
          <div class="col-md-12">
            <p>asdlksjflksjfklsdjflksjdfkla;mdlakmdklasndklasbdakjfbaksjbfjkasbfjk</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function(){
    return {
      status : '',
    }
  },
  mounted() {
    this.getData()
    this.timer = setInterval(this.getData, 3000)
  },
  methods: {
    getData(){
      axios({
        method: 'get',
        url: '/api/status',
      }).then((response) => {
        this.status = response.data
      })
    }
  }
}
</script>
