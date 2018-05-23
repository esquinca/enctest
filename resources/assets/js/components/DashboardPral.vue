<template>
  <div class="white-box">
      <small>Select the place and verify the information with the "Search" button. <code> Successful user.!</code></small>
      <!-- Form -->
      <form class="m-b-5 m-t-5">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <div class="input-group">
                      <select v-for="status in statuses" class="form-control js--animations">
                              <option value="">{{ status.name }}</option>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-info js--triggerAnimation" type="button">Search !</button>
                      </span>
                  </div>
              </div>
          </div>
      </form>
      <!-- / Form -->
  </div>
</template>

<script>
  // export  default {
  //   name: "DashboardPral",
  //   mounted: function (){},
  //   watch: {},
  //   destroyed: function () {
  //   }
  // }
  export  default {
    name: "DashboardPral",
    data(){
      return {
        statuses: []
      }
    },
    mounted() {
      axios.post('/search_venue')
          .then(res => {
            this.statuses = res.data;
            console.log(res.data)
          })
          .catch(err => {
            console.log(err.data)
          })

    }
  }
</script>

<style scoped>
</style>
