<template>
<div>
  <v-card
   flat
   >
    <v-toolbar
      color=primary
      dark
      extended
      flat
    >

    </v-toolbar>

  </v-card>
  <login></login>
  </div>
</template>

<script>
 import login from './login/Login'
export default {
  components:{login}

}
</script>

<style>

</style>
