<template>
  <Head>
    <title>Adita</title>
    <meta
      type="description"
      content="Crowd funding, Campaigns and awareness"
      head-key="description"
    />
  </Head>
  <Header />
  <slot />
  <Footer />
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";

export default {
  components: {
    Header,
    Footer,
  },
};
</script>