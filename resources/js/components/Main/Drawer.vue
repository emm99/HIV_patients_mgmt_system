
<template v-slot:activator="{ on, attrs }">
<div>
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-list dense>
        <v-list-item link>
          <v-list-item-action>
            <v-icon>mdi-home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Users</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link>
          <v-list-item-action>
            <v-icon>mdi-contact-mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Create Users</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="indigo"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title>Application  </v-toolbar-title>
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
          @click=""
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
      ]
    }),
    created(){
      EventBus.$on('logout', () => {
        User.logout()
      })
    }
    }


</script>

<style>

</style>
