<template>
  <Head>
    <title>Dashboard</title>
    <meta
      type="description"
      content="Crowd funding, Campaigns and awareness"
      head-key="description"
    />
  </Head>
  <!-- ============================ Dashboard: Dashboard Start ================================== -->
  <section class="gray pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <Nav />
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12">
      <!-- breadcrum area -->
            <bread-crumb :links="crumbs" />
          <!-- Row -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <!-- Course Style 1 For Student -->
              <div class="dashboard_container">
           <!--======== dashboard header======= -->
                    <dash-header
                      :header-title="headerTitle"
                      :filters="filters"
                      @search="searchCampaigns"/>

           <!--========== End of dashbboard header =========-->

                <div class="dashboard_container_body">
                  <!-- Rendered when there no campaigns saved -->
                    <div v-if="(campaigns.data.length) < 1"> <p>No Campaigns Yet.</p> </div>
                  <!--========= end of no campign message ===========-->

             <!-- {{JSON.stringify(campaigns)}} raw json response from the server-->
             <!--======Campaigns =========-->
             <campagin-progress
                v-for="(c,index) in campaigns.data"
                :key="index" :organiser="c.user.name"
                 :description="c.description" :rating="5" :banner="c.banner"
                 :amount="c.target_amount" :campaignTitle="c.name"/>
        <!--=====end of campaign details -->

                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>
      </div>
    </div>
  </section>
  <!-- ============================ Dashboard: Dashboard End ================================== -->
</template>
<script setup>

// -------------component for the dashboard header ------------------

import Nav from "./../Partials/Nav.vue";
import BreadCrumb from "../../../Components/BreadCrumb.vue";
import CampaginProgress from "../../../Components/CampaginProgress.vue";
import DashHeader from "../../../Components/dash-header.vue";
//-------------------end of component imports----------------------
import { ref, watch } from "vue";
import { Inertia } from "@inertiajs/inertia";


let props = defineProps({ campaigns: Object, filters: Object });

console.log(props)

// search props
let search = ref(props.filters.search);

// implement search functionality
function searchCampaigns(search) {
  Inertia.get(`/dashboard/causes`,
    { search: search },
    { preserveScrollPosition: true }
  );
}
// end of search functionality

// breadcrumbs
const crumbs = [{name:"Home",link:"/"},{name:"Dashboard",link:"/dashboard"},{name:"All Campaigns",link:"/dashboard/campaigns"}];
// =======headerTitle======
const headerTitle = "Create a campaign";
// ======= end of header title======

watch(search, (value) => {
  Inertia.get("dashboard/causes", { search: value }, { preserveState: true , replace: false});
});
</script>
