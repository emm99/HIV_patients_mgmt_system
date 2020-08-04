<template>
     <v-row
          align="center"
          justify="center"
        >
 <v-col
            cols="12"
            sm="8"
            md="4"
          >
  <v-card
      class="mx-auto elevation-12"
      max-width="700"
      style="margin-top: -64px;"
      :loading="isUpdating"
    >
     <template v-slot:progress>
      <v-progress-linear
        absolute
        color="blue"
        height="4"
        indeterminate
      ></v-progress-linear>
     </template>
      <v-toolbar flat>
          <v-spacer></v-spacer>
        <v-toolbar-title class="blue--text text-center"> HIV PATIENTS MANAGEMENT SYSTEM</v-toolbar-title>

        <v-spacer></v-spacer>

<!--

        <v-btn icon>
          <v-icon>mdi-file-account</v-icon>
        </v-btn> -->
      </v-toolbar>

      <v-divider></v-divider>
      <v-container>
      <v-form @submit.prevent="login"
  >


    <v-text-field
      v-model="form.email"
      label="E-mail"
      type="email"
      prepend-icon="mdi-account"
      required
    ></v-text-field>

 <v-text-field
      v-model="form.password"
      label="Password"
      type="password"
      prepend-icon="mdi-lock"
      required
    ></v-text-field>
<v-card-actions>
    <v-btn
      color="success"
      class="mr-2"
      type="submit"
         @click="isUpdating = true"

         depressed
    >
      LogIn
    </v-btn>
</v-card-actions>
  </v-form>
  </v-container>
    </v-card>
 </v-col>
     </v-row>
</template>
<script>
export default {
    data(){
        return{
             isUpdating: false,
            form :{
             email:null,
             password:null
            }
        }
    },
 created(){
     if(User.loggedIn()){
    switch(User.role()){
              case 1:
                this.$router.push({name:'admin'})
                break;
               case 2:
              this.$router.push({name:'doctor'})
               break;
               case 3:
              this.$router.push({name:'pharmacy'})
               break;
               case 4:
                this.$router.push({name:'nurse'})
                break;
                case 5:
               this.$router.push({name:'labtest'})
                break;
          }

        }
 },
    methods:{
         login(){
       User.login(this.form)
         }
    },
      watch: {
      isUpdating (val) {
        if (val) {
          setTimeout(() => (this.isUpdating = false), 1800)
        }
      },
    },
}
</script>
<style>

</style>



