
<template v-slot:activator="{ on, attrs }">
<div class="ma-12 pa-12">
    <template>
    <v-card>
    <v-navigation-drawer
    permanent
    expand-on-hover
    v-model="drawer"
    app
      >
    <v-list>
        <v-list-item>
           <v-list-item>
               <v-list-item-icon>
                <v-icon>mdi-hospital-building</v-icon>
               </v-list-item-icon>
                <v-list-item-title>HPMS</v-list-item-title>
              </v-list-item>
        </v-list-item>
                      <v-divider></v-divider>

          </v-list>


      <v-list
      nav
      dense
      >
      <v-list-item
            v-for="(dashboard, index) in dashboards"
            :key="index"
            :to="dashboard.to"
              >
              <v-list-item-icon>
              <v-icon>{{dashboard.icon}}</v-icon>
            </v-list-item-icon>
            <v-list-item-title >DASHBOARD</v-list-item-title>
         </v-list-item>

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
             <v-list-item-title>LabTest</v-list-item-title>
            </template>

             <v-list-item
            v-for="(labtest, index) in labtests"
            :key="index"
            :to="labtest.to"
              >
            <v-list-item-title>{{labtest.title}}</v-list-item-title>
             <v-list-item-icon>
              <v-icon>{{labtest.icon}}</v-icon>
             </v-list-item-icon>
           </v-list-item>
          </v-list-group>
      </v-list>
    </v-navigation-drawer>
    </v-card>
    </template>




    <v-app-bar
      app
      color="indigo"
      dark
    >
      <!-- <v-app-bar-nav-icon @click.stop="drawer = !drawer" /> -->
<v-spacer></v-spacer>
      <v-toolbar-title>Labtechnician Dashboard</v-toolbar-title>
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
              {{ user }}
        </v-btn>
      </template>
      <v-list>
        <v-list-item
          v-for="(item, index) in items"
          :key="index"
          :to="item.to"

        >

          <v-list-item-title>{{ item.title }}</v-list-item-title>

        </v-list-item>
      </v-list>
    </v-menu>
    </v-app-bar>


      <!-- <router-view> </router-view> -->

</div>
</template>

<script>

export default {
     props: {
      source: String,
    },
    data: () => ({

      drawer: null,
      user:User.name(),
      items: [
        { title: 'Profile', to:'/users/{id}' },
        { title: 'Logout',to:'/logout' },
      ],

      reports: [
          {title:'Reports',icon:'mdi-chart-bar',to:'/labtest/reports' }
      ],
      labtests: [
          {title:'View LabTests',icon:'mdi-beaker-outline',to:'/labtest/viewlabtest'},
          {title:'New Labtest',icon:'mdi-beaker',to:'/labtest/newlabtest'}
      ],
       dashboards: [
          {icon:'mdi-view-dashboard',to:'/labtest/dashboard' }
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
