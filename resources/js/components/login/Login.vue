<template>
  <v-card
      class="mx-auto"
      max-width="700"
      style="margin-top: -64px;"
    >
      <v-toolbar flat>
          <v-spacer></v-spacer>
        <v-toolbar-title class="red--text text-center"> HIV PATIENTS MANAGEMENT SYSTEM</v-toolbar-title>

        <v-spacer></v-spacer>



        <v-btn icon>
          <v-icon>mdi-account-lock</v-icon>
        </v-btn>
      </v-toolbar>

      <v-divider></v-divider>
      <v-container>
      <v-form @submit.prevent="login"
  >


    <v-text-field
      v-model="form.email"
      label="E-mail"
      type="email"
      required
    ></v-text-field>

 <v-text-field
      v-model="form.password"
      label="Password"
      type="password"
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
    methods:{
        login(){
      User.login(this.form)
        }
    }
}
</script>
<style>

</style>
