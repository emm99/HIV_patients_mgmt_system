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
    >
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

    <v-btn
      color="success"
      class="mr-2"
      type="submit"
    >
      LogIn
    </v-btn>
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
            form :{
             email:null,
             password:null
            }
        }
    },
    created(){
        if(User.loggedIn()){

       this.$router.push({name:'main'})
        }

},
    methods:{
         login(){
       User.login(this.form)
         }
    }
}
</script>
<style>

</style>



