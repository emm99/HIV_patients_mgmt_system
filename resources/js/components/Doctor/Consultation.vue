<template>
<v-content>

  <v-card
   style="margin-top: -190px;margin-left: 25px;margin-right: 25px;margin-bottom: 45px; "
  >
    <v-card-title>
      Patients
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="patients"
      :search="search"
    >
 <template>
   <div
   v-for="patient in patients"
     v-bind:key="patient.id"
     :data=patient
     >
      <td >{{ patient.Firstname }}</td>
      <td >{{ patient.Lastname }}</td>
      <td >{{ patient.Gender }}</td>
      <td >{{ patient.Maritialstatus }}</td>
      <td >{{ patient.District }}</td>
      <td >{{ patient.Region }}</td>
      <td >{{ patient.created_at }}</td>
     </div>
      </template>
       <template v-slot:item.actions="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    </v-data-table>
  </v-card>

</v-content>
</template>


<script>
export default {
     props: ['data']
    ,
    created(){
        axios.get('/api/patient')
        .then(res => this.patients =res.data.data)
        .catch(error => console.log(error.response.data))
    },

    data(){
        return{
             search: '',
         headers: [
          {
            text: 'Firstname',
            align: 'start',
            sortable: false,
            value: 'Firstname',
          },
          { text: 'Lastname', value: 'Lastname' },
          { text: 'Gender', value: 'Gender' },
          { text: 'Maritialstatus', value: 'Maritialstatus' },
          { text: 'District', value: 'District' },
          { text: 'Region', value: 'Region' },
          { text: 'created_at', value: 'created_at' },
          { text: 'Actions',value:'actions',sortable:false }
        ],
        patients:[

        ],

        } }
    }
</script>
