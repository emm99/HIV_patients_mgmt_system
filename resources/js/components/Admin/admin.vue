<template>
  <div>
      <vdrawer></vdrawer>
       <router-view></router-view>


  </div>
</template>


<script>
import  vdrawer from './Drawer'
 import vcontent from './Content'
import  dashboard from './dashboard'
export default {

     created(){
        if(!(User.loggedIn() && User.role()=="1")){

       this.$router.push({name:'login'})
        }

        },
    components:{ vdrawer},

}
</script>

<style>

</style>
