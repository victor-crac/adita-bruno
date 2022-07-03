<template lang="html">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li  class="breadcrumb-item"  v-for="(lnk,index) in links" :key="index">
                    <!-- this works for first links before the last one -->
                        <Link  v-if="index < (links.length - 1)" :href="lnk.url">{{lnk.name}}</Link>
                    <!-- this last tile indicates the active link -->
                         <span aria-current="page" v-if="index == (links.length - 1)"> {{lnk.name}} </span>
                    </li>
                </ol>
              </nav>
            </div>
          </div>
</template>
<script>
export default {
    name:"BreadCrumb",
    props:{
        links:Array
    }
}
</script>
<!-- Scoped implies that the syling of the component can't be accesed by other components -->
<style lang="css" scoped>

</style>
