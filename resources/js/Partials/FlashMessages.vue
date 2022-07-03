<template>
  <div>
    <div v-if="$page.props.flash.success && show" class="alert alert-success">      
        <div class="py-4 text-white text-sm font-medium">{{ $page.props.flash.success }}</div>
    </div>
    <div v-if="($page.props.flash.error || Object.keys($page.props.errors).length > 0) && show" class="flex items-center justify-between mb-8 max-w-3xl bg-red-500 rounded">
      <div class="alert alert-danger">
        <div v-if="$page.props.flash.error" class="py-4 text-sm font-medium">{{ $page.props.flash.error }}</div>
        <div v-else class="py-4  text-sm font-medium">
          <span v-if="Object.keys($page.props.errors).length === 1">There is one form error. {{ $page.props.errors}}</span>
          <span v-else>There are {{ Object.keys($page.props.errors).length }} form errors.</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: true,
    }
  },
  watch: {
    '$page.props.flash': {
      handler() {
        this.show = true
      },
      deep: true,
    },
  },
}
</script>
