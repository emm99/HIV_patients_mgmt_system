<template>
 <v-content>
   <v-container>
    <v-row dense
     justify="space-around"
    >
         <v-col cols="3.5"
          style="margin-top: -180px;margin-right: 10px;"
         >

               <v-card
               color="#385F73"
               dark
                >
                  <v-card-title class="headline">HEALTH FACILITY</v-card-title>
                   <v-divider></v-divider>
                 <v-card-subtitle class="headline"><v-spacer></v-spacer>{{health_facility.name}} Hospital<br/></v-card-subtitle>

                  <!-- <v-card-actions>
                    <v-btn text>Listen Now</v-btn>
                  </v-card-actions> -->
                </v-card>

         </v-col>

          <v-col cols="3.5"
          style="margin-top: -180px;margin-right: 10px;"
          >

               <v-card
                color="#385F73"
                dark
               >
                 <v-card-title class="headline">LOCATION</v-card-title>
                   <v-divider></v-divider>
                 <v-card-subtitle sub>DISTRICT: {{ health_facility.district }}<br/>
                 Region: {{ health_facility.region }}
                 </v-card-subtitle>

                 <!-- <v-card-actions>
                   <v-btn text>Listen Now</v-btn>
                 </v-card-actions> -->
                </v-card>

             </v-col>

             <v-col cols="3.5"
             style="margin-top: -180px;margin-right: 10px;"
             >

                <v-card
                 color="#385F73"
                 dark
                 >
                   <v-card-title class="headline">STAFFS AVAILABLE</v-card-title>
                          <v-divider></v-divider>
                  <v-card-subtitle class="headline">{{ health_facility.staffs.length }} Staffs</v-card-subtitle>
                  <!-- <v-card-actions>
                   <v-btn text>Listen Now</v-btn>
                  </v-card-actions> -->
                </v-card>

             </v-col>
   <v-col
    cols="8"
     style="margin-left: 250px;margin-top: 30px;"
   >
       <v-row
        align="strech">
           <v-card
            color="#385F73"
            dark
          >
            <v-card-title class="headline">USER PROFILE</v-card-title>
            <v-divider></v-divider>

           <v-card-text class="headline">
              Name: {{ staffs.name }}<br/>
              Position: {{ staffs.position }}<br/>
              Username: {{ staffs.username }}<br/>
              Email: {{ staffs.email }}<br />
              Health Facility: {{ staffs.health_facility }}<br/>
              Registered: {{ staffs.created_at  }}<br/>
           </v-card-text>

            <v-card-actions>
              <v-btn text>Edit Information</v-btn>
            </v-card-actions>
          </v-card>
         </v-row>
        </v-col>
        </v-row>


    </v-container>
            </v-content>
</template>

<script>
export default {
    data:()=>({
   items: [],
      health_facility:[],
      staffs:[],
      result:''

}),
   created(){
            this.loadFacility(User.healthFacility());
            this.loadUser(User.id());
        },
methods:{
    loadFacility(id){
        axios.get(`api/health_facility/${id}`)
        .then(res => this.health_facility=res.data.data)
        .catch(error => console.log(error.response.data))
    },
    loadUser(id){
        axios.get(`api/staff/${id}`)
        .then(res => this.staffs=res.data.data)
        .catch(error=>console.log(error.response.data))
    }
}
}
</script>

<style>

</style>
