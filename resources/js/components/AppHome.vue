<template>
<div>
  <toolbar></toolbar>
  <login></login>
  <vfooter></vfooter>
</div>
</template>

<script>
 import toolbar from './Toolbar'
 import vfooter from './Footer'
 import login from './login/Login'

export default {
  components:{toolbar,vfooter,login}
}
</script>


<style>

</style>
