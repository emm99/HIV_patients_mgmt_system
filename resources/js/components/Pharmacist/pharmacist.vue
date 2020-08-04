<template>
  <div>
      <vdrawer></vdrawer>
       <router-view></router-view>


  </div>
</template>


<script>
import  vdrawer from './Drawer'
 import vcontent from './Content'
export default {

     created(){
        if(!(User.loggedIn() && User.role()=="3")){

       this.$router.push({name:'login'})
        }

        },
    components:{ vdrawer,vcontent},

}
</script>

<style>

</style>
