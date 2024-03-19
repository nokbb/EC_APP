<template>
  <v-app>
    <v-app-bar color="primary">
      <template v-slot:append>
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
      </template>

      <v-app-bar-title>
        EC_APP
      </v-app-bar-title>

    </v-app-bar>
  </v-app>
</template>

<script>

export default {
  name: 'header',
}
</script>