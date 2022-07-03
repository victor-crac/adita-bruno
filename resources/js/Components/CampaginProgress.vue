<template lang="html">
          <div class="dashboard_single_course">
                    <div class="dashboard_single_course_thumb">
                      <img
                        :src="banner"
                        class="img-fluid"
                        alt=""
                      />
                      <div class="dashboard_action">
                        <a href="#" class="btn btn-ect">Edit</a>
                        <a href="#" class="btn btn-ect">View</a>
                      </div>
                    </div>
                    <div class="dashboard_single_course_caption">
                      <div class="dashboard_single_course_head">
                        <div class="dashboard_single_course_head_flex">
                          <span class="dashboard_instructor">{{organiser}}</span>
                          <h4 class="dashboard_course_title">
                           {{campaignTitle}}
                          </h4>
                          <div class="dashboard_rats">
                            <div class="dashboard_rating">
                                <!-- when rated we use class='ti-star filled' else we use class='ti-star' without being filled -->
                              <i v-for="(rate,index) in rating" :key="index"  class="ti-star filled"></i>
                              <!-- <i class="ti-star"></i> -->
                            </div>
                            <!-- <span>(40 Reviews)</span> -->
                          </div>
                        </div>
                        <div class="dc_head_right">
                          <h4 class="dc_price_rate theme-cl">UGX {{amount}}</h4>
                        </div>
                      </div>
                      <div class="dashboard_single_course_des">
                        <p>
                        {{description}}
                        </p>
                      </div>
                      <div class="dashboard_single_course_progress">
                        <div class="dashboard_single_course_progress_1">
                          <label>82% Completed</label>
                          <div class="progress">
                            <div
                              class="
                                progress-bar progress-bar-striped
                                bg-success
                              "
                              role="progressbar"
                              :style="`width: ${40}%`"
                              aria-valuenow="82"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                        </div>
                        <!-- <div class="dashboard_single_course_progress_2">
                          <ul class="m-0">
                            <li class="list-inline-item">
                              <i class="ti-user mr-1"></i>4512 Enrolled
                            </li>
                            <li class="list-inline-item">
                              <i class="ti-comment-alt mr-1"></i>112 Comments
                            </li>
                          </ul>
                        </div> -->
                      </div>
                    </div>
                  </div>

</template>
<script>
export default {
    name:"CampaignProgress",
    props:{
        campaignTitle:String,
        organiser:String,
        description:String,
        banner:String,
        amount:String,
        rating:Number
    }

}
</script>
<style lang="css" scoped>

</style>
