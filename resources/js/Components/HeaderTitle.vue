<template lang="html">
    <head>
        <title>{{title}}</title>
        <meta
        :type="type"
        :content="content"
        head-key="description"
        />
  </head>
</template>
<script>
export default {
    name: "HeaderTitle",
    props:{
        title: {
            type: String,
            required: true
        },
    type: String,
    content:{
        type: String,
        required: true,
        default: "Crowd funding, Campaigns and awareness"
    },
    description: {
        type: String,
        required: true
    }
     },
 }
</script>
<style lang="css" scoped></style>
