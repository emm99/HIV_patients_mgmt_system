
<template v-slot:activator="{ on, attrs }">
<div>
    <v-navigation-drawer
      v-model="drawer"
      app>
       <v-toolbar
       color="indigo"
      dark>
            <v-btn icon class="hidden-xs-only">
            <v-icon>mdi-hospital-building</v-icon>
            </v-btn>

            <v-toolbar-title>HPMS</v-toolbar-title>

            <v-spacer></v-spacer>

          </v-toolbar>

      <v-list >
          <v-list-group
           color="warning"
          dark
          prepend-icon="mdi-stethoscope"
          no-action
          >
           <template v-slot:activator>
             <v-list-item-title>Patients</v-list-item-title>
            </template>


             <v-list-item
            v-for="(patient, index) in patients"
            :key="index"
            :to="patient.to"

              >
            <v-list-item-title>{{patient.title}}</v-list-item-title>
            <v-list-item-icon>
              <v-icon>{{patient.icon}}</v-icon>
            </v-list-item-icon>
          </v-list-item>


          </v-list-group>


         <v-list-item

            v-for="(report, index) in reports"
            :key="index"
            :to="report.to"
              >
              <v-list-item-icon>
              <v-icon>{{report.icon}}</v-icon>
            </v-list-item-icon>
            <v-list-item-title >{{report.title}}</v-list-item-title>
         </v-list-item>



         <v-list-group
          color="warning"
          dark
          prepend-icon="mdi-account-group"
          no-action
          >
           <template v-slot:activator>
             <v-list-item-title>Staffs</v-list-item-title>
            </template>

             <v-list-item
            v-for="(staff, index) in staffs"
            :key="index"
            :to="staff.to"
              >
            <v-list-item-title>{{staff.title}}</v-list-item-title>
             <v-list-item-icon>
              <v-icon>{{staff.icon}}</v-icon>
             </v-list-item-icon>
           </v-list-item>
          </v-list-group>

           <v-list-group
            color="warning"
          dark
          prepend-icon="mdi-bulletin-board"
          no-action
          >
           <template v-slot:activator>
             <v-list-item-title>Notice Board</v-list-item-title>
            </template>

             <v-list-item
            v-for="(chart, index) in charts"
            :key="index"

              >
            <v-list-item-title>{{chart.title}}</v-list-item-title>
            <v-list-item-icon>
              <v-icon>{{chart.icon}}</v-icon>
            </v-list-item-icon>
          </v-list-item>
          </v-list-group>
      </v-list>

    </v-navigation-drawer>



    <v-app-bar
      app
      color="indigo"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title>Dashboard</v-toolbar-title>
      <v-spacer></v-spacer>

  <v-menu offset-y>
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          color="warning"
          dark
          v-bind="attrs"
          v-on="on"
        >
           <v-icon>mdi-account</v-icon>
              {{ message }}
        </v-btn>
      </template>
      <v-list>
        <v-list-item
          v-for="(item, index) in items"
          :key="index"
          :to="item.to"

        >
        <!-- <router-link> -->
          <v-list-item-title>{{ item.title }}</v-list-item-title>
        <!-- </router-link> -->
        </v-list-item>
      </v-list>
    </v-menu>
    </v-app-bar>
</div>
</template>

<script>
export default {
     props: {
      source: String,
    },
    data: () => ({
      drawer: null,
      message:User.name(),
      items: [
        { title: 'Profile', to:'/users/{id}' },
        { title: 'Logout',to:'/logout' },
      ],
      patients: [
        {title:'View Patients',icon:'mdi-seat-individual-suite', to:'/main/patients'},
        {title:'Add New Patient',icon:'mdi-account-plus',to:'/main/newpatient'},
        {title:'Patient Remainders',icon:'mdi-bell-ring',to:'/main/create_reminder'}
      ],
      reports: [
          {title:'Reports',icon:'mdi-chart-bar',to:'/main/reports' }
      ],
      staffs: [
          {title:'View Staffs',icon:'mdi-account-tie',to:'/main/staffs'},
          {title:'Add New Staff',icon:'mdi-account-plus',to:'/main/newstaff'}
      ],
      charts: [
          {title:'View Chats',icon:'mdi-message-bulleted'},
          {title:'create chart',icon:'mdi-message-draw'}
      ]

    }),
    created(){
      EventBus.$on('logout', () => {
        User.logout()
      })
    },

    }


</script>

<style>

</style>
