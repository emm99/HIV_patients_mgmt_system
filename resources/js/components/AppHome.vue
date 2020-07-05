<template>
<div>
  <router-view></router-view>
  <vfooter></vfooter>
</div>
</template>

<script>
 import toolbar from './Toolbar'
 import vfooter from './Footer'

export default {
  components:{vfooter,toolbar}
}
</script>


<style>

</style>
