<template>
<v-content>
<v-col>
<v-row
justify="space-around"
>
    <v-col
    >
  <v-card
  style="margin-top: -178px; margin-left: 40px; margin-right: 60px;"
  >
      <v-card-title
       style="margin-left: 50px; margin-top: 10px; margin-bottom: 0px;"
      >Create New Staff</v-card-title>
      <v-divider></v-divider>
      <v-container>

     <v-form @submit="create"
    ref="form"
    v-model="valid"
    lazy-validation
 style="margin-top: 0px; margin-left: 50px; margin-right: 50px;"
  >
   <v-row>
   <v-col
         cols="12"
         md="6"
         >
    <v-text-field
      v-model="form.name"
      :counter="30"
      :rules="nameRules"
      label="Name"
      required
    ></v-text-field>

    <v-autocomplete
      v-model="form.health_facility_id"
      :items="health_facility"
      :rules="[v => !!v || 'Health Facility is required']"
      label="Health_facility"
      item-text="name"
      item-value="id"
    ></v-autocomplete>

   <v-text-field
      v-model="form.email"
      :rules="nameRules"
      label="E-mail"
      required
    ></v-text-field>

    </v-col>
     <v-col
         cols="12"
         md="6"
         >
     <v-text-field
      v-model="form.user_name"
      :counter="30"
      :rules="nameRules"
      label="Username"
      required
    ></v-text-field>

      <v-autocomplete
      v-model="form.role_id"
      :items="positions"
      :rules="[v => !!v || 'Position is required']"
      label="position"
      item-text="name"
      item-value="id"
    ></v-autocomplete>

<v-text-field
          v-model="form.password"
          hint="At least 5 characters"
      :rules="passwordRules"
      label="Password"
      required
      ></v-text-field>
    </v-col>
    </v-row>

    <v-col

         >

    <v-btn
      :disabled="!valid"
      color="success"
      class="mr-4"
      @click="create"
    >
      Create
    </v-btn>

    <v-btn
      color="error"
      class="mr-4"
      @click="reset"
    >
      Reset Form
    </v-btn>
    </v-col>

   </v-form>

   </v-container>
   </v-card >
    </v-col>


        <v-card
           max-width="300"
           style="margin-top: -160px; margin-right: 30px;"

        >
            <v-card-title>Important Information</v-card-title>
            <v-divider></v-divider>
            <v-card-subtitle>Things to consider when registering staffs</v-card-subtitle>
            <v-card-text>1.eknkbdkbgbjkgbkjbkjvbzkjvkjb</v-card-text>
            <v-card-text>2.eknkbdkbgbjkgbkjbkjvbzkjvkjb</v-card-text>
            <v-card-text>3.eknkbdkbgbjkgbkjbkjvbzkjvkjb</v-card-text>
            <v-card-text>4.eknkbdkbgbjkgbkjbkjvbzkjvkjb</v-card-text>
            <v-card-text>5.eknkbdkbgbjkgbkjbkjvbzkjvkjb</v-card-text>
                            <v-divider></v-divider>
          <v-spacer></v-spacer>
           <v-card-text>Important Information</v-card-text>
        </v-card>
     </v-row>
</v-col>
  </v-content>
</template>
<script>
export default {
 data() {
return{
      valid: true,

      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 30) || 'Name must be less than 30 characters',
      ],
        name: '',

      userNameRules: [
        v => !!v || 'Username is required',
        v => (v && v.length <= 30) || 'Username must be less than 30 characters',
      ],

      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',

      ],

      passwordRules: [
        v => !!v || 'Password is required',
        v => (v && v.length >= 5) || 'Password must be more than 5 characters',
      ],

      form:{
          name:null,
          health_facility_id:null,
          email:null,
          user_name:null,
          role_id:null,
          password:null,
      },
      health_facility:{},
     positions:{}
    }

    },
    created(){
      this.loadStaff(User.healthFacility());
    },

    methods: {
      reset () {
        this.$refs.form.reset()
      },
      create(){
        axios.post('api/auth/signup',this.form)
        .then(()=>{
            this.reset();
            alert('Created Successful');
        })
        .catch(error => console.log(error.response.data))
      },
      loadStaff(id){
         axios.all([
                    axios.get(`/api/health_facility/${id}`)
                   .then(res => this.health_facility =res.data.data),
                   axios.get('/api/role')
                   .then(res=>this.positions = res.data.data)
                 ])
      }

    }
}
</script>
<style>

</style>
