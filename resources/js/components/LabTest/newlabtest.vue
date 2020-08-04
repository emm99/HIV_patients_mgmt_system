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
      >Create New Prescription</v-card-title>
      <v-container>
     <v-form
    ref="form"
    v-model="valid"
    lazy-validation
 style="margin-top: 0px; margin-left: 50px; margin-right: 50px;"
  >
    <v-text-field
      v-model="name"
      :counter="10"
      :rules="nameRules"
      label="Name"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>

    <v-select
      v-model="select"
      :items="items"
      :rules="[v => !!v || 'Item is required']"
      label="Item"
      required
    ></v-select>

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
      @click="validate"
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
  </v-content>
</template>
<script>
export default {
 data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
}
</script>
<style>

</style>
