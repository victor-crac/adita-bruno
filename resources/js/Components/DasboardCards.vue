<template lang="html">
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" v-for="(i,index) in items" :key="index">
              <div class="dashboard_stats_wrap">
                <div class="dashboard_stats_wrap_content">
                  <h4 :class="i.color">{{i.total}}</h4>
                  <span>{{i.label}}</span>
                </div>
                <div class="dashboard_stats_wrap-icon">
                  <i :class="i.icon"></i>
                </div>
              </div>
            </div>
</template>
<script>
export default {
    name:"DashboardCards",
    props:["items"]
}
</script>
<style lang="css" scoped>

</style>
