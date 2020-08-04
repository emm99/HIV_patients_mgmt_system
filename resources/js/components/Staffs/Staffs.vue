<template>
<v-content>

  <v-card
 style="margin-top: -190px;margin-left: 25px;margin-right: 25px;margin-bottom: 45px; "
  >
    <v-card-title>
      Staffs
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
            <v-spacer></v-spacer>
       <v-btn
              color="primary"
              dark
              text-color="white"
              class="mb-2; align-end;"
              to="/admin/newstaff"
            >Add Staff
            </v-btn>
    </v-card-title>
  <v-data-table
      :headers="headers"
      :items="facility"
      :search="search"
    >
    <template>
              <div
                v-for="staff in facility"
                v-bind:key="staff.id"
                :data=staff
              >
                   <td >{{ staff.name }}</td>
                   <td >{{ staff.position }}</td>
                   <td >{{ staff.username }}</td>
                   <td >{{ staff.email }}</td>
                   <td >{{ staff.health_facility }}</td>
                   <td >{{ staff.district }}</td>
                   <td >{{ staff.region }}</td>
                   <td >{{ staff.created_at }}</td>
             </div>
    </template>
            <template
            #item.actions="{item}">
               <span
               :key="item.id"
               >
               <v-btn icon
               @click="destroy(item)"
               color="red"
               x-small
               >
               <v-icon>
                mdi-delete
                 </v-icon>
               </v-btn>
               </span>
            </template>

         </v-data-table>
      </v-card>

     </v-content>
</template>


<script>
export default {
     props: ['data'],
    created(){
       this.loadUsers(User.healthFacility());
       this.$on('reload',() =>{
           this.loadUsers();
           alert('Deleted Successful');
       })
       this.staff_id(User.id());
    },

    data(){
        return{
         search: '',
         headers: [
          {
            text: 'Name',
            align: 'start',
            sortable: false,
            value: 'name',
          },
          { text: 'Position', value: 'position' },
          { text: 'User Name', value: 'username' },
          { text: 'Email', value: 'email' },
          { text: 'Health Facility', value: 'health_facility' },
          { text: 'District', value: 'district' },
          { text: 'Region', value: 'region' },
          { text: 'Date_created', value: 'created_at' },
          { text: 'Actions',value:'actions',sortable:false }
        ],
        facility:[
        ],

        } },
        methods:{
           loadUsers(id){
                   axios.get(`/api/health_facility/${id}`)
                   .then(res => this.facility =res.data.data.staffs)
                   .catch(error => console.log(error.response.data))
               },

            staff_id(id){
                return id;
            },

            destroy(item){
                let response = confirm(`Are you sure you want to delete ${ item.name }`)
                if(response){
                    // axios.delete('/api/auth/user/'+id)
                    axios.delete(`/api/auth/user/${item.id}`)
                    .then(()=>{
                        this.$emit('reload');
                    })
                    .catch(error=>console.log(error.response.data))
                }
            },
        }
    }
</script>
