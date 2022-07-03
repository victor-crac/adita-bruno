<template lang="html">
                 <div class="form-group col-md-4">
                          <label>{{label}}*</label>
                          <input
                            :type="inputType"
                            :name="name"
                            class="form-control"
                            :placeholder="placeholder"
                            v-model="value"
                          />
                          <div
                            v-if="errorTxt"
                            v-text="errorTxt"
                            class="text text-danger"
                          ></div>
                    </div>
</template>

<script>
export default{
    name:"FormComponent",
    props:{
        label:String,
        inputType:String,
        errorTxt:String,
        placeholder:String,
        form:Object,
        name:String,
        value:String
    }
}
</script>

<style lang="less" scoped>

</style>
