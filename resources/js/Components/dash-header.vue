<template lang="html">
             <div class="dashboard_container_header">
                  <div class="dashboard_fl_1">
                    <Link href="/dashboard/causes/create" class="btn btn-modern dark">
                           {{headerTitle}} <span><i class="ti-plus"></i> </span> <!--_Create a Campaign-->
                    </Link>
                  </div>
                  <div class="dashboard_fl_2">
                    <ul class="mb0">
                      <li class="list-inline-item"></li>
                      <li class="list-inline-item">
                        <form class="form-inline my-2 my-lg-0">
                          <input
                            v-model="search"
                            class="form-control"
                            type="search"
                            placeholder="Search for a campaign"
                            aria-label="Search"
                            @input="searchCampaigns"
                          />
                          <button class="btn my-2 my-sm-0" type="submit">
                            <i class="ti-search"></i>
                          </button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
</template>
<script>
export default {
    name:"DashHeader",
    props: {
        headerTitle: {
            type: String,
            required: true
        },
        filters: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            search: this.filters.search
        }
    },
    methods: {
        searchCampaigns() {
            this.$emit("search", this.search);
        }
    },
}
</script>
<style lang="css" scoped></style>
