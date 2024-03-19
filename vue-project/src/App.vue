<template>
  <v-app>
    <v-main>
      <HelloWorld/>
    </v-main>
  </v-app>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import header from './components/owner/header.vue'

export default {
  name: 'App',

  components: {
    HelloWorld,
    header,
  },

  data: () => ({
    //
  }),
}
</script>
