<template>
<v-content>
<v-row
justify="space-around"
align="start"
>
    <v-col cols="8">
  <v-card
  style="margin-top: -170px; margin-left: 40px; margin-right: 60px;">
      <v-card-title
       style="margin-left: 50px; margin-top: 10px; margin-bottom: 0px;"
      >Search For A Patient</v-card-title>
      <v-container>
     <v-form @submit="search"
    ref="form"
    v-model="valid"
    lazy-validation
 style="margin-top: 0px; margin-left: 50px; margin-right: 50px;"
  >
    <v-text-field
      v-model="id"
      :counter="10"
      :rules="nameRules"
      label="Patient Id"
      required
    ></v-text-field>


    <v-checkbox
      v-model="checkbox"
      :rules="[v => !!v || 'You must agree to continue!']"
      label="Do you agree?"
      required
    ></v-checkbox>

    <v-btn
      :disabled="!valid"
      color="success"
      class="mr-4"
      @click="search(id)"
    >
      Submit
    </v-btn>

    <v-btn
      color="error"
      class="mr-4"
      @click="reset"
    >
      Reset Form
    </v-btn>

   </v-form>
   </v-container>
  </v-card>

    </v-col>
    <v-col cols=""
    style="margin-right: 20px;margin-top: -170px;"
    >
        <v-card>
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
    </v-col>
</v-row>


   <v-dialog v-model="dialog" max-width="500px">
          <v-card>
            <v-card-title>
              <span class="headline">ENTER PATIENT OTP</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6" md="8">
                    <v-card-subtitle>Patient No: {{ this.id }}</v-card-subtitle>
                  </v-col>
                  <v-col cols="12" sm="6" md="8">
                    <v-text-field  label="Enter OTP"></v-text-field>
                  </v-col>

                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" @click="close" text>Cancel</v-btn>
              <v-btn color="blue darken-1" text>SUBMIT</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>


  </v-content>
</template>
<script>
export default {
 data: () => ({
     dialog:false,
      valid: true,
      id: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      select: null,
      checkbox: false,

    }),
    created(){
    this.$on('available',() =>{
           this.dialog=true;
       })
    }
,
    methods: {
      search () {
        axios.get(`api/patient/${this.id}`)
        .then(()=>{
            res=>this.patient = res.data.data;
            this.$emit('available');
            })
         .catch(error => alert(error.response.data.message))
      },
      reset () {
        this.$refs.form.reset()
      },
      close () {
        this.dialog = false
        },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
}
</script>
<style>

</style>
