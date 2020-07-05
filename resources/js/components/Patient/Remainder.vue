<template>
<v-content>

  <v-card
  style="margin-top: 10px; margin-left: 50px; margin-right: 50px;">
      <v-card-title
       style="margin-left: 50px; margin-top: 10px; margin-bottom: 0px;"
      > New Remainder</v-card-title>
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
    <v-col cols="16" md="6">
        <v-textarea
          solo
          name="input-7-4"
          label="Write a message notification"

        ></v-textarea>
    </v-col>
    <v-checkbox
      v-model="checkbox"
      :rules="[v => !!v || 'You must agree to continue!']"
      label="Confirm Sending Notification?"
      required
    ></v-checkbox>

    <v-btn
      :disabled="!valid"
      color="success"
      class="mr-6"
      @click="validate"
    >
      Send Notification
    </v-btn>

    <v-btn
      color="error"
      class="mr-6"
      @click="reset"
    >
      Reset Form
    </v-btn>

    <!-- <v-btn
      color="warning"
      @click="resetValidation"
    >
      Reset Validation
    </v-btn> -->
   </v-form>
   </v-container>
  </v-card>

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
