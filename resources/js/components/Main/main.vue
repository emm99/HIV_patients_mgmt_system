<template>
  <div>
      <vdrawer></vdrawer>
      <v-content></v-content>
</div>
</template>

<script>
import vdrawer from './Drawer'
import vcontent from './MainContent'

export default {
     created(){
        if(!User.loggedIn()){

       this.$router.push({name:'login'})
        }},
    components:{ vdrawer, vcontent},
    
}
</script>

<style>

</style>
 